<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function createBox()
{
    // جلب جميع منتجات البائع الحالي لعرضها في القائمة
    // $products = Product::where('user_id', auth()->id())
    //             ->orderBy('created_at', 'desc')
    //             ->get();
    $products = Product::all();

    return view('seller.box', compact('products'));
}

// public function storeBox(Request $request)
// {
//     // منطق حفظ الصندوق في جدول boxes (حسب قاعدة البيانات لديك)
//     $request->validate(['product_ids' => 'required|array']);
    
//     // مثال على الحفظ (سيحتاج لتعديل حسب الهيكل)
//     // $box = Box::create(['user_id' => auth()->id()]);
//     // $box->products()->sync($request->product_ids);

//     return redirect()->route('seller.dashboard')->with('success', 'تم إنشاء الصندوق بنجاح!');
// }
}
