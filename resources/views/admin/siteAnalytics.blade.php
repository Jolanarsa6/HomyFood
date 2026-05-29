@extends('admin.layouts.master')

@section('content')

        <section class="space-y-6">
            <article class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">لوحة الإحصائيات الشاملة</span><span class="lang-en">Global Analytics Board</span></h1>
                <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">متابعة النمو، التحويل، الإيرادات، ونقاط الاختناق التشغيلية لحظيًا.</span><span class="lang-en">Track growth, conversion, revenue, and operational bottlenecks in real time.</span></p>
            </article>
            <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">الزيارات اليومية</span><span class="lang-en">Daily Visits</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">184K</p><p class="mt-1 text-xs font-bold text-emerald-600">+11%</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">معدل التحويل</span><span class="lang-en">Conversion Rate</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">4.9%</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">متوسط السلة</span><span class="lang-en">Avg Basket</span></p><p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">133 SAR</p></article>
                <article class="kpi-card p-4"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">معدل الإلغاء</span><span class="lang-en">Cancellation</span></p><p class="mt-2 text-2xl font-black text-red-600">1.7%</p></article>
            </div>
            <div class="grid gap-6 xl:grid-cols-2">
                <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">اتجاه الإيرادات - 7 أيام</span><span class="lang-en">Revenue Trend - 7 Days</span></h2>
                    <div class="mt-5 grid h-56 grid-cols-7 items-end gap-2"><div class="h-[32%] rounded-t-lg bg-homy-green-700/70"></div><div class="h-[45%] rounded-t-lg bg-homy-green-700/70"></div><div class="h-[58%] rounded-t-lg bg-homy-green-700/70"></div><div class="h-[61%] rounded-t-lg bg-homy-green-700/70"></div><div class="h-[70%] rounded-t-lg bg-homy-green-700/70"></div><div class="h-[76%] rounded-t-lg bg-homy-green-700/70"></div><div class="h-[92%] rounded-t-lg bg-homy-gold-500"></div></div>
                </article>
                <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">أفضل القنوات</span><span class="lang-en">Top Channels</span></h2>
                    <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <div><div class="mb-1 flex justify-between"><span>Homy Search</span><span>41%</span></div><div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30"><div class="h-full w-[82%] rounded-full bg-homy-green-700 dark:bg-homy-gold-500"></div></div></div>
                        <div><div class="mb-1 flex justify-between"><span>Social Media</span><span>29%</span></div><div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30"><div class="h-full w-[63%] rounded-full bg-homy-green-700 dark:bg-homy-gold-500"></div></div></div>
                        <div><div class="mb-1 flex justify-between"><span>Campaigns</span><span>17%</span></div><div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30"><div class="h-full w-[48%] rounded-full bg-homy-green-700 dark:bg-homy-gold-500"></div></div></div>
                    </div>
                </article>
            </div>
        </section>
@endsection
