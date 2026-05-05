<x-guest-Layout>
    <x-slot name="title">
        {{ __('actions.register') }}
    </x-slot>

  
                <div class="relative hidden min-h-[620px] lg:block">
                    <img src="{{ asset('images/register.png') }}" alt="Homemade table" class="h-full w-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-homy-green-700/45 via-homy-green-700/25 to-black/55">
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

                    <form class="space-y-4">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الاسم الكامل</span><span class="lang-en">Full
                                        Name</span></label>
                                <input type="text"
                                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 focus:ring-4 focus:ring-homy-gold-100 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">رقم الجوال</span><span class="lang-en">Phone
                                        Number</span></label>
                                <input type="tel"
                                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 focus:ring-4 focus:ring-homy-gold-100 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>

                        <div>
                            <label
                                class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">البريد الإلكتروني</span><span class="lang-en">Email</span></label>
                            <input type="email"
                                class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 focus:ring-4 focus:ring-homy-gold-100 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">كلمة المرور</span><span class="lang-en">Password</span></label>
                                <input type="password"
                                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 focus:ring-4 focus:ring-homy-gold-100 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">تأكيد كلمة المرور</span><span class="lang-en">Confirm
                                        Password</span></label>
                                <input type="password"
                                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 focus:ring-4 focus:ring-homy-gold-100 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>

                        <label
                            class="inline-flex items-start gap-2 text-xs font-bold text-slate-500 dark:text-slate-300">
                            <input type="checkbox"
                                class="mt-0.5 rounded border-homy-gold-300 text-homy-green-700 focus:ring-homy-gold-200">
                            <span><span class="lang-ar">أوافق على الشروط وسياسة الخصوصية.</span><span class="lang-en">I
                                    agree to terms and privacy policy.</span></span>
                        </label>

                        <button type="button"
                            class="w-full rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600">
                            <span class="lang-ar">إنشاء الحساب</span>
                            <span class="lang-en">Create Account</span>
                        </button>
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
