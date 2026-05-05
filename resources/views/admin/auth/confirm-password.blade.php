<x-guest-layout>
    <x-slot name="title">
        {{ __('actions.confirm_password') }}
    </x-slot>

    <main class="px-4 py-4 lg:py-12 flex items-center justify-center">
        <section
            class="max-h-[600px] py-7 px-7 max-w-[600px] overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white/90 shadow-2xl shadow-homy-green-700/10 dark:border-homy-gold-600/35 dark:bg-[#12211B]/90 lg:grid-cols-2">

            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" />
                </div>


                <x-primary-button class="mt-10">
                    {{ __('Confirm') }}
                </x-primary-button>
            </form>
        </section>

    </main>
</x-guest-layout>
