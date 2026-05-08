<x-app-Layout>
    <x-seller.register>

        <form>
            <div data-step="3" class="hidden space-y-4">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">البيانات
                        البنكية والتحقق الأمني</span><span class="lang-en">Banking &
                        Security Verification</span></h2>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">اسم البنك</span><span class="lang-en">Bank Name</span></label>
                        <input type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">IBAN</span><span class="lang-en">IBAN</span></label>
                        <input type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">رقم الهوية/الإقامة</span><span class="lang-en">National ID /
                                Residency No.</span></label>
                        <input type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                    <div>
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">رقم السجل التجاري (اختياري)</span><span class="lang-en">Commercial
                                Registration (Optional)</span></label>
                        <input type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">صورة الهوية (الوجه الأمامي)</span><span class="lang-en">ID Front
                                Side</span></label>
                        <input type="file" accept="image/*" data-preview-target="idFrontPreview"
                            data-preview-mode="single" class="w-full text-xs font-semibold">
                        <img id="idFrontPreview" src="https://via.placeholder.com/640x360/f6eeda/1a472a?text=ID+Front"
                            alt="ID front preview" class="mt-2 h-32 w-full rounded-xl object-cover">
                    </div>
                    <div class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                        <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">صورة الهوية (الوجه الخلفي)</span><span class="lang-en">ID Back
                                Side</span></label>
                        <input type="file" accept="image/*" data-preview-target="idBackPreview"
                            data-preview-mode="single" class="w-full text-xs font-semibold">
                        <img id="idBackPreview" src="https://via.placeholder.com/640x360/f6eeda/1a472a?text=ID+Back"
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
        </form>
    </x-seller.register>
</x-app-Layout>
