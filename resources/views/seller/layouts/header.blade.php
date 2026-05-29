{{-- <header
    class="sticky top-0 z-30 border-b border-homy-gold-200/70 bg-white/85 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
    <div class="mx-auto flex w-full max-w-[1500px] items-center gap-3 px-4 py-3">
        <button id="menuToggle"
            class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm lg:hidden dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i
                class="fa-solid fa-bars"></i></button>
        <a href="dashboard.html" class="flex items-center gap-3">
            <div
                class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-base font-black text-white shadow-lg">
                HF</div>
            <div>
                <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">Homy Food Seller</p>
                <p class="text-[11px] text-slate-500 dark:text-slate-400"><span class="lang-ar">لوحة تحكم
                        البائع</span><span class="lang-en">Seller Dashboard</span></p>
            </div>
        </a>

        <div class="ms-auto flex items-center gap-2">
            <button id="langToggle"
                class="inline-flex h-11 items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i
                    class="fa-solid fa-language"></i><span class="lang-ar">EN</span><span
                    class="lang-en">AR</span></button>
            <button id="themeToggle"
                class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i
                    class="fa-solid fa-moon"></i></button>
            <a href="../index.html"
                class="rounded-2xl border border-homy-gold-300 px-4 py-2 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                    class="lang-ar">واجهة العملاء</span><span class="lang-en">Customer Site</span></a>
        </div>
    </div>
</header> --}}

 <header
     class="border-b border-homy-gold-200/80 bg-white/80 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
     <div class="mx-auto flex w-full max-w-7xl items-center gap-3 px-4 py-3">
         <a href="{{ route('home') }}" class="flex items-center gap-3">
             <x-application-logo />
             <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">Homy Food</p>
         </a>
         <div class="ms-auto flex items-center gap-2">
             <x-lang-switch />
             <x-them-toggle />
             <a href="{{ route('home') }}"
                 class="rounded-2xl border-2 border-homy-gold-300 px-4 py-2 text-sm font-black text-homy-green-700 transition hover:bg-homy-gold-500 hover:text-homy-green-900 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
                 <span>{{ __('actions.back_home') }}</span>
             </a>
         </div>
     </div>
 </header>