@extends('auth.guest', ['title' => __('actions.admin_login')])

@section('content')

    <div class="p-6 sm:p-10">
        <div class="mb-8">
            <p class="text-xs font-black uppercase tracking-[0.2em] text-homy-gold-600">
                {{ __('actions.welcom_ser') }}</p>
            <h1 class="mt-2 text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                <span>{{ __('actions.admin_login') }}</span>
            </h1>
            <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                <span>{{ __('messages.enter_your_account_admin') }}</span>
            </p>
        </div>

        <form method="POST" action="{{ route('admin.login') }}" class="space-y-4">
            @csrf
            <div>

                <x-input-label for="email" :value="__('Email')" />
                <x-text-input placeholder="name@email.com" id="email" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div>
                <div class="mb-2 flex items-center justify-between">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-forget-password />
                </div>
                <x-text-input type="password" placeholder="********" id="password" name="password" />
                <x-input-error :messages="$errors->get('password')" />

            </div>

            <x-remember-me />

            <x-primary-button>
                <span>{{ __('actions.login') }}</span>
            </x-primary-button>
        </form>
    </div>
    </div>
    <div class="relative hidden min-h-[620px] lg:block">
        <img src={{ asset('images/register.png') }} alt="Homemade food" class="h-full w-full object-cover">

    </div>

@endsection