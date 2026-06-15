<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BuyerDashboardController extends Controller
{
    public function index()
    {
        // $allMedia = Media::where('collection_name','images')->get();
        // foreach($allMedia as $media){
        //     $media->delete();
        // }

        $products = Product::all();
        return view('dashboard',compact('products'));
    }

    public function addToCart(int $product_id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($product_id);
        $user->productCart()->attach($product);
        return redirect()->back()->with('cartSuccess','Product added to cart successfuly');
    }

    public function addToWishlist(int $product_id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($product_id);
        $user->productWishlists()->attach($product);
        return redirect()->back()->with('wishlistSuccess','Product added to wishlist successfuly');
    }

    public function search(Request $request)
    {
        $products = Product::when($request->has('search'),function($query) use ($request){
            $query->where('product_ar_name','LIKE',"%$request->search%")
            ->orWhere('product_en_name','LIKE',"%$request->search%")
            ->orWhere('brand','LIKE',"%$request->search%")
            ->orWhere('palce_of_origin','LIKE',"%$request->search%");
        })->get();

        return view('buyer.searchResult',compact('products'));
    }

}
