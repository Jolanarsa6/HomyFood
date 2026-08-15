<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\ProductInformationsRequest;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\Packaging;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function create()
    {
        $packagings = Packaging::all();
        $payments = Payment::all();
        $deliveries = Delivery::all();
        $categories = Category::all();

        return view('seller.add-product', compact('packagings', 'payments', 'deliveries', 'categories'));
    }

    function store(ProductInformationsRequest $request)
    {

        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;

        $product = Product::create($data);

        //    $product->categories()->attach($request->category_id);
        $product->categories()->sync($request->input('category_id', []));
        $product->packagings()->sync($request->input('packaging_id', []));
        $product->payments()->sync($request->input('payment_id', []));

        //    $product->deliveries()->attach($request->delivery_id);

        $product->deliveries()->sync($request->input('delivery_id', []));

        //  $deliveryIds = $request->input('delivery_id', []);

        // 4. Insert into the pivot table
        // $product->deliveries()->sync($deliveryIds);



        // Assuming $request->validated() or request() is used
        if ($request->hasFile('product_image')) {
            // $product->addMediaFromRequest('product_image')->toMediaCollection('Product_Images');
            $product->addMediaFromRequest('product_image')->toMediaCollection('product_images');

            //    $product->addMediaFromRequest('product_image')->toMediaCollection('ProductImages');
        }
        if ($request->hasFile('video')) {
            $product->addMediaFromRequest('product_video')->toMediaCollection('ProductVideos');
        }
        return redirect()->back()->with('success', 'Categories added successfully!');

        // return redirect('/');
    }

    public function showProduct()
    {
        $products = Auth::user()->products()->get();
        $lowStockProducts = Auth::user()->products()
            ->where('available_quantity', '<=', 5)
            ->count();
        $categories = Category::all();

        return view("seller.product", compact('products', 'lowStockProducts', 'categories'));
    }

    public function showOrders()
    {
        $prodcts = Auth::user()->products();
        $categories = Category::all();
        return view("seller.orders", compact('products', 'categories'));
    }

    public function search(Request $request)
    {
        $products = Product::when($request->has('search'), function ($query) use ($request) {
            $query->where('product_ar_name', 'LIKE', "%$request->search%")
                ->orWhere('product_en_name', 'LIKE', "%$request->search%")
                ->orWhere('brand', 'LIKE', "%$request->search%");
        })->get();
        $lowStockProducts = Auth::user()->products()
            ->where('available_quantity', '<=', 5)
            ->count();
        $categories = Category::all();
        return view("seller.product", compact('products', 'lowStockProducts', 'categories'));
    }

    public function showComments()
    {
        // $prodcts = Auth::user()->products();
        // $categories = Category::all();
        return view("seller.messages");
    }
}
