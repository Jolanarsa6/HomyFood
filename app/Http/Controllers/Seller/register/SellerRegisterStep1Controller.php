<?php

namespace App\Http\Controllers\Seller\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Notifications\SellerJoinRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class SellerRegisterStep1Controller extends Controller
{
     public function create()
    {
         return view('seller.register');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:30'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'account_type' => ['required', 'in:buyer,seller']
        ]);

   
        $status = ($request->account_type === 'seller') ? 'pending' : 'approved';

        $user = User::create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
            'status' => $status
        ]);

        $user->assignRole($request->account_type);

        event(new Registered($user));

        if ($request->account_type == 'seller' && $status == 'pending') {
          
            return redirect(route('seller.register_step2', absolute: false));
        } else {
            Auth::login($user);
            return redirect(route('login', absolute: false));
        }
    }
 
}
