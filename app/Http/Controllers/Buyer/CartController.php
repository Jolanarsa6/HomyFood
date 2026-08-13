<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = $user->productCart;
        return view('buyer.cart',compact('products'));
    }

    public function destroy(int $product_id)
    {
        $user= Auth::user();
        $product = Product::findOrFail($product_id);
        $user->productCart()->detach($product);
        return redirect()->back()->with('remove_success', __('messages.delete_from_wishlist'));
    }
}
