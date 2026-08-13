<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

    // 1. إحصائيات المنتجات الأساسية
    $totalProducts = Product::where('user_id', $userId)->count();
    $totalProductValue = Product::where('user_id', $userId)->sum('price');
    $avgPrice = Product::where('user_id', $userId)->avg('price') ?? 0;

    // 2. إحصائيات السلة (مؤشر الطلب على منتجات هذا البائع)
    $cartStats = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('products.user_id', $userId)
        ->select(
            DB::raw('COUNT(cart.id) as total_cart_items'),
            DB::raw('SUM(products.price) as total_cart_value'),
            DB::raw('COUNT(DISTINCT cart.user_id) as unique_buyers')
        )
        ->first();

    $avgCartValue = $cartStats->unique_buyers > 0 
        ? $cartStats->total_cart_value / $cartStats->unique_buyers 
        : 0;

    // 3. المنتجات الأكثر طلباً (الأكثر وجوداً في السلة)
    $topRequestedProducts = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('products.user_id', $userId)
        ->select(
            'products.id',
            'products.product_ar_name',
            'products.product_en_name',
            'products.price',
            DB::raw('COUNT(cart.id) as request_count')
        )
        ->groupBy('products.id', 'products.product_ar_name', 'products.product_en_name', 'products.price')
        ->orderBy('request_count', 'desc')
        ->take(3)
        ->get();

    $totalRequests = $topRequestedProducts->sum('request_count');
    foreach ($topRequestedProducts as $prod) {
        $prod->percentage = $totalRequests > 0 ? round(($prod->request_count / $totalRequests) * 100) : 0;
    }

    // 4. أفضل الفئات لدى البائع (حسب عدد المنتجات في كل فئة)
    $topCategories = Category::join('product_category', 'categories.id', '=', 'product_category.category_id')
        ->join('products', 'product_category.product_id', '=', 'products.id')
        ->where('products.user_id', $userId)
        ->select('categories.name', DB::raw('COUNT(products.id) as product_count'))
        ->groupBy('categories.id', 'categories.name')
        ->orderBy('product_count', 'desc')
        ->take(3)
        ->get();

    $totalCatProducts = $topCategories->sum('product_count');
    foreach ($topCategories as $cat) {
        $cat->percentage = $totalCatProducts > 0 ? round(($cat->product_count / $totalCatProducts) * 100) : 0;
    }

    // 5. المنتجات المضافة خلال آخر 7 أيام (للمخطط)
    $trend = Product::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
        ->where('user_id', $userId)
        ->where('created_at', '>=', Carbon::now()->subDays(7))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

    $trendData = [];
    $maxCount = 1;
    for ($i = 6; $i >= 0; $i--) {
        $date = Carbon::now()->subDays($i)->toDateString();
        $record = $trend->firstWhere('date', $date);
        $count = $record ? $record->count : 0;
        $trendData[] = $count;
        if ($count > $maxCount) $maxCount = $count;
    }

    return view('seller.analytics', compact(
        'totalProducts', 'totalProductValue', 'avgPrice',
        'cartStats', 'avgCartValue',
        'topRequestedProducts', 'totalRequests',
        'topCategories', 'totalCatProducts',
        'trendData', 'maxCount'
    ));
    }
}
