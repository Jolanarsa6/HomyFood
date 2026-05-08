<x-app-Layout>
<x-seller.register>
<x-slot name="stepNum">
    {{ 1/4 }}
</x-slot>

          <form method="POST" action="{{ route('seller.register') }}">
            @csrf
            <input type="hidden" name="account_type" value="seller">
            <div data-step="1" class="space-y-4">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">الهوية
                        ومعلومات التواصل</span><span class="lang-en">Identity &
                        Contact</span></h2>
                <div class="grid gap-4 sm:grid-cols-3">
                    <div>
                        <x-input-label for="full_name" :value="__('form.full_name')" />
                        <x-text-input id="full_name" type="text" name="full_name" :value="old('full_name')" required
                            autofocus autocomplete="full_name" />
                        <x-input-error :messages="$errors->get('full_name')" />
                    </div>
                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input type="password" placeholder="********" id="password" name="password" />
                        <x-input-error :messages="$errors->get('password')" />
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('form.confirm_password')" />
                        <x-text-input type="password" placeholder="********" id="password_confirmation"
                            name="password_confirmation" />
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-3">
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الجوال</span><span class="lang-en">Phone</span></label>
                        <x-text-input type="text" class="focus:ring-1 focus:ring-homy-gold-100" name="phone" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input placeholder="name@email.com" id="email" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" />
                    </div>


                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">تاريخ الميلاد</span><span class="lang-en">Birth Date</span></label>
                        <x-text-input type="date" class="focus:ring-1 focus:ring-homy-gold-100" name="birthdate" />
                    </div>
                </div>
                <div class="pt-3 text-end">
                    <button type="submit" data-step-next
                        class="rounded-xl bg-homy-green-700 px-5 py-2.5 text-sm font-black text-white"><span
                            class="lang-ar">التالي</span><span class="lang-en">Next</span></button>
                </div>
            </div>

        </form>
</x-seller.register>
</x-app-Layout>