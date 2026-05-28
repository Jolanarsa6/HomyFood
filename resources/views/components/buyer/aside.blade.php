 <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"></div>
 <aside id="sidebar"
     class="offcanvas-sidebar fixed top-0 right-0 z-50 h-full w-80 max-w-[88vw] overflow-y-auto custom-scrollbar border-s border-homy-gold-200/60 bg-white/95 p-6 shadow-2xl shadow-black/25 backdrop-blur-xl dark:border-homy-gold-600/40 dark:bg-[#12211B]/95">
     <div class="mb-8 flex items-center justify-between">
         <a href="{{ route('home') }}" class="flex items-center gap-3">
             <x-application-logo />
             <div>
                 <p class="text-lg font-black text-homy-green-700 dark:text-homy-gold-500">
                     {{ __('partials/aside.title') }}
                 </p>
                 <p class="text-xs text-slate-500 dark:text-slate-400">{{ __('partials/aside.description') }}</p>
             </div>
         </a>
         <button id="closeSidebar"
             class="h-10 w-10 rounded-xl border border-homy-gold-200 text-homy-green-700 hover:bg-homy-gold-50 dark:border-homy-gold-600/50 dark:text-homy-gold-400 dark:hover:bg-homy-green-700/40"
             aria-label="Close sidebar">
             <i class="fa-solid fa-xmark"></i>
         </button>
     </div>

     <nav class="space-y-2">
         <a href="index.html"
             class="flex items-center gap-3 rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 px-4 py-3 text-sm font-bold text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300">
             <i class="fa-solid fa-house"></i>
             <span>{{ __('partials/aside.home') }}</span>
         </a>
         <a href="special-offers.html"
             class="flex items-center gap-3 rounded-2xl border border-transparent px-4 py-3 text-sm font-bold text-slate-600 hover:border-homy-gold-200 hover:bg-homy-gold-50/60 hover:text-homy-green-700 dark:text-slate-300 dark:hover:border-homy-gold-600/40 dark:hover:bg-homy-green-700/30">
             <i class="fa-solid fa-badge-percent"></i>
             <span>{{ __('partials/aside.special_offers') }}</span>
         </a>
         <a href="compare.html"
             class="flex items-center gap-3 rounded-2xl border border-transparent px-4 py-3 text-sm font-bold text-slate-600 hover:border-homy-gold-200 hover:bg-homy-gold-50/60 hover:text-homy-green-700 dark:text-slate-300 dark:hover:border-homy-gold-600/40 dark:hover:bg-homy-green-700/30">
             <i class="fa-solid fa-scale-balanced"></i>
             <span>{{ __('partials/aside.compare_product') }}</span>
         </a>
         <a href="about-us.html"
             class="flex items-center gap-3 rounded-2xl border border-transparent px-4 py-3 text-sm font-bold text-slate-600 hover:border-homy-gold-200 hover:bg-homy-gold-50/60 hover:text-homy-green-700 dark:text-slate-300 dark:hover:border-homy-gold-600/40 dark:hover:bg-homy-green-700/30">
             <i class="fa-solid fa-circle-info"></i>
             <span>{{ __('partials/aside.about_us') }}</span>
         </a>
         <a href="contact-us.html"
             class="flex items-center gap-3 rounded-2xl border border-transparent px-4 py-3 text-sm font-bold text-slate-600 hover:border-homy-gold-200 hover:bg-homy-gold-50/60 hover:text-homy-green-700 dark:text-slate-300 dark:hover:border-homy-gold-600/40 dark:hover:bg-homy-green-700/30">
             <i class="fa-solid fa-envelope-open-text"></i>
             <span>{{ __('partials/aside.connect_us') }}</span>
         </a>
         <a href="seller/join.html"
             class="flex items-center gap-3 rounded-2xl border border-transparent px-4 py-3 text-sm font-bold text-slate-600 hover:border-homy-gold-200 hover:bg-homy-gold-50/60 hover:text-homy-green-700 dark:text-slate-300 dark:hover:border-homy-gold-600/40 dark:hover:bg-homy-green-700/30">
             <i class="fa-solid fa-store"></i>
             <span>{{ __('partials/aside.join_us_seller') }}</span>
         </a>
     </nav>

     <div class="mt-10 grid gap-3">
         <a href="{{ route('login') }}"
             class="grid place-items-center rounded-2xl border-2 border-homy-green-700 bg-homy-green-700 px-4 py-3 text-sm font-black text-white transition hover:-translate-y-0.5 hover:bg-homy-green-600">
             <span>{{ __('actions.login') }}</span>
         </a>
         <a href="{{ route('buyer.register') }}"
             class="grid place-items-center rounded-2xl border-2 border-homy-gold-400 bg-white px-4 py-3 text-sm font-black text-homy-green-700 transition hover:-translate-y-0.5 hover:bg-homy-gold-500 hover:text-homy-green-900 dark:bg-homy-gold-500 dark:text-homy-green-900">
             <span>{{ __('partials/aside.create_account') }}</span>
         </a>
         <a href="{{ route('seller.join') }}"
             class="grid place-items-center rounded-2xl border-2 border-homy-gold-400 bg-homy-gold-500 px-4 py-3 text-sm font-black text-homy-green-900 transition hover:-translate-y-0.5 hover:bg-homy-gold-400">
             <span>{{ __('partials/aside.join_us_seller') }}</span>
         </a>
     </div>
 </aside>
