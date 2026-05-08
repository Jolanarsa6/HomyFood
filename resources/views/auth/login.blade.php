<x-guest-Layout>
  <x-slot name="title">
        {{ __('actions.login') }}
    </x-slot>
    

            <div class="p-6 sm:p-10">
                <div class="mb-8">
                    <p class="text-xs font-black uppercase tracking-[0.2em] text-homy-gold-600">
                        {{ __('titles.welcome_back') }}</p>
                    <h1 class="mt-2 text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                        <span>{{ __('titles.login') }}</span>
                    </h1>
                    <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                        <span>{{ __('messages.enter_your_account') }}</span>
                    </p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <div>

                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input placeholder="name@email.com" id="email" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
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

                <div class="my-6 flex items-center gap-3 text-xs font-bold text-slate-400">
                    <span class="h-px flex-1 bg-slate-200 dark:bg-slate-700"></span>
                    <span>or</span>
                    <span class="h-px flex-1 bg-slate-200 dark:bg-slate-700"></span>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <x-connect-way-button>
                        <a href="http://google.com"> <i class="fa-brands fa-google ms-1"></i>Google
                        </a>
                    </x-connect-way-button>
                    <x-connect-way-button>
                        <a href="http://facebook.com"> <i class="fa-brands fa-facebook-f ms-1"></i>Facebook
                        </a>
                    </x-connect-way-button>
                </div>

                <p class="mt-6 text-center text-sm font-semibold text-slate-500 dark:text-slate-300">
                    <span>{{ __('messages.no_account') }}</span>
                    <a href="{{ route('buyer.register') }}" class="font-black text-homy-gold-600 underline">
                        <span>{{ __('actions.create_account') }}</span>
                    </a>
                </p>
            </div>
            <div class="relative hidden min-h-[620px] lg:block">
                <img src={{ asset('images/login.png') }} alt="Homemade food" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-b from-homy-green-700/45 via-homy-green-700/25 to-black/55">
                </div>
                <div class="absolute inset-0 p-8 text-white flex flex-col justify-end">
                    <h2 class="text-3xl font-black leading-tight">
                        <span>{{ __('messages.welcome_back') }}</span>
                    </h2>
                    <p class="mt-3 text-sm font-semibold text-white/90">
                        <span>{{ __('messages.continue_journy') }}</span>
                    </p>
                </div>
            </div>
    
</x-guest-Layout>
