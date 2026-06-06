         @php 
        $active_link = "flex items-center gap-3 rounded-xl border border-homy-gold-200 bg-homy-gold-50 px-3 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/35 dark:text-homy-gold-300";
        $inactive_link = "flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25";
        @endphp
            
           {{-- <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"></div> --}}

        <div class="mb-8 flex items-center justify-between">
            <a href="index.html" class="flex items-center gap-3">
                <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-white grid place-items-center text-lg shadow-lg">HF</div>
                <p class="text-lg font-black text-homy-green-700 dark:text-homy-gold-500">Homy Food</p>
            </a>
            <button id="closeSidebar" class="h-10 w-10 rounded-xl border border-homy-gold-200 text-homy-green-700 hover:bg-homy-gold-50 dark:border-homy-gold-600/50 dark:text-homy-gold-400 dark:hover:bg-homy-green-700/40"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <nav class="space-y-2">
            <a href="index.html" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/30"><i class="fa-solid fa-house"></i><span class="lang-ar">الرئيسية</span><span class="lang-en">Home</span></a>
            <a href="cart.html" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/30"><i class="fa-solid fa-bag-shopping"></i><span class="lang-ar">السلة</span><span class="lang-en">Cart</span></a>
            <a href="checkout.html" class="flex items-center gap-3 rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-bold text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"><i class="fa-solid fa-credit-card"></i><span class="lang-ar">الشراء</span><span class="lang-en">Checkout</span></a>
        </nav>
