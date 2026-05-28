<x-app-Layout>

    <body class="text-slate-800 dark:text-slate-100">
        <main class="px-4 py-10">
            <section
                class="mx-auto w-full max-w-5xl rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 shadow-xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/90"
                data-seller-wizard>
                <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">تسجيل البائع</span><span class="lang-en">Seller Registration</span></h1>
                        <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300"><span
                                class="lang-ar">رجاءً أكمل جميع الحقول لضمان التحقق السريع.</span><span
                                class="lang-en">Please complete all fields for fast verification.</span></p>
                    </div>
                    <span
                        class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900"
                        data-progress-label>1/4</span>
                </div>

                {{-- ______________________________ --}}

                @if ($errors->any())
                    <div style="color:white">
                        {{ $errors->first() }}
                    </div>
                @endif


                {{-- ______________________________ --}}


                <div class="mb-6">
                    <div class="h-2 w-full overflow-hidden rounded-full bg-homy-gold-100 dark:bg-homy-green-700/35">
                        <div class="h-full bg-homy-green-700 transition-all duration-300 dark:bg-homy-gold-500"
                            style="width:25%" data-progress-bar></div>
                    </div>
                    <div class="mt-3 flex items-center justify-between">
                        <button type="button" data-step-go="1" class="step-dot active"
                            data-step-indicator="1">1</button>
                        <button type="button" data-step-go="2" class="step-dot" data-step-indicator="2">2</button>
                        <button type="button" data-step-go="3" class="step-dot" data-step-indicator="3">3</button>
                        <button type="button" data-step-go="4" class="step-dot" data-step-indicator="4">4</button>
                    </div>
                </div>

                <form method="POST" action="{{ route('seller.register') }}" enctype="multipart/form-data">
                    @csrf

                    <div data-step="1" class="space-y-4">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الهوية
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
                                <x-text-input type="password" placeholder="********" id="password" :value="old('password')"
                                    name="password" />
                                <x-input-error :messages="$errors->get('password')" />
                            </div>
                            <div>
                                <x-input-label for="password_confirmation" :value="__('form.confirm_password')" />
                                <x-text-input type="password" placeholder="********" id="password_confirmation"
                                    :value="old('password_confirmation')" name="password_confirmation" />
                            </div>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-3">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الجوال</span><span class="lang-en">Phone</span></label>
                                <x-text-input type="text" class="focus:ring-1 focus:ring-homy-gold-100"
                                    :value="old('phone')" name="phone" required autofocus autocomplete="phone" />
                                <x-input-error :messages="$errors->get('phone')" />
                            </div>
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input placeholder="name@email.com" id="email" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" />
                            </div>


                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">تاريخ الميلاد</span><span class="lang-en">Birth
                                        Date</span></label>
                                <x-text-input type="date" class="focus:ring-1 focus:ring-homy-gold-100"
                                    name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
                                <x-input-error :messages="$errors->get('birthdate')" />
                            </div>
                        </div>
                    </div>
                    <div class="pt-3 text-end">
                        <button type="button" data-step-next
                            class="rounded-xl bg-homy-green-700 px-5 py-2.5 text-sm font-black text-white"><span
                                class="lang-ar">التالي</span><span class="lang-en">Next</span></button>
                    </div>
                    </div>


                    <div data-step="2" class="hidden space-y-4">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">بيانات السكن والمتجر</span><span class="lang-en">Address & Store
                                Info</span></h2>
                        <div class="grid gap-4 sm:grid-cols-3">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الدولة</span><span class="lang-en">Country</span></label>
                                <select name="country"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                                    <option value="syria">Syria</option>
                                    <option value="jondan">Jordan</option>
                                    <option value="UAE">UAE</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label for="city" :value="__('form.city')" />
                                <x-text-input id="city" type="text" name="city" :value="old('city')" required
                                    autofocus autocomplete="city" />
                                <x-input-error :messages="$errors->get('city')" />
                            </div>
                            <div>
                                <x-input-label for="town" :value="__('form.town')" />
                                <x-text-input id="town" type="text" name="town" :value="old('town')"
                                    required autofocus autocomplete="town" />
                                <x-input-error :messages="$errors->get('town')" />
                            </div>
                        </div>
                        <div>
                            <label
                                class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">العنوان التفصيلي</span><span class="lang-en">Detailed
                                    Address</span></label>
                            <textarea name="address" rows="3"
                                class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]"></textarea>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">نوع المنتجات التي تبيعها</span><span class="lang-en">Products
                                        You Sell</span></label>
                                <x-text-input id="product_type" type="text" name="product_type" :value="old('product_type')"
                                    required autofocus autocomplete="product_type" />
                                <x-input-error :messages="$errors->get('product_type')" />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">قدرتك الإنتاجية اليومية</span><span class="lang-en">Daily
                                        Capacity</span></label>
                                <x-text-input id="capability" name="capability" type="number"
                                    placeholder="50 عبوة يوميا" :value="old('capability')" required autofocus
                                    autocomplete="capability" />
                                <x-input-error :messages="$errors->get('capability')" />
                            </div>
                        </div>
                        <div class="pt-3 flex items-center justify-between">
                            <button type="button" data-step-prev
                                class="rounded-xl border border-homy-gold-300 px-5 py-2.5 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                    class="lang-ar">السابق</span><span class="lang-en">Back</span></button>
                            <button type="button" data-step-next
                                class="rounded-xl bg-homy-green-700 px-5 py-2.5 text-sm font-black text-white"><span
                                    class="lang-ar">التالي</span><span class="lang-en">Next</span></button>
                        </div>
                    </div>

                    <div data-step="3" class="hidden space-y-4">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">البيانات البنكية والتحقق الأمني</span><span class="lang-en">Banking &
                                Security Verification</span></h2>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">اسم البنك</span><span class="lang-en">Bank Name</span></label>
                     
                                <x-text-input id="bank_name" type="text"
                                    name="bank_name" :value="old('bank_name')" required autofocus autocomplete="bank_name" />
                                <x-input-error :messages="$errors->get('bank_name')" />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">IBAN</span><span class="lang-en">IBAN</span></label>
                                
                                    <x-text-input id="IBAN" type="text"
                                    name="IBAN" :value="old('IBAN')" required autofocus autocomplete="IBAN" />
                                <x-input-error :messages="$errors->get('IBAN')" />
                            </div>
                        </div>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">رقم الهوية/الإقامة</span><span class="lang-en">National ID /
                                        Residency No.</span></label>
                               
                                      <x-text-input id="id_number" type="text"
                                    name="id_number" :value="old('id_number')" required autofocus autocomplete="id_number" />
                                <x-input-error :messages="$errors->get('id_number')" />
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الاسم التجاري</span><span class="lang-en">Commercial
                                        Name</span></label>
                               
                                     <x-text-input id="username" type="text"
                                    name="username" :value="old('username')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('username')" />
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">صورة الهوية (الوجه الأمامي)</span><span class="lang-en">ID
                                        Front Side</span></label>
                                <input name="id_image_front" type="file" accept="image/*"
                                    data-preview-target="idFrontPreview" data-preview-mode="single"
                                    class="w-full text-xs font-semibold">
                                <img id="idFrontPreview"
                                    src="https://via.placeholder.com/640x360/f6eeda/1a472a?text=ID+Front"
                                    alt="ID front preview" class="mt-2 h-32 w-full rounded-xl object-cover">
                            </div>
                            <div class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">صورة الهوية (الوجه الخلفي)</span><span class="lang-en">ID Back
                                        Side</span></label>
                                <input name="id_image_back" type="file" accept="image/*"
                                    data-preview-target="idBackPreview" data-preview-mode="single"
                                    class="w-full text-xs font-semibold">
                                <img id="idBackPreview"
                                    src="https://via.placeholder.com/640x360/f6eeda/1a472a?text=ID+Back"
                                    alt="ID back preview" class="mt-2 h-32 w-full rounded-xl object-cover">
                            </div>
                        </div>

                        <div class="pt-3 flex items-center justify-between">
                            <button type="button" data-step-prev
                                class="rounded-xl border border-homy-gold-300 px-5 py-2.5 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                    class="lang-ar">السابق</span><span class="lang-en">Back</span></button>
                            <button type="button" data-step-next
                                class="rounded-xl bg-homy-green-700 px-5 py-2.5 text-sm font-black text-white"><span
                                    class="lang-ar">التالي</span><span class="lang-en">Next</span></button>
                        </div>
                    </div>

                    <div data-step="4" class="hidden space-y-4">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الإقرار النهائي والمسؤوليات</span><span class="lang-en">Final
                                Declaration & Responsibilities</span></h2>

                        <div
                            class="rounded-xl border border-homy-gold-200 p-4 text-sm font-semibold text-slate-600 dark:border-homy-gold-600/35 dark:text-slate-300">
                            <p><span class="lang-ar">من خلال تقديم الطلب، أنت تقر بأنك مسؤول مسؤولية كاملة
                                    عن:</span><span class="lang-en">By submitting this application, you acknowledge
                                    full responsibility for:</span></p>
                            <ul class="mt-2 space-y-1">
                                <li><span class="lang-ar">دقة معلومات المنتج والمكونات والتحذيرات الغذائية.</span><span
                                        class="lang-en">Accuracy of product information, ingredients, and food
                                        warnings.</span></li>
                                <li><span class="lang-ar">تحديد تاريخ الإنتاج، وتاريخ الانتهاء، ومدة الصلاحية لكل
                                        منتج.</span><span class="lang-en">Defining production date, expiry date and
                                        shelf life for each product.</span></li>
                                <li><span class="lang-ar">الالتزام بسلامة الغذاء والتغليف المناسب واشتراطات
                                        الشحن.</span><span class="lang-en">Complying with food safety, packaging and
                                        shipping requirements.</span></li>
                            </ul>
                        </div>

                        <label
                            class="flex items-start gap-2 rounded-xl border border-homy-gold-200 p-3 text-sm font-bold dark:border-homy-gold-600/35">
                            <input name="terms_data" type="checkbox"
                                class="mt-1 rounded border-homy-gold-300 text-homy-green-700 focus:ring-homy-gold-200">
                            <span><span class="lang-ar">أتعهد بصحة البيانات والمستندات وأن أي مخالفة قد تؤدي لإيقاف
                                    الحساب.</span><span class="lang-en">I confirm all data/documents are valid and
                                    violations may suspend my account.</span></span>
                        </label>

                        <label
                            class="flex items-start gap-2 rounded-xl border border-homy-gold-200 p-3 text-sm font-bold dark:border-homy-gold-600/35">
                            <input name="agree" type="checkbox"
                                class="mt-1 rounded border-homy-gold-300 text-homy-green-700 focus:ring-homy-gold-200">
                            <span><span class="lang-ar">أوافق على الشروط وسياسات البائع والدفع والتوصيل.</span><span
                                    class="lang-en">I agree to seller terms, payout and delivery
                                    policies.</span></span>
                        </label>

                        <div class="pt-3 flex items-center justify-between">
                            <button type="button" data-step-prev
                                class="rounded-xl border border-homy-gold-300 px-5 py-2.5 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                    class="lang-ar">السابق</span><span class="lang-en">Back</span></button>
                            <button type="submit"
                                class="rounded-xl bg-homy-green-700 px-5 py-2.5 text-sm font-black text-white"><span
                                    class="lang-ar">إرسال طلب الانضمام</span><span class="lang-en">Submit
                                    Application</span></button>
                        </div>
                    </div>
                </form>
            </section>
        </main>

    </body>

</x-app-Layout>
