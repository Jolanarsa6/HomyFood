@extends('auth.guest', ['title' => __('actions.reset_password')])

@section('content')
    <div class="p-6 sm:p-10">


        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus
                    autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" />
            </div>

            <x-primary-button class="mt-10">
                {{ __('Reset Password') }}
            </x-primary-button>
        </form>

    </div>
    <div class="relative hidden min-h-[20px] lg:block">
        <img src={{ asset('images/forget-password.jpg') }} alt="Homemade food" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-homy-green-700/45 via-homy-green-700/25 to-black/55">
        </div>
    </div>
@endsection
