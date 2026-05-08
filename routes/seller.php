<?php

use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\register\SellerRegisterStep1Controller;
use App\Http\Controllers\Seller\register\SellerRegisterStep2Controller;
use App\Http\Controllers\Seller\register\SellerRegisterStep3Controller;
use App\Http\Controllers\Seller\register\SellerRegisterStep4Controller;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerJoinController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest:web,admin' ,'lang.switch'], 'prefix' => 'seller','as' => 'seller.' ] , function(){
Route::get('/join',[SellerJoinController::class,'index'])->name('join');

Route::get('/sellerRegister',[SellerRegisterStep1Controller::class,'Create'])->name('register');
Route::post('/sellerRegister',[SellerRegisterStep1Controller::class,'store']);

Route::get('/sellerRegisterStep2',[SellerRegisterStep2Controller::class,'Create'])->name('register_step2');
Route::post('/sellerRegisterStep2',[SellerRegisterStep2Controller::class,'store']);

Route::get('/sellerRegisterStep3',[SellerRegisterStep3Controller::class,'Create'])->name('register_step3');
Route::post('/sellerRegisterStep3',[SellerRegisterStep3Controller::class,'store']);

Route::get('/sellerRegisterStep4',[SellerRegisterStep4Controller::class,'Create'])->name('register_step4');
Route::post('/sellerRegisterStep4',[SellerRegisterStep4Controller::class,'store']);


});



Route::group(['middleware' => ['auth:web' , 'verified' , 'role:seller', 'check_approval','lang.switch'], 'prefix' => 'seller','as' => 'seller.' ] , function(){
        Route::get('/dashboard',[SellerDashboardController::class,'index'])->name('dashboard');
Route::get('/addProduct',[ProductController::class,'index']);





});


// for test



Route::get('/sellerWaiting',function(){
    return view('seller.waiting');
})->name('sellerWaiting');



