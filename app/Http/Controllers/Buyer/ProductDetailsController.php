<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        return view('buyer/product_details',compact('product'));
    }

    public function showAll()
    {
        $products = Product::all();
        return view('buyer/searchResult',compact('products'));
    }
}
