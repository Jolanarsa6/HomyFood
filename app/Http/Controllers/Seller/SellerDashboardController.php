<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        
        $profile = Profile::where('user_id', $seller->id)->first();
        $storeName = $profile ? $profile->username : $seller->full_name;

        $totalProducts = Product::where('user_id', $seller->id)->count();
        $avgPrice = Product::where('user_id', $seller->id)->avg('price') ?? 0;
        $lowStockProducts = Product::where('user_id', $seller->id)
                                    ->where('available_quantity', '<=', 5)
                                    ->count();
        
        $totalComments = Comment::count(); 

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

        $latestProducts = Product::where('user_id', $seller->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $topProducts = Product::where('user_id', $seller->id)
            ->orderBy('price', 'desc')
            ->take(3)
            ->get();

        $totalPrice = $topProducts->sum('price');
        foreach ($topProducts as $product) {
            $product->percentage = $totalPrice > 0 ? round(($product->price / $totalPrice) * 100) : 0;
        }

        $latestComment = Comment::latest()->first();

        return view('seller.dashboard', compact(
            'seller', 'storeName', 'totalProducts', 'avgPrice', 
            'lowStockProducts', 'totalComments', 'trendData', 
            'maxCount', 'latestProducts', 'topProducts', 'latestComment'
        ));
    
    }
}
