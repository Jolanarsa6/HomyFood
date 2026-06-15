 <header
     class="sticky top-0 z-30 border-b border-homy-gold-100/80 bg-white/80 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
     <div class="mx-auto flex w-full max-w-7xl items-center gap-3 px-4 py-3 lg:gap-4">
         <button id="menuToggle"
             class="h-11 w-11 shrink-0 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"
             aria-label="Open sidebar">
             <i class="fa-solid fa-bars"></i>
         </button>

         <a href="{{ route('home') }}" class="flex items-center gap-3">

             <x-application-logo />
             <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400 hidden md:block">Homy Food</p>
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
