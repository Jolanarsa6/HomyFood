<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Notifications\SellerJoinRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:30'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required' , 'accepted'],
            'account_type' => ['required', 'in:buyer,seller']
        ]);

   
        $status = ($request->account_type === 'seller') ? 'pending' : 'approved';

        $user = User::create([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
            'terms' => now(),
            'status' => $status
        ]);

        $user->assignRole($request->account_type);

        event(new Registered($user));

        if ($request->account_type == 'seller' && $status == 'pending') {
            $admin = Admin::first();
            $admin->notify(new SellerJoinRequest());

            return redirect(route('sellerWaiting', absolute: false));
        } else {
            Auth::login($user);
            return redirect(route('login', absolute: false));
        }
    }
}
