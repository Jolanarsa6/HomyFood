<x-guest-Layout>
    <x-slot name="title">
        {{ __('actions.register') }}
    </x-slot>


    <div class="relative hidden min-h-[620px] lg:block">
        <img src="{{ asset('images/register.png') }}" alt="Homemade table" class="h-full w-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-homy-green-700/45 via-homy-green-700/25 to-black/55">
        </div>
        <div class="absolute inset-0 p-8 text-white flex flex-col justify-end">
            <h2 class="text-3xl font-black leading-tight">
                <span class="lang-ar">ابدأ رحلتك مع مجتمع Homy Food</span>
                <span class="lang-en">Start Your Journey With Homy Food Community</span>
            </h2>
            <p class="mt-3 text-sm font-semibold text-white/90">
                <span class="lang-ar">احفظ منتجاتك المفضلة، قارن بسهولة، واطلب من أفضل البائعين.</span>
                <span class="lang-en">Save favorites, compare easily, and order from top homemade
                    sellers.</span>
            </p>
        </div>
    </div>

    <div class="p-6 sm:p-10">
        <div class="mb-8">
            <p class="text-xs font-black uppercase tracking-[0.2em] text-homy-gold-600">Create Account
            </p>
            <h1 class="mt-2 text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">إنشاء حساب جديد</span>
                <span class="lang-en">Register</span>
            </h1>
            <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                <span class="lang-ar">أنشئ حسابك للوصول إلى تجربة تسوق منزلية فاخرة.</span>
                <span class="lang-en">Create your account to access a premium homemade shopping
                    experience.</span>
            </p>
        </div>


        <form method="POST" action="{{ route('buyer.register') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="account_type" value="buyer">
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <x-input-label for="full_name" :value="__('form.full_name')" />
                    <x-text-input id="full_name" type="text" name="full_name" :value="old('full_name')" required autofocus
                        autocomplete="full_name" />
                    <x-input-error :messages="$errors->get('full_name')" />
                </div>
                <div>
                    <x-input-label for="phone" :value="__('phone')" />
                    <x-text-input id="phone" type="phone" name="phone" :value="old('phone')" required autofocus
                        autocomplete="phone" />
                    <x-input-error :messages="$errors->get('phone')" />
                </div>
            </div>


            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input placeholder="name@email.com" id="email" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input type="password" placeholder="********" id="password" name="password" />
                    <x-input-error :messages="$errors->get('password')" />

                </div>
                <div>
                    <x-input-label for="password_confirmation" :value="__('form.confirm_password')" />
                    <x-text-input type="password" placeholder="********" id="password_confirmation" name="password_confirmation"/>
                </div>
            </div>
            {{-- <div class="grid gap-4 sm:grid-cols-2">
                      <div>
                        <x-input-label for="password" :value="__('form.user_name')" />
                        <x-text-input type="text"  id="password" name="username" />
                        <x-input-error :messages="$errors->get('username')" />

                    </div>
                         <div>
                            <x-input-label for="birthdate" :value="__('form.birthdate')" />
                        <x-text-input type="date" id="birthdate" name="birthdate" />
                        <x-input-error :messages="$errors->get('birthdate')" />

                    </div>
            </div> --}}

            <label class="inline-flex items-start gap-2 text-xs font-bold text-slate-500 dark:text-slate-300">
                <input type="checkbox"
                    class="mt-0.5 rounded border-homy-gold-300 text-homy-green-700 focus:ring-homy-gold-200" name="terms" required>
                <span>{{ __('form.check_agree') }}</span>
            </label>

            <x-input-error :messages="$errors->get('phone')" />

                <x-primary-button>{{ __('actions.create_account') }}</x-primary-button>



            {{-- <button type="submit"
                class="w-full rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600">
                <span class="lang-ar">إنشاء الحساب</span>
                <span class="lang-en">Create Account</span>
            </button> --}}
        </form>

        <p class="mt-6 text-center text-sm font-semibold text-slate-500 dark:text-slate-300">
            <span class="lang-ar">لديك حساب بالفعل؟</span>
            <span class="lang-en">Already have an account?</span>
            <a href="{{ route('login') }}" class="font-black text-homy-gold-600 underline">
                <span class="lang-ar">تسجيل الدخول</span>
                <span class="lang-en">Log In</span>
            </a>
        </p>
    </div>

    </section>

</x-guest-Layout>
