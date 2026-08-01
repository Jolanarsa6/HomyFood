<header
    class="sticky top-0 z-30 border-b border-homy-gold-200/70 bg-white/85 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
    <div class="mx-auto flex w-full max-w-[1700px] items-center gap-3 px-4 py-3">
        <button id="menuToggle"
            class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm lg:hidden dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i
                class="fa-solid fa-bars"></i></button>


        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
            {{-- <div class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-base font-black text-white shadow-lg">SA</div> --}}
            <x-application-logo></x-application-logo>
            <div>
                <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">Homy Super Admin</p>
                <p class="text-[11px] text-slate-500 dark:text-slate-400"><span class="lang-ar">مركز التحكم
                        الشامل</span><span class="lang-en">Global Control Center</span></p>
            </div>
        </a>

        <div class="relative hidden w-full max-w-xl xl:block">
            <i
                class="fa-solid fa-magnifying-glass pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="search" placeholder="ابحث عن بائع أو متجر / Search seller or store"
                class="w-full rounded-2xl border border-homy-gold-200 bg-white px-10 py-2.5 text-sm font-semibold text-slate-700 outline-none ring-homy-gold-400 focus:ring dark:border-homy-gold-600/35 dark:bg-homy-green-700/25 dark:text-slate-100">
        </div>

        <div class="ms-auto flex items-center gap-2">

            <x-lang-switch />
            <x-them-toggle />

            <div class="relative">
                <a href="{{ route('admin.show_notifications') }}">
                <button data-toggle="notifications"
                    class="relative h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                    <i class="fa-regular fa-bell"></i>
                    <span
                        class="absolute -left-1 -top-1 inline-flex h-5 min-w-5 items-center justify-center rounded-full bg-red-500 px-1 text-[10px] font-black text-white">{{ $notifications->count() }}</span>
                </button>
                </a>
                <div id="notificationsPanel"
                    class="admin-popover hidden absolute left-0 mt-2 w-80 overflow-hidden rounded-2xl border border-homy-gold-200 bg-white shadow-2xl shadow-black/15 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                    <div
                        class="border-b border-homy-gold-100 px-4 py-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/25 dark:text-homy-gold-400">
                        <span class="lang-ar">إشعارات هامة</span><span class="lang-en">Important Notifications</span>
                    </div>
                    <a href="vendor-applications.html"
                        class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span
                            class="lang-ar">7 طلبات انضمام بائعين جديدة تحتاج مراجعة</span><span class="lang-en">7 new
                            vendor applications need review</span></a>
                    <a href="disputes.html"
                        class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span
                            class="lang-ar">نزاع دفع جديد بقيمة 890 SAR</span><span class="lang-en">New payment dispute
                            worth 890 SAR</span></a>
                    <a href="suggestions.html"
                        class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span
                            class="lang-ar">اقتراح تحسين لتجربة التوصيل من المستخدمين</span><span
                            class="lang-en">Delivery experience improvement suggestion</span></a>
                    <a href="notifications-center.html"
                        class="block px-4 py-3 text-center text-xs font-black text-homy-gold-600"><span
                            class="lang-ar">عرض كل الإشعارات</span><span class="lang-en">See All
                            Notifications</span></a>
                </div>
            </div>
            <x-logout />

            <div class="relative">
                <button data-toggle="profileMenu"
                    class="flex items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-2 py-1.5 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35">
                    <img src="{{ asset('images/a.jpg') }}"
                        alt="Admin" class="h-8 w-8 rounded-xl object-cover">
                    <span class="hidden text-xs font-black text-homy-green-700 dark:text-homy-gold-300 sm:block"><span
                            class="lang-ar">المدير العام</span><span class="lang-en">Owner Admin</span></span>
                </button>
                <div id="profileMenu"
                    class="admin-popover hidden absolute left-0 mt-2 w-56 overflow-hidden rounded-2xl border border-homy-gold-200 bg-white shadow-xl shadow-black/15 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                    <a href="profile.html"
                        class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span
                            class="lang-ar">الملف الشخصي</span><span class="lang-en">Profile</span></a>
                    <a href="profile-settings.html"
                        class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span
                            class="lang-ar">إعدادات البروفايل</span><span class="lang-en">Profile Settings</span></a>
                    <a href="system-settings.html"
                        class="block px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span
                            class="lang-ar">إعدادات النظام</span><span class="lang-en">System Settings</span></a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="fixed top-5 right-5 z-50 flex flex-col gap-3 max-w-sm w-full px-4">

<x-alert></x-alert>
@foreach ($admin->unreadNotifications as $notifi)  
<div class="js-flash-alert transform translate-x-0 opacity-100 transition-all duration-500 ease-in-out p-4 rounded-xl shadow-xl bg-homy-green-100 dark:bg-slate-900 border border-homy-green-500/30 dark:border-homy-green-600/50 text-homy-green-700 dark:text-homy-gold-400 flex items-start gap-3" role="alert">
    <svg class="w-5 h-5 text-homy-green-500 dark:text-homy-gold-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <div>
        <strong class="font-semibold block text-homy-green-700 dark:text-homy-gold-400 text-base">{{ $notifi->data['title'] }}</strong>
                <p class="mt-1 text-sm font-medium text-slate-600 dark:text-slate-300">
                          {{ $notifi->data['name'] }} {{ $notifi->data['message'] }}
                </p>
            </div>
        </div>
        @endforeach
</div>
{{-- <button id="themeToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-moon"></i></button> --}}
