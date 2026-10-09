@extends('seller.layouts.master', ['title' => __('titles.orders')])

@section('content')
     
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
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#HMF-2091</td><td class="py-3">ريم أحمد</td><td class="py-3"><span class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700">Preparing</span></td><td class="py-3"><span class="lang-ar">اليوم 8:00م</span><span class="lang-en">Today 8:00 PM</span></td><td class="py-3">182 SYP</td><td class="py-3"><a href="#" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">تحديث الحالة</span><span class="lang-en">Update</span></a></td></tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#HMF-2090</td><td class="py-3">Khaled N.</td><td class="py-3"><span class="rounded-full bg-sky-100 px-2 py-1 text-xs font-black text-sky-700">Shipped</span></td><td class="py-3"><span class="lang-ar">غدا 1:00م</span><span class="lang-en">Tomorrow 1:00 PM</span></td><td class="py-3">95 SYP</td><td class="py-3"><a href="#" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">تتبع الشحنة</span><span class="lang-en">Track</span></a></td></tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">#HMF-2089</td><td class="py-3">Dina H.</td><td class="py-3"><span class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-black text-emerald-700">Delivered</span></td><td class="py-3"><span class="lang-ar">تم التسليم</span><span class="lang-en">Delivered</span></td><td class="py-3">243 SYP</td><td class="py-3"><a href="messages.html" class="text-xs font-black text-homy-gold-600 underline"><span class="lang-ar">رسالة العميل</span><span class="lang-en">Message</span></a></td></tr>
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
@endsection