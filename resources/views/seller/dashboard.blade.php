@extends('seller.layouts.master',['title'=> __('titles.seller_dashboard')])

@section('content')
<section class="space-y-6">
    
    <article class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/45 p-6 dark:border-homy-gold-600/35 dark:from-[#14261f] dark:via-[#12211b] dark:to-[#173326]">
        <div class="flex flex-wrap items-start justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">مرحبًا، {{ $storeName }}</span>
                    <span class="lang-en">Welcome, {{ $storeName }}</span>
                </h1>
                <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    <span class="lang-ar">لديك {{ $totalProducts }} منتج في المتجر، و{{ $lowStockProducts }} منها يحتاج تحديث المخزون.</span>
                    <span class="lang-en">You have {{ $totalProducts }} products in store, and {{ $lowStockProducts }} items need stock update.</span>
                </p>
            </div>
            <a href="{{ route('seller.addProduct') }}" class="rounded-2xl bg-homy-green-700 px-5 py-3 text-sm font-black text-white hover:bg-homy-green-600">
                <span class="lang-ar">إضافة منتج جديد</span>
                <span class="lang-en">Add New Product</span>
            </a>
        </div>
        
        <div class="mt-5 grid gap-3 sm:grid-cols-4 text-center text-xs font-black">
            <div class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">متوسط سعر المنتج</span>
                <span class="lang-en">Avg Price</span>
                <p class="mt-1 text-lg">{{ number_format($avgPrice, 2) }} SYP</p>
            </div>
            <div class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">إجمالي المنتجات</span>
                <span class="lang-en">Total Products</span>
                <p class="mt-1 text-lg">{{ $totalProducts }}</p>
            </div>
            <div class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">التعليقات العامة</span>
                <span class="lang-en">Feedback</span>
                <p class="mt-1 text-lg">{{ $totalComments }}</p>
            </div>
            <div class="rounded-xl bg-white/90 p-3 text-homy-green-700 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <span class="lang-ar">منتجات منخفضة المخزون</span>
                <span class="lang-en">Low Stock</span>
                <p class="mt-1 text-lg">{{ $lowStockProducts }}</p>
            </div>
        </div>
    </article>

    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">إجمالي قيمة المنتجات</span>
                <span class="lang-en">Total Product Value</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                {{ number_format(Auth::user()->products()->sum('price')) }} SYP
            </p>
            <p class="mt-1 text-xs font-bold text-emerald-600">
                <span class="lang-ar">تقديري للعرض</span>
                <span class="lang-en">Estimated supply</span>
            </p>
        </article>
        
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">منتجات قيد النشر</span>
                <span class="lang-en">Active Products</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ $totalProducts }}</p>
            <p class="mt-1 text-xs font-bold text-homy-gold-600">
                <span class="lang-ar">جميعها متاحة للبيع</span>
                <span class="lang-en">All available for sale</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">أعلى سعر منتج</span>
                <span class="lang-en">Max Product Price</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                {{ number_format(Auth::user()->products()->max('price') ?? 0) }} SYP
            </p>
            <p class="mt-1 text-xs font-bold text-sky-600">
                <span class="lang-ar">أغلى منتج لديك</span>
                <span class="lang-en">Your premium item</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">منتجات تحتاج تنبيه</span>
                <span class="lang-en">Need Attention</span>
            </p>
            <p class="mt-2 text-2xl font-black text-red-600">{{ $lowStockProducts }}</p>
            <a href="{{ route('seller.addProduct') }}" class="mt-1 inline-block text-xs font-black text-red-600 underline">
                <span class="lang-ar">تحديث المخزون الآن</span>
                <span class="lang-en">Update Stock Now</span>
            </a>
        </article>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">نشاط إضافة المنتجات - 7 أيام</span>
                <span class="lang-en">Product Addition Activity - 7 Days</span>
            </h2>
            <div class="mt-5 grid h-56 grid-cols-7 items-end gap-2">
                @foreach($trendData as $count)
                    @php $heightPercent = $maxCount > 0 ? max(5, ($count / $maxCount) * 100) : 5; @endphp
                    <div class="rounded-t-lg bg-homy-green-700/70 dark:bg-homy-gold-500" style="height: {{ $heightPercent }}%;"></div>
                @endforeach
            </div>
        </article>

        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="mb-4 text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">أفضل المنتجات</span>
                <span class="lang-en">Top Products</span>
            </h2>
            <div class="space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                @forelse($topProducts as $product)
                    <div>
                        <div class="mb-1 flex items-center justify-between">
                            <span>{{ $product->product_ar_name }}</span>
                            <span>{{ $product->percentage }}%</span>
                        </div>
                        <div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30">
                            <div class="h-full rounded-full bg-homy-green-700 dark:bg-homy-gold-500" style="width: {{ $product->percentage }}%;"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-slate-400">
                        <span class="lang-ar">لا توجد منتجات بعد</span>
                        <span class="lang-en">No products yet</span>
                    </p>
                @endforelse
            </div>

            @if($latestComment)
            <div class="mt-5 rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                <p class="text-xs font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">آخر تعليق عميل</span>
                    <span class="lang-en">Latest Customer Comment</span>
                </p>
                <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    {{ $latestComment->buyer_name }}: "{{ $latestComment->buyer_comment }}"
                </p>
                <a href="{{ route("seller.showComments") }}" class="mt-2 inline-block text-xs font-black text-homy-gold-600 underline">
                    <span class="lang-ar">الرد من هنا</span>
                    <span class="lang-en">Reply Here</span>
                </a>
            </div>
            @endif
        </article>
    </div>

    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">أحدث المنتجات المضافة</span>
                    <span class="lang-en">Latest Added Products</span>
                </h2>
                <a href="{{ route('seller.showProducts') }}" class="text-xs font-black text-homy-gold-600 underline">
                    <span class="lang-ar">عرض الكل</span>
                    <span class="lang-en">View All</span>
                </a>
            </div>
            <div class="overflow-x-auto custom-scrollbar">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-slate-500 dark:text-slate-300">
                            <th class="px-2 py-2 text-right font-black">
                                <span class="lang-ar">اسم المنتج</span>
                                <span class="lang-en">Product Name</span>
                            </th>
                            <th class="px-2 py-2 text-right font-black">
                                <span class="lang-ar">السعر</span>
                                <span class="lang-en">Price</span>
                            </th>
                            <th class="px-2 py-2 text-right font-black">
                                <span class="lang-ar">المخزون</span>
                                <span class="lang-en">Stock</span>
                            </th>
                            {{-- <th class="px-2 py-2 text-right font-black">
                                <span class="lang-ar">الإجراء</span>
                                <span class="lang-en">Action</span>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                        @forelse($latestProducts as $product)
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="px-2 py-3">{{ $product->product_ar_name }}</td>
                                <td class="px-2 py-3">{{ number_format($product->price) }} SYP</td>
                                <td class="px-2 py-3">
                                    @if($product->available_quantity <= 5)
                                        <span class="rounded-full bg-red-100 px-2 py-1 text-xs font-black text-red-700">
                                            <span class="lang-ar">منخفض</span>
                                            <span class="lang-en">Low</span>
                                        </span>
                                    @else
                                        {{ number_format($product->available_quantity) }}
                                    @endif
                                </td>
                                {{-- <td class="px-2 py-3">
                                    <a href="{{ route('seller.addProduct') }}" class="text-xs font-black text-homy-gold-600 underline">
                                        <span class="lang-ar">تعديل</span>
                                        <span class="lang-en">Edit</span>
                                    </a>
                                </td> --}}
                            </tr>
                        @empty
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td colspan="4" class="py-3 text-center text-slate-400">
                                    <span class="lang-ar">لم تضف أي منتج بعد</span>
                                    <span class="lang-en">No products added yet</span>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </article>

        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">نظرة سريعة</span>
                <span class="lang-en">Quick Overview</span>
            </h2>
            <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                    <span><span class="lang-ar">إجمالي المنتجات</span><span class="lang-en">Total Products</span></span>
                    <span class="font-black text-homy-green-700">{{ $totalProducts }}</span>
                </div>
                <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                    <span><span class="lang-ar">متوسط السعر</span><span class="lang-en">Avg Price</span></span>
                    <span class="font-black text-homy-green-700">{{ number_format($avgPrice) }} SYP</span>
                </div>
                <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                    <span><span class="lang-ar">أقل من 5 قطع</span><span class="lang-en">Low Stock Alert</span></span>
                    <span class="font-black text-red-600">{{ $lowStockProducts }}</span>
                </div>
            </div>
        </article>
    </div>
</section>

@endsection
