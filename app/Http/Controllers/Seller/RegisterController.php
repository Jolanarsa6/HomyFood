<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seller\SellerRegisterRequest;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\User;
use App\Notifications\SellerJoinRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create()
    {
        return view('seller.register');
    }


    public function store(SellerRegisterRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request) {
            $data = $request->safe();
            $user = User::create(array_merge($data->only(['full_name', 'phone', 'email', 'password']), ['terms' => now()], ['status' => 'pending']));
            $data['terms_accepted_at'] = now();
            $data['user_id'] = Auth::user();
            $data['terms_version'] = '1.0';
            $data['ip_address'] = $request->ip();
            $user_profile = $user->profile()->create($data->except(['full_name', 'password', 'phone', 'email']));
            $user->assignRole('seller');

            if ($request->hasFile('id_image_front')) {
                $user_profile->addMediaFromRequest('id_image_front')->toMediaCollection('profile_images');
            }
            if ($request->hasFile('id_image_back')) {
                $user_profile->addMediaFromRequest('id_image_back')->toMediaCollection('profile_images');
            }
           
// $data = [
//     'message' => 'new register please check the data!',
//     // 'url' => '/joinRequest'
// ];

$admin = Admin::find(1);
               $admin->notify(new SellerJoinRequest());

            event(new Registered($user));
        });


        return redirect(route('seller.waiting', absolute: false));
    }
}
