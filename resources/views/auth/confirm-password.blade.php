@extends('auth.guest',['title'=> __('actions.confirm_password')])

@section('content')
    <div class="p-6 sm:p-10">

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" />
            </div>


            <x-primary-button class="mt-10">
                {{ __('Confirm') }}
            </x-primary-button>
        </form>
    </div>
    <div class="relative hidden min-h-[20px] lg:block">
        <img src={{ asset('images/forget-password.jpg') }} alt="Homemade food" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-homy-green-700/45 via-homy-green-700/25 to-black/55">
        </div>
    </div>
@endsection
