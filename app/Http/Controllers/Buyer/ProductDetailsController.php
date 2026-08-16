<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductDetailsController extends Controller
{
    public function index(int $product_id)
    {
        
        $product = Product::with('comments.user')->findOrFail($product_id);
        return view('buyer/product_details',compact('product'));
    }

    public function showAll()
    {
        $products = Product::all();
        return view('buyer.searchResult',compact('products'));
    }

}
