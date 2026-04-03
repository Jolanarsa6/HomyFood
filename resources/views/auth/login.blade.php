<x-guest-Layout>
    <!-- the login header -->
    <div class="text-center mb-8">
        <h2 class="text-2xl font-extrabold text-homy-green-700">{{ __('Welcome') }}!</h2>
        <p class="text-gray-500 mt-2">{{ __('Log in to join us now') }}</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <!-- forget password -->
        <div>
            <x-forget-password />

            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" type="password" name="password" autocomplete="password" required />
            <x-input-error :messages="$errors->get('passwowrd')" />
        </div>

        <!-- Remember Me -->
        <x-remember-me />

        <x-primary-button>
            {{ __('Log in') }}
        </x-primary-button>

    </form>

    <div class="mt-8 text-center">
        <p class="text-sm text-gray-500">{{ __('You don\'t have an account') }} <a href="{{ route('register') }}"
                class="underline font-bold text-homy-gold-500 hover:text-homy-green-700 transition-colors">{{ __('Sign In') }}</a>
        </p>
    </div>
</x-guest-Layout>
