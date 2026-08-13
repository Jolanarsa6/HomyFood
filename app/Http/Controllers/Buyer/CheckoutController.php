<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Packaging;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {
        $product = Auth::user()->productCart()->get();
        $no = 1000;
        return view('buyer.checkout',compact('product','no'));
    }
    public function show(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        $no = 1;
        return view('buyer.checkout',compact('product','no'));
    }
}
