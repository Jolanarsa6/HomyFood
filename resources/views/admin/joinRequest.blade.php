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
                    <p class="text-[11px] text-slate-500 dark:text-slate-400"><span class="lang-ar">طلبات انضمام البائعين</span><span class="lang-en">Vendor Applications</span></p>
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
                    <button data-toggle="notifications" class="relative h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-regular fa-bell"></i><span class="absolute -left-1 -top-1 inline-flex h-5 min-w-5 items-center justify-center rounded-full bg-red-500 px-1 text-[10px] font-black text-white">9</span></button>
                    <div id="notificationsPanel" class="admin-popover hidden absolute left-0 mt-2 w-80 overflow-hidden rounded-2xl border border-homy-gold-200 bg-white shadow-2xl shadow-black/15 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                        <a href="vendor-applications.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">طلبات جديدة تحتاج مراجعة</span><span class="lang-en">New vendor requests need review</span></a>
                        <a href="suggestions.html" class="block border-b border-homy-gold-100 px-4 py-3 text-sm font-semibold text-slate-600 hover:bg-homy-gold-50 dark:border-homy-gold-600/25 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><span class="lang-ar">اقتراحات تحسين جديدة</span><span class="lang-en">New improvement suggestions</span></a>
                        <a href="notifications-center.html" class="block px-4 py-3 text-center text-xs font-black text-homy-gold-600"><span class="lang-ar">كل الإشعارات</span><span class="lang-en">All notifications</span></a>
                    </div>
                </div>
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
            <article class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">إدارة طلبات انضمام البائعين</span><span class="lang-en">Manage Vendor Join Requests</span></h1>
                <p class="mt-2 text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300"><span class="lang-ar">فحص توثيق الهوية، البيانات البنكية، وصلاحية المنتجات قبل قبول المتجر داخل المنصة.</span><span class="lang-en">Review identity verification, bank details, and product validity before store activation.</span></p>
                <div class="mt-4 flex flex-wrap gap-2 text-xs font-black">
                    <button class="rounded-xl bg-emerald-600 px-4 py-2 text-white"><span class="lang-ar">قبول جماعي</span><span class="lang-en">Bulk Approve</span></button>
                    <button class="rounded-xl border border-red-300 px-4 py-2 text-red-600"><span class="lang-ar">رفض جماعي</span><span class="lang-en">Bulk Reject</span></button>
                </div>
            </article>

            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">طلبات جديدة</span><span class="lang-en">New Requests</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">47</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">بانتظار مستندات</span><span class="lang-en">Missing Docs</span></p><p class="mt-2 text-2xl font-black text-amber-600">21</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">مقبولة</span><span class="lang-en">Approved</span></p><p class="mt-2 text-2xl font-black text-emerald-600">129</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">مرفوضة</span><span class="lang-en">Rejected</span></p><p class="mt-2 text-2xl font-black text-red-600">14</p></article>
            </div>

            <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قائمة طلبات الانضمام</span><span class="lang-en">Applications Queue</span></h2>
                    <a href="audit-logs.html" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">سجل القرارات</span><span class="lang-en">Decision logs</span></a>
                </div>
                <div class="overflow-x-auto custom-scrollbar">
                    <table class="min-w-full text-sm">
                        <thead><tr class="text-slate-500 dark:text-slate-300"><th class="py-2 text-right font-black"><span class="lang-ar">الطلب</span><span class="lang-en">Request</span></th><th class="py-2 text-right font-black"><span class="lang-ar">البائع</span><span class="lang-en">Vendor</span></th><th class="py-2 text-right font-black"><span class="lang-ar">الحالة</span><span class="lang-en">Status</span></th><th class="py-2 text-right font-black"><span class="lang-ar">إجراء</span><span class="lang-en">Action</span></th></tr></thead>
                        <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#VJ-9032</td><td class="py-3">مطبخ الساحل</td><td class="py-3"><span class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700">Pending KYC</span></td><td class="py-3"><a href="#" class="text-xs font-black text-emerald-600 underline"><span class="lang-ar">قبول</span><span class="lang-en">Approve</span></a></td></tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#VJ-9031</td><td class="py-3">بيت المونة</td><td class="py-3"><span class="rounded-full bg-sky-100 px-2 py-1 text-xs font-black text-sky-700">Reviewing Docs</span></td><td class="py-3"><a href="#" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">فتح الملف</span><span class="lang-en">Open file</span></a></td></tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#VJ-9028</td><td class="py-3">Fresh Box</td><td class="py-3"><span class="rounded-full bg-red-100 px-2 py-1 text-xs font-black text-red-700">Risk Flag</span></td><td class="py-3"><a href="sellers-control.html" class="text-xs font-black text-red-600 underline"><span class="lang-ar">تصعيد</span><span class="lang-en">Escalate</span></a></td></tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>

        <aside id="sidebar" class="offcanvas-sidebar fixed right-0 top-0 z-50 h-full w-80 max-w-[90vw] overflow-y-auto border-s border-homy-gold-200/60 bg-white/95 p-5 shadow-2xl shadow-black/25 backdrop-blur-xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/95 lg:sticky lg:top-24 lg:z-10 lg:h-[calc(100vh-7rem)] lg:w-auto lg:max-w-none lg:translate-x-0 lg:rounded-[1.5rem] lg:border lg:shadow-none">
            <div class="mb-5 flex items-center justify-between"><h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قائمة الإدارة العليا</span><span class="lang-en">Super Admin Menu</span></h2><button id="closeSidebar" class="h-9 w-9 rounded-xl border border-homy-gold-200 text-homy-green-700 lg:hidden dark:border-homy-gold-600/35 dark:text-homy-gold-300"><i class="fa-solid fa-xmark"></i></button></div>
            <nav class="space-y-1.5 text-sm font-bold">
                <a href="dashboard.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-grid-2"></i><span class="lang-ar">الرئيسية</span><span class="lang-en">Dashboard</span></a>
                <a href="vendor-applications.html" class="flex items-center gap-3 rounded-xl border border-homy-gold-200 bg-homy-gold-50 px-3 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-user-plus"></i><span class="lang-ar">طلبات الانضمام</span><span class="lang-en">Vendor Applications</span></a>
                <a href="site-analytics.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-chart-line"></i><span class="lang-ar">إحصائيات الموقع</span><span class="lang-en">Site Analytics</span></a>
                <a href="product-types.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-layer-group"></i><span class="lang-ar">أنواع المنتجات</span><span class="lang-en">Product Types</span></a>
                <a href="payment-methods.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-credit-card"></i><span class="lang-ar">وسائل الدفع</span><span class="lang-en">Payment Methods</span></a>
            </nav>
        </aside>
    </main>

    <script src="../assets/app.js"></script>
</body>
</html>
