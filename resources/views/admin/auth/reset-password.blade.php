<x-guest-layout>
    <x-slot name="title">
        {{ __('actions.reset_password') }}
    </x-slot>

    <main class="px-4 py-4 lg:py-12 flex items-center justify-center">
        <section
            class="max-h-[600px] py-7 px-7 max-w-[600px] overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white/90 shadow-2xl shadow-homy-green-700/10 dark:border-homy-gold-600/35 dark:bg-[#12211B]/90 lg:grid-cols-2">


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

        </section>
    </main>

</x-guest-layout>
