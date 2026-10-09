<?php

use App\Http\Controllers\seller\CommentController;
use App\Http\Controllers\Seller\AnalyticsController;
use App\Http\Controllers\Seller\BoxController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\ProfileController;
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


Route::group(['middleware' => ['lang.switch'], 'prefix' => 'seller', 'as' => 'seller.'], function () {
    Route::get('/join', [SellerJoinController::class, 'index'])->name('join');


    Route::get('/register', [RegisterController::class, 'Create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::get('/waiting', function () {
        return view('seller.waiting');
    })->name('waiting');

});



Route::group(['middleware' => ['auth:web', 'verified', 'role:seller', 'check_approval', 'lang.switch'], 'prefix' => 'seller', 'as' => 'seller.'], function () {


    Route::get('/dashboard', [SellerDashboardController::class, 'index'])->name('dashboard');

    // product route
    Route::get('/addProduct', [ProductController::class, 'create'])->name('addProduct');
    Route::post('/addProduct', [ProductController::class, 'store'])->name('addProduct');




    Route::get('/showProducts', [ProductController::class, 'showProduct'])->name('showProducts');
    Route::get('/search', [ProductController::class, 'search'])->name('search');
    Route::get('/showComments', [CommentController::class, 'showComments'])->name('showComments');
    Route::get('/showorders', [ProductController::class, 'showOrder'])->name('showOrders');

    Route::post('/comments/{comment}/reply', [CommentController::class, 'storeReply'])->name('comments.reply');
    // analytics
    Route::get('/showAnalytics', [AnalyticsController::class, 'index'])->name('analytics.show');

    // profile 
    Route::get('/showProfile', [ProfileController::class, 'edit'])->name('profile.show');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// test.. it isn't work correct in the site
Route::get('/showStoreSettings', function () {
    return view('seller.store-settings');
});
    Route::get('/showorders', function () {
    return view('seller.orders');
});
 Route::get('/wallet', function () {
    return view('seller.wallet');
});

 Route::get('/box', function () {
    return view('seller.box');
});
Route::get('/seller/box/create', [BoxController::class, 'createBox'])->name('seller.box.create');
Route::post('/seller/box/store', [BoxController::class, 'storeBox'])->name('seller.box.store');
