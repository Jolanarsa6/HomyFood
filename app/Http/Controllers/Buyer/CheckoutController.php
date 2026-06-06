<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('buyer/checkout',compact('product'));
    }
}
