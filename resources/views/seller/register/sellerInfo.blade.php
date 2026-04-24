<x-guest-layout>
     <!-- the register header -->
    <div class="text-center mb-8">
        <h2 class="text-2xl font-extrabold text-homy-green-700">{{ __('messages.seller_signIn') }}!</h2>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
<input type="hidden" name="account_type" value="seller">

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <x-primary-button>
            {{ __('Register') }}
        </x-primary-button>
    </form>

    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">{{ __('Already registered?') }} <a href="{{ route('login') }}"
                class="underline font-bold text-homy-gold-500 hover:text-homy-green-700 transition-colors">{{ __('Log In') }}</a>
        </p>
    </div>
</x-guest-layout>
