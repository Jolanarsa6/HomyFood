<x-guest-layout>
    <x-slot name="title">
        {{ __('actions.forget_password') }}
    </x-slot>

     <main class="px-4 py-4 lg:py-12 flex items-center justify-center">
        <section
            class="max-h-[600px] py-7 px-7 max-w-[600px] overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white/90 shadow-2xl shadow-homy-green-700/10 dark:border-homy-gold-600/35 dark:bg-[#12211B]/90 lg:grid-cols-2">
   
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
        </section>
     </main>
</x-guest-layout>
