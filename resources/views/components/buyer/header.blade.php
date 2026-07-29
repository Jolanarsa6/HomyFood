 <header
     class="sticky top-0 z-30 border-b border-homy-gold-100/80 bg-white/80 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
     <div class="mx-auto flex w-full max-w-7xl items-center gap-3 px-4 py-3 lg:gap-4">
         <button id="menuToggle"
             class="h-11 w-11 shrink-0 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"
             aria-label="Open sidebar">

             <i class="fa-solid fa-bars"></i>
         </button>

         <a href="{{ route('home') }}" class="flex items-center gap-3">


             <x-application-logo class="hidden lg:flex" />
             <div class="hidden sm:block">
                 <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">{{ __('global.title') }}
                 </p>
                 {{-- <p class="text-[11px] text-slate-500 dark:text-slate-400">
                     <span>{{ __('titles.description') }}</span>
                 </p> --}}
             </div>
         </a>

         <div class="hidden flex-1 lg:flex">
             <label class="relative w-full">
                 <form action="{{ route('buyer.search') }}" method="GET">
                     <input type="search" placeholder="{{ __('messages.search_message') }}"
                         aria-describedby="button-addon2" name="search" value="{{ request()->search }}"
                         class="w-full rounded-2xl border border-homy-gold-200/80 bg-white py-3 ps-12 pe-4 text-sm font-semibold text-slate-700 outline-none ring-homy-gold-100 transition placeholder:font-medium placeholder:text-slate-400 focus:border-homy-gold-500 focus:ring-4 dark:border-homy-gold-600/35 dark:bg-[#163126] dark:text-slate-100 dark:placeholder:text-slate-400">
                     <button type="submit"><i
                             class="fa-solid fa-magnifying-glass pointer-events-none absolute start-4 top-1/2 -translate-y-1/2 text-slate-400"></i></button>
             </label>
             </form>

         </div>

         <div class="ms-auto flex items-center gap-2">
             <x-lang-switch />

             <x-them-toggle />

             @auth
                 <a href="{{ route('buyer.wishlist') }}"
                     class="relative grid h-11 w-11 place-items-center rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm transition hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"
                     aria-label="Wishlist">
                     <i class="fa-regular fa-heart"></i>
                     <span
                         class="absolute -top-1 -start-1 min-w-5 rounded-full bg-homy-gold-500 px-1 text-center text-[11px] font-black text-homy-green-900">4</span>
                 </a>
                 <a href="{{ route('buyer.show_cart') }}"
                     class="relative grid h-11 w-11 place-items-center rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm transition hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"
                     aria-label="Cart">
                     <i class="fa-solid fa-bag-shopping"></i>
                     <span
                         class="absolute -top-1 -start-1 min-w-5 rounded-full bg-homy-gold-500 px-1 text-center text-[11px] font-black text-homy-green-900">3</span>
                 </a>
             @endauth

             @guest
                 <a href="{{ route('login') }}">
                     <x-primary-button>
                         <i class="far fa-user text-lg"></i>
                         <span>{{ __('actions.login') }}</span>
                     </x-primary-button>
                 </a>

                 <a href="{{ route('seller.join') }}"
                     class="rounded-2xl border-2 border-homy-gold-400 bg-homy-gold-500 px-4 py-2.5 text-sm font-black text-homy-green-900 transition hover:bg-homy-gold-400 xl:block">
                     <span>{{ __('partials/aside.join_us_seller') }}</span>
                 </a>
             @endguest

             @auth
                 <x-logout class="block lg:hidden" />
             @endauth
         </div>
     </div>

     <div class="mx-auto block max-w-7xl px-4 pb-3 lg:hidden">



         <label class="relative block">
             <form action="{{ route('buyer.search') }}" method="GET">
                 <input type="search" placeholder="{{ __('messages.search_message') }}" name="search"
                     value="{{ request()->search }}"
                     class="w-full rounded-2xl border border-homy-gold-200/80 bg-white py-3 ps-12 pe-4 text-sm font-semibold text-slate-700 outline-none ring-homy-gold-100 transition placeholder:font-medium placeholder:text-slate-400 focus:border-homy-gold-500 focus:ring-4 dark:border-homy-gold-600/35 dark:bg-[#163126] dark:text-slate-100 dark:placeholder:text-slate-400">
                 <i
                     class="fa-solid fa-magnifying-glass pointer-events-none absolute start-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
          <button type="submit"><i
                             class="fa-solid fa-magnifying-glass pointer-events-none absolute start-4 top-1/2 -translate-y-1/2 text-slate-400"></i></button>
             </label>
             </form>
     </div>
 </header>
