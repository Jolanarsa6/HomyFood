<?php

use App\Http\Controllers\Buyer\BuyerDashboardController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerRegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('guest:web');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role_redirect','verified'])->name('dashboard');


Route::group(['middleware' => ['auth:web' , 'verified' , 'role:buyer'], 'prefix' => 'buyer','as' => 'buyer.' ] , function(){
    Route::get('/dashboard',[BuyerDashboardController::class,'index'])->name('dashboard');



});





Route::group(['middleware' => ['auth:web' , 'verified' , 'role:seller', 'check_approval'], 'prefix' => 'seller','as' => 'seller.' ] , function(){
        Route::get('/dashboard',[SellerDashboardController::class,'index'])->name('dashboard');
Route::get('/addProduct',[ProductController::class,'index']);


});



Route::get('/sellerRegister',[SellerRegisterController::class,'index'])->name('sellerRegister');
Route::get('/sellerWaiting',function(){
    return view('seller.waiting');
})->name('sellerWaiting');















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');



require __DIR__.'/auth.php';

require __DIR__.'/admin.php';

