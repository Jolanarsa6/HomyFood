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
                ? auth()->guard('admin')->user()->unreadNotifications // أو استعلامك المخصص
                : collect();

            $view->with('notifications', $notifications);
        });
    }
}
