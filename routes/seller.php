<?php

use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerRegisterController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth:web' , 'verified' , 'role:seller', 'check_approval','lang.switch'], 'prefix' => 'seller','as' => 'seller.' ] , function(){
        Route::get('/dashboard',[SellerDashboardController::class,'index'])->name('dashboard');
Route::get('/addProduct',[ProductController::class,'index']);


});


// for test
Route::get('/beforeJoin',function(){
    return view('seller.product.manageRequest');
})->name('sellerWaiting');



Route::get('/sellerRegister',[SellerRegisterController::class,'index'])->name('sellerRegister');
Route::get('/sellerWaiting',function(){
    return view('seller.waiting');
})->name('sellerWaiting');



