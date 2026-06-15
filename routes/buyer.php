<?php

use App\Http\Controllers\Buyer\BuyerDashboardController;
use App\Http\Controllers\Buyer\CartController;
use App\Http\Controllers\Buyer\CheckoutController;
use App\Http\Controllers\Buyer\ProductDetailsController;
use App\Http\Controllers\Buyer\WishlistController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest:web,admin', 'lang.switch'], 'prefix' => 'buyer', 'as' => 'buyer.'], function () {

    Route::get('/about_us', function () {
        return view('buyer.about-us');
    })->name('about_us');
});

Route::group(['middleware' => ['auth:web', 'verified', 'role:buyer', 'lang.switch'], 'prefix' => 'buyer', 'as' => 'buyer.'], function () {
    Route::get('/dashboard', [BuyerDashboardController::class, 'index'])->name('dashboard');
    Route::get('/search', [BuyerDashboardController::class, 'search'])->name('search');


    Route::get('/product_details/{product_id}', [ProductDetailsController::class, 'index'])->name('show_product_details');


    // cart routs
    Route::get('/showCart', [CartController::class, 'index'])->name('show_cart');
    Route::get('/addToCart/{product_id}', [BuyerDashboardController::class, 'addToCart'])->name('addToCart');
    Route::delete('/removeFromCart/{product_id}', [CartController::class, 'destroy'])->name('product_cart.remove');
    Route::delete('/cartCheckout', [CartController::class, 'cartCheckout'])->name('cartCheckout');



    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/addToWishlist/{product_id}', [BuyerDashboardController::class, 'addToWishlist'])->name('addToWishlist');



    // checkout
    Route::get('/checkout_all', [CheckoutController::class, 'index'])->name('checkout_all');
    Route::get('/checkout/{product_id}', [CheckoutController::class, 'show'])->name('checkout');

});
