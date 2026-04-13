{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
     <!-- the buyer dashboard -->
   <div class="flex h-screen bg-gray-50 font-sans text-gray-800">
        <aside
            class="hidden md:flex flex-col w-64 bg-white border-e border-gray-200 shadow-sm transition-all duration-300">

            <div class="flex items-center justify-center h-16 border-b border-gray-200">
                <h1
                    class="text-2xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-400">
                    سوق الطعام
                </h1>
            </div>

            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-2">
                <a href="#"
                    class="flex items-center gap-3 px-4 py-3 bg-orange-50 text-orange-600 rounded-lg transition-colors font-semibold">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>لوحة القيادة</span>
                </a>

                <a href="#"
                    class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-orange-500 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>إضافة وجبة جديدة</span>
                </a>

                <a href="#"
                    class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-orange-500 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    <span>وجباتي (المنيو)</span>
                </a>

                <a href="#"
                    class="flex items-center justify-between px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-orange-500 rounded-lg transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span>الطلبات</span>
                    </div>
                    <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">3</span>
                </a>
            </nav>

            <div class="p-4 border-t border-gray-200">
                <button
                    class="flex items-center gap-3 w-full px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg transition-colors text-start">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <span>تسجيل الخروج</span>
                </button>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-hidden">

            <header
                class="flex items-center justify-between h-16 px-4 sm:px-6 bg-white border-b border-gray-200 shadow-sm">
                <button class="md:hidden text-gray-500 focus:outline-none focus:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div class="text-xl font-bold text-gray-800">
                    مرحباً بك، <span class="text-orange-500">{{ auth()->user()->name ?? 'شيف' }}</span> 👨‍🍳
                </div>
            </header>

            <div class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">

                    <div
                        class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">إجمالي الأرباح</p>
                            <h3 class="text-3xl font-bold text-gray-800">$1,240</h3>
                        </div>
                        <div class="p-4 bg-green-100 rounded-full text-green-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">الطلبات الجارية</p>
                            <h3 class="text-3xl font-bold text-gray-800">12</h3>
                        </div>
                        <div class="p-4 bg-orange-100 rounded-full text-orange-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-center justify-between hover:shadow-md transition-shadow">
                        <div>
                            <p class="text-sm font-medium text-gray-500 mb-1">قائمة الوجبات</p>
                            <h3 class="text-3xl font-bold text-gray-800">45</h3>
                        </div>
                        <div class="p-4 bg-blue-100 rounded-full text-blue-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                    </div>

                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-lg font-bold text-gray-800 mb-4">أحدث الطلبات</h2>
                    <p class="text-gray-500 text-sm">مساحة مخصصة لعرض الجداول والتفاصيل...</p>
                </div>

            </div>
        </main>
    </div> 


      <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen bg-gray-50 flex" dir="rtl">

        <aside class="w-72 bg-white border-l border-gray-100 flex flex-col hidden lg:flex fixed h-full z-50">
            <div class="p-8 border-b border-gray-50 flex flex-col items-center gap-3">
                <img src="https://i.postimg.cc/Xv8gN8p8/your-image-url.jpg" alt="Logo"
                    class="h-16 w-16 rounded-full border-2 border-homy-gold-500 shadow-sm">
                <h1 class="text-xl font-black text-homy-green-700">HOMY <span class="text-homy-gold-500">FOOD</span>
                </h1>
                <span class="text-xs bg-homy-green-100 text-homy-green-700 px-3 py-1 rounded-full font-bold">لوحة
                    البائع</span>
            </div>

            <nav class="flex-1 p-6 space-y-2">
                <a href="#"
                    class="flex items-center gap-4 px-4 py-3.5 bg-homy-green-700 text-white rounded-2xl shadow-lg shadow-homy-green-100 transition-all">
                    <i class="fas fa-chart-line text-lg"></i>
                    <span class="font-bold">الإحصائيات</span>
                </a>
                <a href="#"
                    class="flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:bg-homy-gold-50 hover:text-homy-green-700 rounded-2xl transition-all group">
                    <i class="fas fa-box text-lg group-hover:text-homy-gold-500"></i>
                    <span class="font-bold">المنتجات</span>
                </a>
                <a href="#"
                    class="flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:bg-homy-gold-50 hover:text-homy-green-700 rounded-2xl transition-all group">
                    <i class="fas fa-shopping-cart text-lg group-hover:text-homy-gold-500"></i>
                    <span class="font-bold">الطلبات</span>
                    <span class="ms-auto bg-homy-gold-500 text-white text-[10px] px-2 py-0.5 rounded-md">جديد</span>
                </a>
                <a href="#"
                    class="flex items-center gap-4 px-4 py-3.5 text-gray-500 hover:bg-homy-gold-50 hover:text-homy-green-700 rounded-2xl transition-all group">
                    <i class="fas fa-users text-lg group-hover:text-homy-gold-500"></i>
                    <span class="font-bold">العملاء</span>
                </a>
            </nav>

            <div class="p-6 border-t border-gray-50">
                <button
                    class="w-full flex items-center gap-4 px-4 py-3 text-red-500 hover:bg-red-50 rounded-2xl transition-all font-bold">
                    <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                </button>
            </div>
        </aside>

        <main class="flex-1 lg:mr-72 p-6 lg:p-10">

            <header class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-2xl font-black text-homy-green-700">مرحباً 👋</h2>
                    <p class="text-gray-400 text-sm mt-1">إليك ما يحدث في متجرك اليوم.</p>
                </div>

                <div class="flex items-center gap-5">
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="بحث سريع..."
                            class="bg-white border border-gray-100 py-2.5 pr-10 pl-4 rounded-xl text-sm focus:ring-2 focus:ring-homy-gold-100 outline-none w-64 shadow-sm">
                        <i class="fas fa-search absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
                    </div>
                    <button
                        class="relative w-11 h-11 bg-white rounded-xl border border-gray-100 flex items-center justify-center text-gray-400 hover:text-homy-gold-500 shadow-sm transition-all">
                        <i class="far fa-bell text-xl"></i>
                        <span
                            class="absolute top-2 left-2 w-2 h-2 bg-homy-gold-500 rounded-full border-2 border-white"></span>
                    </button>
                    <div
                        class="w-11 h-11 bg-homy-gold-500 rounded-xl overflow-hidden shadow-md border-2 border-white hover:scale-110 transition-transform cursor-pointer">
                        <img src="https://ui-avatars.com/api/?name=Homy+Food&background=C4A462&color=fff"
                            alt="User">
                    </div>
                </div>
            </header>
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div
                    class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/20 group hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 bg-homy-green-100 rounded-2xl flex items-center justify-center text-homy-green-700 text-xl group-hover:bg-homy-green-700 group-hover:text-white transition-all">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded-lg">+12%</span>
                    </div>
                    <p class="text-gray-400 text-sm font-bold">إجمالي المبيعات</p>
                    <h3 class="text-2xl font-black text-homy-green-700 mt-1">12,450 ر.س</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/20 group hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 bg-homy-gold-100 rounded-2xl flex items-center justify-center text-homy-gold-500 text-xl group-hover:bg-homy-gold-500 group-hover:text-white transition-all">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <span class="text-xs font-bold text-homy-gold-600 bg-homy-gold-50 px-2 py-1 rounded-lg">8
                            جديد</span>
                    </div>
                    <p class="text-gray-400 text-sm font-bold">الطلبات النشطة</p>
                    <h3 class="text-2xl font-black text-homy-green-700 mt-1">42 طلب</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/20 group hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-500 text-xl group-hover:bg-homy-green-700 group-hover:text-white transition-all">
                            <i class="fas fa-utensils"></i>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm font-bold">المنتجات المعروضة</p>
                    <h3 class="text-2xl font-black text-homy-green-700 mt-1">15 منتج</h3>
                </div>

                <div
                    class="bg-white p-6 rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/20 group hover:-translate-y-1 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500 text-xl group-hover:bg-blue-500 group-hover:text-white transition-all">
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="text-xs font-bold text-gray-400">4.9/5</span>
                    </div>
                    <p class="text-gray-400 text-sm font-bold">تقييم المتجر</p>
                    <h3 class="text-2xl font-black text-homy-green-700 mt-1">ممتاز</h3>
                </div>
            </section>

            <section class="bg-white rounded-3xl border border-gray-100 shadow-xl shadow-gray-200/20 overflow-hidden">
                <div class="p-8 border-b border-gray-50 flex items-center justify-between">
                    <h3 class="text-xl font-black text-homy-green-700">آخر الطلبات</h3>
                    <button class="text-homy-gold-500 font-bold text-sm hover:underline">عرض الكل <i
                            class="fas fa-chevron-left text-[10px] mr-1"></i></button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead class="bg-gray-50 text-gray-400 text-xs uppercase">
                            <tr>
                                <th class="px-8 py-4 font-bold">رقم الطلب</th>
                                <th class="px-8 py-4 font-bold">العميل</th>
                                <th class="px-8 py-4 font-bold">المنتج</th>
                                <th class="px-8 py-4 font-bold">التاريخ</th>
                                <th class="px-8 py-4 font-bold">الحالة</th>
                                <th class="px-8 py-4 font-bold">الإجمالي</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50 text-sm">
                            <tr class="hover:bg-homy-gold-50/30 transition-colors">
                                <td class="px-8 py-5 font-bold">#ORD-5542</td>
                                <td class="px-8 py-5">أحمد العتيبي</td>
                                <td class="px-8 py-5">مربى تين ملكي (2kg)</td>
                                <td class="px-8 py-5 text-gray-400">منذ ساعتين</td>
                                <td class="px-8 py-5">
                                    <span
                                        class="bg-homy-gold-100 text-homy-gold-600 px-3 py-1 rounded-full text-xs font-bold">قيد
                                        التحضير</span>
                                </td>
                                <td class="px-8 py-5 font-black text-homy-green-700">145 ر.س</td>
                            </tr>
                            <tr class="hover:bg-homy-gold-50/30 transition-colors">
                                <td class="px-8 py-5 font-bold">#ORD-5541</td>
                                <td class="px-8 py-5">سارة خالد</td>
                                <td class="px-8 py-5">مكدوس باذنجان حار</td>
                                <td class="px-8 py-5 text-gray-400">منذ 5 ساعات</td>
                                <td class="px-8 py-5">
                                    <span
                                        class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-bold">تم
                                        التوصيل</span>
                                </td>
                                <td class="px-8 py-5 font-black text-homy-green-700">85 ر.س</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                                                this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</body>

</html>
