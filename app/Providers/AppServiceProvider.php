<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // Blade::component('layouts.sellerApp', 'layout');


        View::composer('components.admin-header', function ($view) {
            $notifications = Auth::check()
                ? auth()->guard('admin')->user()->unreadNotifications
                : collect();

            $view->with('notifications', $notifications)->with('admin', auth()->guard('admin')->user());
        });

        View::composer('components.buyer.header', function ($view) {
            
        
            $cartNum = Auth::check() ? Auth::user()->productCart()->count() : 0;
            // $cartNum = $user->productCart;
            $wishlistNum = Auth::check() ? Auth::user()->productWishlists()->count() : 0;
view()->share('unreadNotifications', auth()->user()?->unreadNotifications);
            $view->with('cartNum', $cartNum)->with('wishlistNum', $wishlistNum);
        });
    }
}
