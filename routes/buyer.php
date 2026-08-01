<?php

use App\Http\Controllers\Buyer\BuyerDashboardController;
use App\Http\Controllers\Buyer\CartController;
use App\Http\Controllers\Buyer\CheckoutController;
use App\Http\Controllers\Buyer\ConnectUsController;
use App\Http\Controllers\Buyer\ProductDetailsController;
use App\Http\Controllers\Buyer\WishlistController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['lang.switch'], 'prefix' => 'buyer', 'as' => 'buyer.'], function () {

    Route::get('/showAll', [ProductDetailsController::class, 'showAll'])->name('all_products.show');
    Route::get('/about_us', function () {
        return view('buyer.about-us');
    })->name('about_us');

    Route::get('/contact_us', [ConnectUsController::class, 'index'])->name('contact_us.show');
    Route::post('/contact_us_send', [ConnectUsController::class, 'store'])->name('contact_us.store');

    Route::get('/search', [BuyerDashboardController::class, 'search'])->name('search');
});

Route::group(['middleware' => ['auth:web', 'verified', 'role:buyer', 'lang.switch'], 'prefix' => 'buyer', 'as' => 'buyer.'], function () {
    Route::get('/dashboard', [BuyerDashboardController::class, 'index'])->name('dashboard');


    Route::get('/product_details/{product_id}', [ProductDetailsController::class, 'index'])->name('show_product_details');


    // cart routs
    Route::get('/showCart', [CartController::class, 'index'])->name('show_cart');
    Route::get('/addToCart/{product_id}', [BuyerDashboardController::class, 'addToCart'])->name('addToCart');
    Route::delete('/removeFromCart/{product_id}', [CartController::class, 'destroy'])->name('product_cart.remove');
    Route::delete('/cartCheckout', [CartController::class, 'cartCheckout'])->name('cartCheckout');



    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/addToWishlist/{product_id}', [BuyerDashboardController::class, 'addToWishlist'])->name('addToWishlist');
    Route::delete('/removeFromWishlist/{product_id}', [WishlistController::class, 'destroy'])->name('wishlist.remove');


    // ................
    Route::post('/wishlist/toggle/{productId}', [WishlistController::class, 'toggle'])->middleware('auth');
    //.................


    // checkout
    Route::get('/checkout_all', [CheckoutController::class, 'index'])->name('checkout_all');
    Route::get('/checkout/{product_id}', [CheckoutController::class, 'show'])->name('checkout');
    Route::get('/special-offers', function () {
        return view('buyer.special-offers');
    })->name('special-offers');

    Route::get('/compare', function () {
        $products = Product::all();
        return view('buyer.compare', compact('products'));
    })->name('compare');
});
