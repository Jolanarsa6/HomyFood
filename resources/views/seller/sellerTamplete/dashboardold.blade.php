@extends('seller.layouts.master')


@section('content')
<section class="space-y-6">
    <article
        class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/45 p-6 dark:border-homy-gold-600/35 dark:from-[#14261f] dark:via-[#12211b] dark:to-[#173326]">
        <div class="flex flex-wrap items-start justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span
                        class="lang-ar">مرحبًا، مطبخ بيت الشام</span><span class="lang-en">Welcome, Beit Al Sham
                        Kitchen</span></h1>
                <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">لديك
                        اليوم 18 طلب جديد و3 منتجات تحتاج تحديث المخزون.</span><span class="lang-en">You have 18 new
                        orders today and 3 items need stock update.</span></p>
            </div>
            <a href="add-product.html"
                class="rounded-2xl bg-homy-green-700 px-5 py-3 text-sm font-black text-white hover:bg-homy-green-600"><span
                    class="lang-ar">إضافة منتج جديد</span><span class="lang-en">Add New Product</span></a>
        </div>
        <div class="mt-5 grid gap-3 sm:grid-cols-4 text-center text-xs font-black">
            <div
                class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">نسبة قبول الطلبات</span><span class="lang-en">Order Acceptance</span>
                <p class="mt-1 text-lg">96%</p>
            </div>
            <div
                class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">متوسط التقييم</span><span class="lang-en">Avg Rating</span>
                <p class="mt-1 text-lg">4.8</p>
            </div>
            <div
                class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">التحضير اليومي</span><span class="lang-en">Daily Production</span>
                <p class="mt-1 text-lg">72</p>
            </div>
            <div
                class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">وقت الرد</span><span class="lang-en">Response Time</span>
                <p class="mt-1 text-lg">12m</p>
            </div>
        </div>
    </article>

    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">إجمالي
                    المبيعات</span><span class="lang-en">Total Sales</span></p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">48,900 SYP</p>
            <p class="mt-1 text-xs font-bold text-emerald-600">+12%</p>
        </article>
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">طلبات قيد
                    التحضير</span><span class="lang-en">Preparing Orders</span></p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">23</p>
            <p class="mt-1 text-xs font-bold text-homy-gold-600"><span class="lang-ar">يحتاج متابعة</span><span
                    class="lang-en">Needs Follow-up</span></p>
        </article>
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">رصيد
                    المحفظة</span><span class="lang-en">Wallet Balance</span></p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">12,340 SYP</p>
            <p class="mt-1 text-xs font-bold text-sky-600"><span class="lang-ar">آخر تحويل: أمس</span><span
                    class="lang-en">Last payout: Yesterday</span></p>
        </article>
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">منتجات منخفضة
                    المخزون</span><span class="lang-en">Low Stock Products</span></p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">3</p>
            <a href="products.html" class="mt-1 inline-block text-xs font-black text-red-600 underline"><span
                    class="lang-ar">تحديث الآن</span><span class="lang-en">Update Now</span></a>
        </article>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">أحدث
                        الطلبات</span><span class="lang-en">Latest Orders</span></h2>
                <a href="orders.html" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">عرض
                        الكل</span><span class="lang-en">View All</span></a>
            </div>
            <div class="overflow-x-auto custom-scrollbar">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-slate-500 dark:text-slate-300">
                            <th class="px-2 py-2 text-right font-black"><span class="lang-ar">رقم الطلب</span><span
                                    class="lang-en">Order ID</span></th>
                            <th class="px-2 py-2 text-right font-black"><span class="lang-ar">العميل</span><span
                                    class="lang-en">Customer</span></th>
                            <th class="px-2 py-2 text-right font-black"><span class="lang-ar">الحالة</span><span
                                    class="lang-en">Status</span></th>
                            <th class="px-2 py-2 text-right font-black"><span class="lang-ar">القيمة</span><span
                                    class="lang-en">Amount</span></th>
                        </tr>
                    </thead>
                    <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                        <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                            <td class="px-2 py-3">#HMF-2091</td>
                            <td class="px-2 py-3">ريم أحمد</td>
                            <td class="px-2 py-3"><span
                                    class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700">Preparing</span>
                            </td>
                            <td class="px-2 py-3">182 SYP</td>
                        </tr>
                        <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                            <td class="px-2 py-3">#HMF-2090</td>
                            <td class="px-2 py-3">Khaled N.</td>
                            <td class="px-2 py-3"><span
                                    class="rounded-full bg-sky-100 px-2 py-1 text-xs font-black text-sky-700">Shipped</span>
                            </td>
                            <td class="px-2 py-3">95 SYP</td>
                        </tr>
                        <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                            <td class="px-2 py-3">#HMF-2089</td>
                            <td class="px-2 py-3">Dina H.</td>
                            <td class="px-2 py-3"><span
                                    class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-black text-emerald-700">Delivered</span>
                            </td>
                            <td class="px-2 py-3">243 SYP</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="mb-4 text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">أداء
                    المنتجات</span><span class="lang-en">Product Performance</span></h2>
            <div class="space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                <div>
                    <div class="mb-1 flex items-center justify-between"><span>مكدوس جوز سوبر</span><span>82%</span>
                    </div>
                    <div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30">
                        <div class="h-full w-[82%] rounded-full bg-homy-green-700 dark:bg-homy-gold-500"></div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 flex items-center justify-between"><span>مربى تين ملكي</span><span>70%</span></div>
                    <div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30">
                        <div class="h-full w-[70%] rounded-full bg-homy-green-700 dark:bg-homy-gold-500"></div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 flex items-center justify-between"><span>زعتر نابلسي</span><span>54%</span></div>
                    <div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30">
                        <div class="h-full w-[54%] rounded-full bg-homy-green-700 dark:bg-homy-gold-500"></div>
                    </div>
                </div>
            </div>

            <div class="mt-5 rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                <p class="text-xs font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تعليق
                        العملاء الأخير</span><span class="lang-en">Latest Customer Comment</span></p>
                <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">التغليف
                        ممتاز والطعم أصيل جدًا، شكرا لكم.</span><span class="lang-en">Great packaging and authentic
                        taste, thank you.</span></p>
                <a href="messages.html" class="mt-2 inline-block text-xs font-black text-homy-gold-600 underline"><span
                        class="lang-ar">الرد من هنا</span><span class="lang-en">Reply Here</span></a>
            </div>
        </article>
    </div>
</section>

@endsection