<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homy Food | {{ $title ?? config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script>
        if (localStorage.getItem('darkMode') === 'true' ||
            (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <link rel="stylesheet" href="{{ asset('templates/assets/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="text-slate-800 dark:text-slate-100">
    <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden"></div>

    <header class="sticky top-0 z-30 border-b border-homy-gold-200/70 bg-white/85 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
        <div class="mx-auto flex w-full max-w-[1700px] items-center gap-3 px-4 py-3">
            <button id="menuToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm lg:hidden dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-bars"></i></button>

            <a href="dashboard.html" class="flex items-center gap-3">
                <div class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-base font-black text-white shadow-lg">SA</div>
                <div>
                    <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">Homy Super Admin</p>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400"><span class="lang-ar">مركز التحكم الشامل</span><span class="lang-en">Global Control Center</span></p>
                </div>
            </a>

            <div class="relative hidden w-full max-w-xl xl:block">
                <i class="fa-solid fa-magnifying-glass pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-400"></i>
                <input type="search" placeholder="ابحث عن بائع أو متجر / Search seller or store" class="w-full rounded-2xl border border-homy-gold-200 bg-white px-10 py-2.5 text-sm font-semibold text-slate-700 outline-none ring-homy-gold-400 focus:ring dark:border-homy-gold-600/35 dark:bg-homy-green-700/25 dark:text-slate-100">
            </div>

            <div class="ms-auto flex items-center gap-2">
                <button id="langToggle" class="inline-flex h-11 items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-language"></i><span class="lang-ar">EN</span><span class="lang-en">AR</span></button>
                <button id="themeToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-moon"></i></button>

                <div class="relative">
                    <button data-toggle="notifications" class="relative h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                        <i class="fa-regular fa-bell"></i>
                        <span class="absolute -left-1 -top-1 inline-flex h-5 min-w-5 items-center justify-center rounded-full bg-red-500 px-1 text-[10px] font-black text-white">9</span>
                    </button>
                    <div id="notificationsPanel" class="admin-popover hidden absolute left-0 mt-2 w-80 overflow-hidden rounded-2xl border border-homy-gold-200 bg-white shadow-2xl shadow-black/15 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                        <div class="border-b border-homy-gold-100 px-4 py-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/25 dark:text-homy-gold-400"><span class="lang-ar">إشعارات هامة</span><span class="lang-en">Important Notifications</span></div>
                        <a href="vendor-applications.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">7 طلبات انضمام بائعين جديدة تحتاج مراجعة</span><span class="lang-en">7 new vendor applications need review</span></a>
                        <a href="disputes.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">نزاع دفع جديد بقيمة 890 SAR</span><span class="lang-en">New payment dispute worth 890 SAR</span></a>
                        <a href="suggestions.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">اقتراح تحسين لتجربة التوصيل من المستخدمين</span><span class="lang-en">Delivery experience improvement suggestion</span></a>
                        <a href="notifications-center.html" class="block px-4 py-3 text-center text-xs font-black text-homy-gold-600"><span class="lang-ar">عرض كل الإشعارات</span><span class="lang-en">See All Notifications</span></a>
                    </div>
                </div>
                <x-logout/>

                <div class="relative">
                    <button data-toggle="profileMenu" class="flex items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-2 py-1.5 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35">
                        <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?auto=format&fit=crop&w=120&q=80" alt="Admin" class="h-8 w-8 rounded-xl object-cover">
                        <span class="hidden text-xs font-black text-homy-green-700 dark:text-homy-gold-300 sm:block"><span class="lang-ar">المدير العام</span><span class="lang-en">Owner Admin</span></span>
                    </button>
                    <div id="profileMenu" class="admin-popover hidden absolute left-0 mt-2 w-56 overflow-hidden rounded-2xl border border-homy-gold-200 bg-white shadow-xl shadow-black/15 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                        <a href="profile.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">الملف الشخصي</span><span class="lang-en">Profile</span></a>
                        <a href="profile-settings.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">إعدادات البروفايل</span><span class="lang-en">Profile Settings</span></a>
                        <a href="system-settings.html" class="block px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">إعدادات النظام</span><span class="lang-en">System Settings</span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mx-auto grid w-full max-w-[1700px] gap-6 px-4 py-6 lg:grid-cols-[1fr_320px]">
        <section class="space-y-6">
            <article class="relative overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
                <div class="absolute -left-20 -top-20 h-52 w-52 rounded-full bg-homy-gold-200/40 blur-3xl dark:bg-homy-gold-600/20"></div>
                <div class="absolute -bottom-24 -right-20 h-60 w-60 rounded-full bg-homy-green-500/30 blur-3xl dark:bg-homy-green-500/20"></div>
                <div class="relative flex flex-wrap items-start justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">لوحة القيادة العالمية</span><span class="lang-en">Global Mission Dashboard</span></h1>
                        <p class="mt-2 max-w-2xl text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300"><span class="lang-ar">إشراف كامل على البائعين، المدفوعات، جودة المنتجات، التجربة التشغيلية، والنمو اليومي للمنصة من نقطة واحدة قوية.</span><span class="lang-en">Oversee vendors, payments, product quality, operational experience, and platform growth from one powerful center.</span></p>
                    </div>
                    <div class="flex flex-wrap gap-2 text-xs font-black">
                        <a href="vendor-applications.html" class="rounded-xl bg-homy-green-700 px-4 py-2 text-white"><span class="lang-ar">طلبات الانضمام</span><span class="lang-en">Join Requests</span></a>
                        <a href="site-analytics.html" class="rounded-xl border border-homy-gold-300 px-4 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span class="lang-ar">لوحة الإحصائيات</span><span class="lang-en">Analytics</span></a>
                    </div>
                </div>
            </article>

            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">إجمالي المبيعات الشهرية</span><span class="lang-en">Monthly GMV</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">1.42M SAR</p><p class="mt-1 text-xs font-bold text-emerald-600">+18.4%</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">البائعون النشطون</span><span class="lang-en">Active Vendors</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">1,284</p><p class="mt-1 text-xs font-bold text-homy-gold-600"><span class="lang-ar">42 جديد هذا الأسبوع</span><span class="lang-en">42 new this week</span></p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">معدل رضا العملاء</span><span class="lang-en">Customer Satisfaction</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">96.1%</p><p class="mt-1 text-xs font-bold text-sky-600"><span class="lang-ar">4.8/5 متوسط التقييم</span><span class="lang-en">4.8/5 average rating</span></p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">قضايا تحتاج تدخل</span><span class="lang-en">Needs Attention</span></p><p class="mt-2 text-2xl font-black text-red-600">14</p><p class="mt-1 text-xs font-bold text-red-600"><span class="lang-ar">نزاعات وطلبات حساسة</span><span class="lang-en">Disputes & sensitive cases</span></p></article>
            </div>

            <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
                <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <div class="mb-4 flex items-center justify-between">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">طلبات تتطلب قرار فوري</span><span class="lang-en">Actions Requiring Immediate Decision</span></h2>
                        <a href="vendor-applications.html" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">إدارة الطلبات</span><span class="lang-en">Manage</span></a>
                    </div>
                    <div class="overflow-x-auto custom-scrollbar">
                        <table class="min-w-full text-sm">
                            <thead>
                                <tr class="text-slate-500 dark:text-slate-300">
                                    <th class="py-2 text-right font-black"><span class="lang-ar">النوع</span><span class="lang-en">Type</span></th>
                                    <th class="py-2 text-right font-black"><span class="lang-ar">المرجع</span><span class="lang-en">Reference</span></th>
                                    <th class="py-2 text-right font-black"><span class="lang-ar">الأولوية</span><span class="lang-en">Priority</span></th>
                                    <th class="py-2 text-right font-black"><span class="lang-ar">الإجراء</span><span class="lang-en">Action</span></th>
                                </tr>
                            </thead>
                            <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                                <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3"><span class="lang-ar">انضمام بائع</span><span class="lang-en">Vendor Join</span></td><td class="py-3">#VJ-9032</td><td class="py-3"><span class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700"><span class="lang-ar">متوسط</span><span class="lang-en">Medium</span></span></td><td class="py-3"><a href="vendor-applications.html" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">مراجعة</span><span class="lang-en">Review</span></a></td></tr>
                                <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3"><span class="lang-ar">نزاع دفع</span><span class="lang-en">Payment Dispute</span></td><td class="py-3">#DP-1801</td><td class="py-3"><span class="rounded-full bg-red-100 px-2 py-1 text-xs font-black text-red-700"><span class="lang-ar">عالي</span><span class="lang-en">High</span></span></td><td class="py-3"><a href="disputes.html" class="text-xs font-black text-red-600 underline"><span class="lang-ar">حل الآن</span><span class="lang-en">Resolve</span></a></td></tr>
                                <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3"><span class="lang-ar">متجر مخالف</span><span class="lang-en">Store Violation</span></td><td class="py-3">#SV-118</td><td class="py-3"><span class="rounded-full bg-red-100 px-2 py-1 text-xs font-black text-red-700"><span class="lang-ar">حرج</span><span class="lang-en">Critical</span></span></td><td class="py-3"><a href="stores-control.html" class="text-xs font-black text-red-600 underline"><span class="lang-ar">تجميد</span><span class="lang-en">Suspend</span></a></td></tr>
                            </tbody>
                        </table>
                    </div>
                </article>

                <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">حالة المنصة المباشرة</span><span class="lang-en">Live Platform Health</span></h2>
                    <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30"><span><span class="lang-ar">الخوادم</span><span class="lang-en">Servers</span></span><span class="font-black text-emerald-600">99.99%</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30"><span><span class="lang-ar">بوابات الدفع</span><span class="lang-en">Payment Gateways</span></span><span class="font-black text-emerald-600">Operational</span></div>
                        <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30"><span><span class="lang-ar">التنبيهات الأمنية</span><span class="lang-en">Security Alerts</span></span><span class="font-black text-amber-600">2 Warnings</span></div>
                    </div>

                    <div class="mt-5 grid gap-2 text-xs font-black sm:grid-cols-2">
                        <a href="audit-logs.html" class="rounded-xl bg-homy-green-700 px-3 py-2 text-center text-white"><span class="lang-ar">سجل النشاط</span><span class="lang-en">Audit Logs</span></a>
                        <a href="system-settings.html" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span class="lang-ar">إعدادات النظام</span><span class="lang-en">System Settings</span></a>
                    </div>
                </article>
            </div>
        </section>

        <aside id="sidebar" class="offcanvas-sidebar fixed right-0 top-0 z-50 h-full w-80 max-w-[90vw] overflow-y-auto border-s border-homy-gold-200/60 bg-white/95 p-5 shadow-2xl shadow-black/25 backdrop-blur-xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/95 lg:sticky lg:top-24 lg:z-10 lg:h-[calc(100vh-7rem)] lg:w-auto lg:max-w-none lg:translate-x-0 lg:rounded-[1.5rem] lg:border lg:shadow-none">
            <div class="mb-5 flex items-center justify-between"><h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قائمة الإدارة العليا</span><span class="lang-en">Super Admin Menu</span></h2><button id="closeSidebar" class="h-9 w-9 rounded-xl border border-homy-gold-200 text-homy-green-700 lg:hidden dark:border-homy-gold-600/35 dark:text-homy-gold-300"><i class="fa-solid fa-xmark"></i></button></div>
            <nav class="space-y-1.5 text-sm font-bold">
                <a href="dashboard.html" class="flex items-center gap-3 rounded-xl border border-homy-gold-200 bg-homy-gold-50 px-3 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-grid-2"></i><span class="lang-ar">الرئيسية</span><span class="lang-en">Dashboard</span></a>
                <a href="vendor-applications.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-user-plus"></i><span class="lang-ar">طلبات الانضمام</span><span class="lang-en">Vendor Applications</span></a>
                <a href="site-analytics.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-chart-line"></i><span class="lang-ar">إحصائيات الموقع</span><span class="lang-en">Site Analytics</span></a>
                <a href="product-types.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-layer-group"></i><span class="lang-ar">أنواع المنتجات</span><span class="lang-en">Product Types</span></a>
                <a href="payment-methods.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-credit-card"></i><span class="lang-ar">وسائل الدفع</span><span class="lang-en">Payment Methods</span></a>
                <a href="sellers-control.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-users-gear"></i><span class="lang-ar">التحكم بالبائعين</span><span class="lang-en">Sellers Control</span></a>
                <a href="stores-control.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-store-slash"></i><span class="lang-ar">التحكم بالمتاجر</span><span class="lang-en">Stores Control</span></a>
                <a href="orders-control.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-truck"></i><span class="lang-ar">الطلبات</span><span class="lang-en">Orders</span></a>
                <a href="users-control.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-user-group"></i><span class="lang-ar">المستخدمون</span><span class="lang-en">Users</span></a>
                <a href="payouts.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-money-bill-transfer"></i><span class="lang-ar">السحوبات</span><span class="lang-en">Payouts</span></a>
                <a href="disputes.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-scale-balanced"></i><span class="lang-ar">النزاعات</span><span class="lang-en">Disputes</span></a>
                <a href="coupons.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-ticket"></i><span class="lang-ar">الكوبونات</span><span class="lang-en">Coupons</span></a>
                <a href="content-management.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-newspaper"></i><span class="lang-ar">إدارة المحتوى</span><span class="lang-en">Content</span></a>
                <a href="roles-permissions.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-user-shield"></i><span class="lang-ar">الأدوار والصلاحيات</span><span class="lang-en">Roles & Permissions</span></a>
                <a href="audit-logs.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-clock-rotate-left"></i><span class="lang-ar">سجل العمليات</span><span class="lang-en">Audit Logs</span></a>
                <a href="notifications-center.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-bell"></i><span class="lang-ar">مركز الإشعارات</span><span class="lang-en">Notifications Center</span></a>
                <a href="system-settings.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-sliders"></i><span class="lang-ar">إعدادات النظام</span><span class="lang-en">System Settings</span></a>
                <a href="profile-settings.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-id-badge"></i><span class="lang-ar">إعدادات البروفايل</span><span class="lang-en">Profile Settings</span></a>
            </nav>
        </aside>
    </main>

    <script src="../assets/app.js"></script>
</body>
</html>
