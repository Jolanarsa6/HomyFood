<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckSellerApproval
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       
    if (Auth::check() && Auth::user()->status == 'pending') {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->withErrors(
            ['email' => 'الرجاء الانتظار طلبك قيد المراجعة!']
        );
    }


        return $next($request);
    }
}
