<?php

use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\register\SellerRegisterStep1Controller;
use App\Http\Controllers\Seller\register\SellerRegisterStep2Controller;
use App\Http\Controllers\Seller\register\SellerRegisterStep3Controller;
use App\Http\Controllers\Seller\register\SellerRegisterStep4Controller;
use App\Http\Controllers\Seller\RegisterController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerJoinController;
use App\Models\Admin;
use App\Notifications\SellerJoinRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest:web,admin', 'lang.switch'], 'prefix' => 'seller', 'as' => 'seller.'], function () {
    Route::get('/join', [SellerJoinController::class, 'index'])->name('join');


    Route::get('/register', [RegisterController::class, 'Create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::get('/waiting', function () {
        return view('seller.waiting');
    })->name('waiting');

    // Route::get('/sellerRegisterStep1',[SellerRegisterStep1Controller::class,'Create'])->name('register_step1');
    // Route::post('/sellerRegisterStep1',[SellerRegisterStep1Controller::class,'store']);

    // Route::get('/sellerRegisterStep2',[SellerRegisterStep2Controller::class,'Create'])->name('register_step2');
    // Route::post('/sellerRegisterStep2',[SellerRegisterStep2Controller::class,'store']);

    // Route::get('/sellerRegisterStep3',[SellerRegisterStep3Controller::class,'Create'])->name('register_step3');
    // Route::post('/sellerRegisterStep3',[SellerRegisterStep3Controller::class,'store']);

    // Route::get('/sellerRegisterStep4',[SellerRegisterStep4Controller::class,'Create'])->name('register_step4');
    // Route::post('/sellerRegisterStep4',[SellerRegisterStep4Controller::class,'store']);


});



Route::group(['middleware' => ['auth:web', 'verified', 'role:seller', 'check_approval', 'lang.switch'], 'prefix' => 'seller', 'as' => 'seller.'], function () {


    Route::get('/dashboard', [SellerDashboardController::class, 'index'])->name('dashboard');

    // product route
    Route::get('/addProduct', [ProductController::class, 'create'])->name('addProduct');
    Route::post('/addProduct', [ProductController::class, 'store'])->name('addProduct');




    Route::get('/showProducts', [ProductController::class, 'showProduct'])->name('showProducts');
    Route::get('/showorders', [ProductController::class, 'showOrder'])->name('showOrders');
});
