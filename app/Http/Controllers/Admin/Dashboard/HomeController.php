<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
    //     $admin = Auth::guard('admin')->user();
    //    $payments = $admin->payments()->get();
    //     $sellers = User::role('seller')->get();
    //     $products = Product::all();
    // return view('admin.dashboard',compact('payments','sellers','products'));

// 1. إجمالي قيمة المنتجات في السلة (كمؤشر للإيرادات المحتملة)
    $totalCartValue = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->sum('products.price');

    // 2. عدد البائعين النشطين (approved sellers)
    $activeVendors = User::role('seller')->where('status', 'approved')->count();

    // 3. عدد التعليقات (كمؤشر لرضا العملاء)
    $totalComments = DB::table('comments')->count();

    // 4. عدد طلبات الانضمام المعلقة (قضايا تحتاج تدخل)
    $pendingSellers = User::role('seller')->where('status', 'pending')->count();

    // 5. آخر 3 طلبات انضمام معلقة لعرضها في الجدول
    $pendingRequests = User::role('seller')
        ->where('status', 'pending')
        ->orderBy('created_at', 'desc')
        ->take(3)
        ->get(['id', 'full_name', 'email', 'created_at']);

    // تجهيز البيانات للجدول (إذا كان العدد أقل من 3، نعرض ما هو متاح فقط)
    // سأعرضهم مباشرة في الـ Blade، وسنضيف صفوفاً افتراضية إذا لزم الأمر.

    return view('admin.dashboard', compact(
        'totalCartValue', 
        'activeVendors', 
        'totalComments', 
        'pendingSellers', 
        'pendingRequests'
    ));
    }

}
