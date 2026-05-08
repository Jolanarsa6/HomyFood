<x-app-Layout>
<x-seller.register>
<x-slot stepNum="1/4"/>

<x-main>
   <h1>jojo</h1>
        <form method="POST" action="{{ route('seller.register_step2') }}">
            @csrf
            <div class="space-y-4">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">بيانات
                        السكن والمتجر</span><span class="lang-en">Address & Store Info</span>
                </h2>
                <div class="grid gap-4 sm:grid-cols-3">
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الدولة</span><span class="lang-en">Country</span></label>
                        <select
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            <option>Syria</option>
                            <option>Jordan</option>
                            <option>UAE</option>
                        </select>
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">المدينة</span><span class="lang-en">City</span></label>
                        <input type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الحي</span><span class="lang-en">District</span></label>
                        <input type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                </div>
                <div>


                    <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">العنوان التفصيلي</span><span class="lang-en">Detailed
                            Address</span></label>
                    <textarea rows="3"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]"></textarea>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">نوع المنتجات التي تبيعها</span><span class="lang-en">Products You
                                Sell</span></label>
                        <input type="text" placeholder="مكدوس، مربيات، زعتر..."
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">قدرتك الإنتاجية اليومية</span><span class="lang-en">Daily
                                Capacity</span></label>
                        <input type="text" placeholder="50 عبوة يوميا"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                </div>
                <div class="pt-3 text-end">
                    <button type="submit" data-step-next
                        class="rounded-xl bg-homy-green-700 px-5 py-2.5 text-sm font-black text-white"><span
                            class="lang-ar">التالي</span><span class="lang-en">Next</span></button>
                </div>
            </div>
        </form>
</x-main>


    </x-seller.register>
</x-app-Layout>
