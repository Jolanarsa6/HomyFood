<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteAnalyticsController extends Controller{ 

     public function index(){
         // 1. إجمالي المستخدمين
        $totalUsers = User::count();

        // 2. البائعون النشطون (حسب الـ role و status)
        $activeSellers = User::role('seller')->where('status', 'approved')->count();

        // 3. إجمالي المنتجات
        $totalProducts = Product::count();

        // ====== إحصائيات السلة (بدون Model) ======
        // حساب إجمالي قيمة العناصر في السلة لجميع المستخدمين
        $cartStats = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->select(
                DB::raw('SUM(products.price) as total_cart_value'),
                DB::raw('COUNT(DISTINCT cart.user_id) as unique_buyers')
            )
            ->first();

        // حساب متوسط السلة
        $avgBasket = $cartStats->unique_buyers > 0 
            ? $cartStats->total_cart_value / $cartStats->unique_buyers 
            : 0;

        // إجمالي عدد العناصر في السلة (للعرض فقط)
        $totalCartItems = DB::table('cart')->count();

        // ====== المنتجات المضافة خلال آخر 7 أيام (للمخطط) ======
        $productTrend = Product::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // تعبئة الأيام الفارغة بـ 0
        $trendData = [];
        $maxCount = 1;
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->toDateString();
            $record = $productTrend->firstWhere('date', $date);
            $count = $record ? $record->count : 0;
            $trendData[] = $count;
            if ($count > $maxCount) $maxCount = $count;
        }

        // ====== أفضل الفئات ======
        $topCategories = Category::withCount('products')
            ->orderBy('products_count', 'desc')
            ->take(3)
            ->get();

        $totalCategoryProducts = $topCategories->sum('products_count');
        foreach ($topCategories as $cat) {
            $cat->percentage = $totalCategoryProducts > 0 
                ? round(($cat->products_count / $totalCategoryProducts) * 100) 
                : 0;
        }

        return view('admin.siteAnalytics', compact(
            'totalUsers', 'activeSellers', 'totalProducts', 
            'avgBasket', 'totalCartItems', 'trendData', 
            'maxCount', 'topCategories'
        ));
     }
   
}
