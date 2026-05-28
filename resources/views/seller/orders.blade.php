<x-seller.app>
<body class="text-slate-800 dark:text-slate-100">
    <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden"></div>

    {{-- <header class="sticky top-0 z-30 border-b border-homy-gold-200/70 bg-white/85 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
        <div class="mx-auto flex w-full max-w-[1500px] items-center gap-3 px-4 py-3">
            <button id="menuToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm lg:hidden dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-bars"></i></button>
            <a href="dashboard.html" class="flex items-center gap-3"><div class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-base font-black text-white shadow-lg">HF</div><p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تتبع حالة الطلبات</span><span class="lang-en">Order Tracking</span></p></a>
            <div class="ms-auto flex items-center gap-2">
                <button id="langToggle" class="inline-flex h-11 items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-language"></i><span class="lang-ar">EN</span><span class="lang-en">AR</span></button>
                <button id="themeToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-moon"></i></button>
            </div>
        </div>
    </header> --}}

    <main class="mx-auto grid w-full max-w-[1500px] gap-6 px-4 py-6 lg:grid-cols-[1fr_300px]">
        <section class="space-y-5">
            <div class="grid gap-4 sm:grid-cols-4">
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">طلبات جديدة</span><span class="lang-en">New Orders</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">18</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">قيد التحضير</span><span class="lang-en">Preparing</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">11</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">تم الشحن</span><span class="lang-en">Shipped</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">9</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">ملغاة</span><span class="lang-en">Canceled</span></p><p class="mt-2 text-2xl font-black text-red-600">2</p></article>
            </div>

            <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="mb-4 grid gap-3 sm:grid-cols-4">
                    <input type="search" placeholder="ابحث برقم الطلب أو العميل" class="rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326] sm:col-span-2">
                    <select class="rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]"><option><span class="lang-ar">كل الحالات</span><span class="lang-en">All Statuses</span></option><option>New</option><option>Preparing</option><option>Shipped</option><option>Delivered</option></select>
                    <select class="rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]"><option><span class="lang-ar">اليوم</span><span class="lang-en">Today</span></option><option><span class="lang-ar">هذا الأسبوع</span><span class="lang-en">This Week</span></option></select>
                </div>

                <div class="overflow-x-auto custom-scrollbar">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-slate-500 dark:text-slate-300">
                                <th class="py-3 text-right font-black"><span class="lang-ar">الطلب</span><span class="lang-en">Order</span></th>
                                <th class="py-3 text-right font-black"><span class="lang-ar">العميل</span><span class="lang-en">Customer</span></th>
                                <th class="py-3 text-right font-black"><span class="lang-ar">الحالة</span><span class="lang-en">Status</span></th>
                                <th class="py-3 text-right font-black"><span class="lang-ar">التوصيل</span><span class="lang-en">Delivery</span></th>
                                <th class="py-3 text-right font-black"><span class="lang-ar">القيمة</span><span class="lang-en">Amount</span></th>
                                <th class="py-3 text-right font-black"><span class="lang-ar">إجراء</span><span class="lang-en">Action</span></th>
                            </tr>
                        </thead>
                        <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#HMF-2091</td><td class="py-3">ريم أحمد</td><td class="py-3"><span class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700">Preparing</span></td><td class="py-3"><span class="lang-ar">اليوم 8:00م</span><span class="lang-en">Today 8:00 PM</span></td><td class="py-3">182 SAR</td><td class="py-3"><a href="#" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">تحديث الحالة</span><span class="lang-en">Update</span></a></td></tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#HMF-2090</td><td class="py-3">Khaled N.</td><td class="py-3"><span class="rounded-full bg-sky-100 px-2 py-1 text-xs font-black text-sky-700">Shipped</span></td><td class="py-3"><span class="lang-ar">غدا 1:00م</span><span class="lang-en">Tomorrow 1:00 PM</span></td><td class="py-3">95 SAR</td><td class="py-3"><a href="#" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">تتبع الشحنة</span><span class="lang-en">Track</span></a></td></tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#HMF-2089</td><td class="py-3">Dina H.</td><td class="py-3"><span class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-black text-emerald-700">Delivered</span></td><td class="py-3"><span class="lang-ar">تم التسليم</span><span class="lang-en">Delivered</span></td><td class="py-3">243 SAR</td><td class="py-3"><a href="messages.html" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">رسالة العميل</span><span class="lang-en">Message</span></a></td></tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">مراحل الطلب القياسية</span><span class="lang-en">Standard Order Stages</span></h2>
                <div class="mt-4 grid gap-3 sm:grid-cols-4 text-center text-xs font-black">
                    <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300"><span class="lang-ar">طلب جديد</span><span class="lang-en">New</span></div>
                    <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300"><span class="lang-ar">قيد التحضير</span><span class="lang-en">Preparing</span></div>
                    <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300"><span class="lang-ar">تم الشحن</span><span class="lang-en">Shipped</span></div>
                    <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300"><span class="lang-ar">تم التسليم</span><span class="lang-en">Delivered</span></div>
                </div>
            </article>
        </section>

        {{-- <aside id="sidebar" class="offcanvas-sidebar fixed right-0 top-0 z-50 h-full w-80 max-w-[88vw] overflow-y-auto border-s border-homy-gold-200/60 bg-white/95 p-5 shadow-2xl shadow-black/25 backdrop-blur-xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/95 lg:sticky lg:top-24 lg:z-10 lg:h-[calc(100vh-7rem)] lg:w-auto lg:max-w-none lg:translate-x-0 lg:rounded-[1.5rem] lg:border lg:shadow-none">
            <div class="mb-6 flex items-center justify-between lg:mb-4"><h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قائمة البائع</span><span class="lang-en">Seller Menu</span></h2><button id="closeSidebar" class="h-9 w-9 rounded-xl border border-homy-gold-200 text-homy-green-700 lg:hidden dark:border-homy-gold-600/35 dark:text-homy-gold-300"><i class="fa-solid fa-xmark"></i></button></div>
            <nav class="space-y-2 text-sm font-bold">
                <a href="dashboard.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-grid-2"></i><span class="lang-ar">الرئيسية</span><span class="lang-en">Dashboard</span></a>
                <a href="add-product.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-plus"></i><span class="lang-ar">إضافة منتج</span><span class="lang-en">Add Product</span></a>
                <a href="products.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-box-open"></i><span class="lang-ar">إدارة المنتجات</span><span class="lang-en">Products</span></a>
                <a href="orders.html" class="flex items-center gap-3 rounded-xl border border-homy-gold-200 bg-homy-gold-50 px-3 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/35 dark:text-homy-gold-300"><i class="fa-solid fa-truck-fast"></i><span class="lang-ar">تتبع الطلبات</span><span class="lang-en">Orders</span></a>
                <a href="wallet.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-wallet"></i><span class="lang-ar">المحفظة</span><span class="lang-en">Wallet</span></a>
                <a href="messages.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-comments"></i><span class="lang-ar">المراسلة والتعليقات</span><span class="lang-en">Messages</span></a>
                <a href="analytics.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-chart-simple"></i><span class="lang-ar">الإحصائيات</span><span class="lang-en">Analytics</span></a>
                <a href="store-settings.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-sliders"></i><span class="lang-ar">إعدادات المتجر</span><span class="lang-en">Store Settings</span></a>
                <a href="profile.html" class="flex items-center gap-3 rounded-xl px-3 py-2 text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/25"><i class="fa-solid fa-user-gear"></i><span class="lang-ar">الملف الشخصي</span><span class="lang-en">Profile</span></a>
            </nav>
        </aside> --}}
        @include('partials.seller-aside')
    </main>

</body>
</x-seller.app>