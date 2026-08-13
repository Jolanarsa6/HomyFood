@extends('admin.layouts.master')

@section('content')

<section class="space-y-6">
    {{-- رأس الصفحة --}}
    <article class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
        <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
            <span class="lang-ar">لوحة الإحصائيات الشاملة</span>
            <span class="lang-en">Global Analytics Board</span>
        </h1>
        <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
            <span class="lang-ar">متابعة نمو المنصة، تفاعل المستخدمين، المنتجات، ونشاط السلة لحظيًا.</span>
            <span class="lang-en">Track platform growth, user engagement, products, and cart activity in real time.</span>
        </p>
    </article>

    {{-- بطاقات مؤشرات الأداء (KPI) --}}
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">إجمالي المستخدمين</span>
                <span class="lang-en">Total Users</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($totalUsers) }}</p>
            <p class="mt-1 text-xs font-bold text-emerald-600">
                <span class="lang-ar">جميع الزوار المسجلين</span>
                <span class="lang-en">All registered visitors</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">البائعون النشطون</span>
                <span class="lang-en">Active Sellers</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ $activeSellers }}</p>
            <p class="mt-1 text-xs font-bold text-sky-600">
                <span class="lang-ar">حسابات موافقة</span>
                <span class="lang-en">Approved accounts</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">المنتجات المتاحة</span>
                <span class="lang-en">Available Products</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($totalProducts) }}</p>
            <p class="mt-1 text-xs font-bold text-homy-gold-600">
                <span class="lang-ar">من جميع الفئات</span>
                <span class="lang-en">Across all categories</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">متوسط السلة</span>
                <span class="lang-en">Avg Basket</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($avgBasket, 2) }} SAR</p>
            <p class="mt-1 text-xs font-bold text-amber-600">
                <span class="lang-ar">إجمالي {{ $totalCartItems }} عنصر</span>
                <span class="lang-en">Total {{ $totalCartItems }} items</span>
            </p>
        </article>
    </div>

    {{-- المخطط والتصنيفات --}}
    <div class="grid gap-6 xl:grid-cols-2">
        {{-- المخطط الشريطي (آخر 7 أيام) --}}
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">المنتجات المضافة - 7 أيام</span>
                <span class="lang-en">Products Added - 7 Days</span>
            </h2>
            <div class="mt-5 grid h-56 grid-cols-7 items-end gap-2">
                @foreach($trendData as $count)
                    @php
                        // حساب الارتفاع كنسبة مئوية من الحد الأقصى (مع ضمان أقل قيمة 5% للرؤية)
                        $heightPercent = $maxCount > 0 ? max(5, ($count / $maxCount) * 100) : 5;
                    @endphp
                    <div class="rounded-t-lg bg-homy-green-700/70 dark:bg-homy-gold-500" style="height: {{ $heightPercent }}%;"></div>
                @endforeach
            </div>
        </article>

        {{-- أفضل الفئات (بدلاً من أفضل القنوات) --}}
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">أكثر الفئات منتجات</span>
                <span class="lang-en">Top Categories</span>
            </h2>
            <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                @forelse($topCategories as $category)
                    <div>
                        <div class="mb-1 flex justify-between">
                            <span>{{ $category->name }}</span>
                            <span>{{ $category->percentage }}%</span>
                        </div>
                        <div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30">
                            <div class="h-full rounded-full bg-homy-green-700 dark:bg-homy-gold-500" style="width: {{ $category->percentage }}%;"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-slate-400">
                        <span class="lang-ar">لا توجد فئات بعد</span>
                        <span class="lang-en">No categories yet</span>
                    </p>
                @endforelse
            </div>
        </article>
    </div>
</section>

@endsection

