<main class="px-4 py-10">
    <section
        class="mx-auto w-full max-w-5xl rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 shadow-xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/90"
        data-seller-wizard>
        <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
            <div>
                <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تسجيل
                        البائع</span><span class="lang-en">Seller Registration</span></h1>
                <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">رجاءً
                        أكمل جميع الحقول لضمان التحقق السريع.</span><span class="lang-en">Please complete all fields
                        for fast verification.</span></p>
            </div>
            <span
                class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900"
                data-progress-label>{{ $stepNum }}
            </span>
        </div>

        <div class="mb-6">
            <div class="h-2 w-full overflow-hidden rounded-full bg-homy-gold-100 dark:bg-homy-green-700/35">
                <div class="h-full bg-homy-green-700 transition-all duration-300 dark:bg-homy-gold-500"
                    style="width:25%" data-progress-bar></div>
            </div>
            {{-- <div class="mt-3 flex items-center justify-between">
                <button type="button" data-step-go="1" class="step-dot active" data-step-indicator="1">1</button>
                <button type="button" data-step-go="2" class="step-dot" data-step-indicator="2">2</button>
                <button type="button" data-step-go="3" class="step-dot" data-step-indicator="3">3</button>
                <button type="button" data-step-go="4" class="step-dot" data-step-indicator="4">4</button>
            </div> --}}
        </div>
        
            {{ $slot }}
      

    </section>
</main>
