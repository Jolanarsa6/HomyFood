<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = $user->productWishlists;
        return view('buyer.wishlist',compact('products'));
    }
       public function destroy(int $product_id)
    {
        $user= Auth::user();
        $product = Product::findOrFail($product_id);
        $user->productWishlists()->detach($product);
        return redirect()->back()->with('success','the product deleted successfuly');
    }

       public function toggle($productId)
    {
        $user = Auth::user();
        
        $result = $user->productWishlists()->toggle($productId);

        $isFavorite = in_array($productId, $result['attached']);

        return response()->json([
            'status' => 'success',
            'is_favorite' => $isFavorite
        ]);
    }
}
