<?php

use App\Http\Controllers\Buyer\BuyerDashboardController;
use App\Http\Controllers\Buyer\CheckoutController;
use App\Http\Controllers\Buyer\ProductDetailsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth:web' , 'verified' , 'role:buyer','lang.switch'], 'prefix' => 'buyer','as' => 'buyer.' ] , function(){
    Route::get('/dashboard',[BuyerDashboardController::class,'index'])->name('dashboard');
    Route::get('/product_details/{product_id}',[ProductDetailsController::class, 'index'])->name('show_product_details');
    Route::get('/checkout/{product_id}',[CheckoutController::class, 'index'])->name('checkout');


});