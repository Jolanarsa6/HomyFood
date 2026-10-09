<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\QueryException;
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
        // dd($products);
        return view('home', compact('products'));
    }

    public function addToCart(int $product_id)
    {
        try {

            $user = Auth::user();
            $product = Product::findOrFail($product_id);
            $user->productCart()->attach($product);
            
            return redirect()->back()->with('success',__('messages.cart_success'));
        } catch (QueryException $e) {
            if ($e->getCode() === '23000' || str_contains($e->getMessage(), 'Duplicate entry')) {

                return redirect()->back()->with('error', __('messages.cart_error'));
            }
        }
    }
    public function addToWishlist(int $product_id)
    {
        try {
            $user = Auth::user();
            $product = Product::findOrFail($product_id);
            $user->productWishlists()->attach($product);

            return redirect()->back()->with('success', __("messages.add_to_wishlist"));
        } catch (QueryException $e) {
            if ($e->getCode() === '23000' || str_contains($e->getMessage(), 'Duplicate entry')) {

                return redirect()->back()->with('error',__("messages.wishlist_error"));

                // OPTION B: Automatically increase the quantity instead of failing
                /*
            Cart::where('user_id', auth()->id())
                ->where('product_id', $request->product_id)
                ->increment('quantity', $request->quantity ?? 1);
                
            return redirect()->back()->with('success', 'Cart quantity updated!');
            */
            }

            throw $e;
        }
    }
    public function search(Request $request)
    {
        $products = Product::when($request->has('search'), function ($query) use ($request) {
            $query->where('product_ar_name', 'LIKE', "%$request->search%")
                ->orWhere('product_en_name', 'LIKE', "%$request->search%")
                ->orWhere('brand', 'LIKE', "%$request->search%")
                ->orWhere('palce_of_origin', 'LIKE', "%$request->search%");
        })->get();

        return view('buyer.searchResult', compact('products'));
    }

    public function filter_product($product_name)
    {
        $products = Product::whereHas('categories', function ($query) use ($product_name) {
            $query->where('name', $product_name); 
        })->with('categories')->get();
        return view('buyer.searchResult', compact('products'));
    }
}
