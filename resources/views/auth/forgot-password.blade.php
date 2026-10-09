@extends('auth.guest',['title'=> __('actions.forget_password')])

@section('content')

    <div class="p-6 sm:p-10">
        <div class="mb-4 text-sm text-gray-500 leading-relaxed">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <x-primary-button class="mt-10">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </form>
    </div>
    <div class="relative hidden min-h-[20px] lg:block">
        <img src={{ asset('images/forget-password.jpg') }} alt="Homemade food" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-homy-green-700/45 via-homy-green-700/25 to-black/55">
        </div>
    </div>
@endsection
