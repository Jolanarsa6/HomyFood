<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellerDashboardController extends Controller
{
    public function index()
    {
 $seller = Auth::user();
        
        // 1. بيانات البائع (اسم المتجر من profile)
        $profile = Profile::where('user_id', $seller->id)->first();
        $storeName = $profile ? $profile->username : $seller->full_name;

        // 2. إحصائيات المنتجات
        $totalProducts = Product::where('user_id', $seller->id)->count();
        $avgPrice = Product::where('user_id', $seller->id)->avg('price') ?? 0;
        $lowStockProducts = Product::where('user_id', $seller->id)
                                    ->where('available_quantity', '<=', 5)
                                    ->count();

        // 3. تقييم البائع (تقديري - بناءً على عدد التعليقات العامة مثلاً)
        $totalComments = Comment::count(); // مؤشر عام

        // 4. المنتجات المضافة خلال آخر 7 أيام (للمخطط الشريطي)
        $trend = Product::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(*) as count'))
            ->where('user_id', $seller->id)
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

        // 5. آخر 5 منتجات مضافة (لجدول "أحدث المنتجات")
        $latestProducts = Product::where('user_id', $seller->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // 6. أفضل المنتجات أداءً (أعلى سعراً، حيث لا يوجد مبيعات)
        $topProducts = Product::where('user_id', $seller->id)
            ->orderBy('price', 'desc')
            ->take(3)
            ->get();

        // حساب النسب المئوية لأفضل المنتجات (لأشرطة التقدم)
        $totalPrice = $topProducts->sum('price');
        foreach ($topProducts as $product) {
            $product->percentage = $totalPrice > 0 ? round(($product->price / $totalPrice) * 100) : 0;
        }

        // 7. آخر تعليق عميل (من جدول comments العام)
        $latestComment = Comment::latest()->first();

        return view('seller.dashboard', compact(
            'seller', 'storeName', 'totalProducts', 'avgPrice', 
            'lowStockProducts', 'totalComments', 'trendData', 
            'maxCount', 'latestProducts', 'topProducts', 'latestComment'
        ));
    
    }
}
