<?php

use App\Http\Controllers\Buyer\BuyerDashboardController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => ['auth:web' , 'verified' , 'role:buyer','lang.switch'], 'prefix' => 'buyer','as' => 'buyer.' ] , function(){
    Route::get('/dashboard',[BuyerDashboardController::class,'index'])->name('dashboard');



});