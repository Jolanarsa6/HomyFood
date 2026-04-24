<?php

use App\Http\Middleware\CheckSellerApproval;
use App\Http\Middleware\LanguageSwitch;
use App\Http\Middleware\RedirectByRole;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => Authenticate::class,
            'guest' => RedirectIfAuthenticated::class,
            'role.redirect' => RedirectByRole::class,
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'check_approval' => CheckSellerApproval::class,
            'lang.switch'=> LanguageSwitch::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
