<?php

use App\Http\Controllers\Buyer\BuyerDashboardController;
use App\Http\Controllers\General\HomeController;
use App\Http\Controllers\Notifi\ShowUnReadNotificationNumberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Seller\ProductController;
use App\Http\Controllers\Seller\SellerDashboardController;
use App\Http\Controllers\Seller\SellerRegisterController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// The global route for all 
Route::get('/',[HomeController::class,'index'])->name('home')->middleware(['guest:web','lang.switch']);

// The home page for buyer and seller dependent on it's role
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','role.redirect','verified','lang.switch'])->name('dashboard');

// The home page for super admin
Route::get('/admin/dashboard', function () {
    $admin = Auth::guard('admin')->user();
       $payments = $admin->payments()->get();
        $sellers = User::role('seller')->get();
        $products = Product::all();
    return view('admin.dashboard',compact('payments','sellers','products'));
})->middleware(['auth:admin', 'verified','lang.switch'])->name('admin.dashboard');

// For the language translation proccess
Route::get('/translation/{locale}',function($locale){
    if(in_array($locale,['ar','en'])){
        session()->put('locale',$locale);
    }
    return redirect()->back();
})->name('langSwitch');


// For Unread Notifications
// Route::get('/show_notifications',[ShowUnReadNotificationNumberController::class,'index'])->name('show_notifications');




require __DIR__.'/auth.php';

require __DIR__.'/admin.php';

require __DIR__.'/buyer.php';

require __DIR__.'/seller.php';
