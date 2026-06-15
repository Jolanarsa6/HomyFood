<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\Dashboard\CategoryController;
use App\Http\Controllers\Admin\Dashboard\JoinRequestController;
use App\Http\Controllers\Admin\Dashboard\PaymentController;
use App\Http\Controllers\Admin\Dashboard\SellersControlController;
use App\Http\Controllers\Admin\Dashboard\SiteAnalyticsController;
use App\Http\Controllers\Notifi\sellerJoinRequestNotifi;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" => ["guest:admin", 'lang.switch'], "prefix" => "admin", "as" => "admin."], function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::group(["middleware" => ["auth:admin", 'lang.switch'], "prefix" => "admin", "as" => "admin."], function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');


    // main route 

    // seller join request
    Route::get('/joinRequest', [JoinRequestController::class, 'index'])->name('join_request');
    Route::put('/approve_joinRequest', [JoinRequestController::class, 'approve_joinRequest'])->name('approve_joinRequest');
    Route::put('/reject_joinRequest', [JoinRequestController::class, 'reject_joinRequest'])->name('reject_joinRequest');
    Route::put('/accept_all_joinRequest', [JoinRequestController::class, 'accept_all_joinRequest'])->name('accept_all_joinRequest');
    Route::put('/reject_all_joinRequest', [JoinRequestController::class, 'reject_all_joinRequest'])->name('reject_all_joinRequest');

    // product categories
    Route::get('/show_product_types', [CategoryController::class, 'index'])->name('show_product_types');
    Route::delete('/delete_category/{category_id}', [CategoryController::class, 'destroy'])->name('delete_category');
    Route::post('/add_category', [CategoryController::class, 'edit'])->name('add_category');

    // product payment methods
    Route::get('/show_payment_methods', [PaymentController::class, 'index'])->name('show_payment_methods');
    Route::delete('/delete_payment/{payment_id}', [PaymentController::class, 'destroy'])->name('delete_payment');
    Route::post('/add_payment', [PaymentController::class, 'edit'])->name('add_payment');


    // site analytics 
    Route::get('/show_site_analytics', [SiteAnalyticsController::class, 'index'])->name('show_site_analytics');

    // seller control
    Route::get('/show_sellers_control', [SellersControlController::class, 'index'])->name('show_sellers_control');

    // Notitication control
    Route::get('/show_notifications', [sellerJoinRequestNotifi::class, 'index'])->name('show_notifications');
    Route::post('/read_notifications/{notification_id}', [sellerJoinRequestNotifi::class, 'edit'])->name('notifications.read');
    Route::post('/readAll_notifications', [sellerJoinRequestNotifi::class, 'readAll'])->name('notifications.readAll');
});
