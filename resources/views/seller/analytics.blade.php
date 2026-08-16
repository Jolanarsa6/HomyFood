@extends('seller.layouts.master',['title'=> __('titles.shop_analytics')])

@section('content')
<section class="space-y-5">

    <div class="flex flex-wrap items-center justify-between gap-3 rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#14261f] dark:via-[#12211b] dark:to-[#173326]">
        <div class="flex items-center gap-3">
            <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">الإحصائيات والتقارير</span>
                <span class="lang-en">Analytics & Reports</span>
            </p>
        </div>
        
    </div>

    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">قيمة المخزون الإجمالية</span>
                <span class="lang-en">Total Inventory Value</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($totalProductValue) }} SYP</p>
            <p class="mt-1 text-xs font-bold text-emerald-600">
                <span class="lang-ar">{{ $totalProducts }} منتج متاح</span>
                <span class="lang-en">{{ $totalProducts }} active products</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">الطلبات في السلة</span>
                <span class="lang-en">Items in Cart</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ $cartStats->total_cart_items }}</p>
            <p class="mt-1 text-xs font-bold text-sky-600">
                <span class="lang-ar">من {{ $cartStats->unique_buyers }} مشتري</span>
                <span class="lang-en">From {{ $cartStats->unique_buyers }} buyers</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">متوسط قيمة السلة</span>
                <span class="lang-en">Average Cart Value</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($avgCartValue, 2) }} SYP</p>
            <p class="mt-1 text-xs font-bold text-homy-gold-600">
                <span class="lang-ar">تقديري للطلب</span>
                <span class="lang-en">Estimated demand</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">متوسط سعر المنتج</span>
                <span class="lang-en">Average Product Price</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($avgPrice, 2) }} SYP</p>
            <p class="mt-1 text-xs font-bold text-amber-600">
                <span class="lang-ar">جودة العرض</span>
                <span class="lang-en">Offer quality</span>
            </p>
        </article>
    </div>

    <div class="grid gap-5 xl:grid-cols-2">
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">منتجات مضافة - 7 أيام</span>
                <span class="lang-en">Products Added - 7 Days</span>
            </h2>
            <div class="mt-5 grid h-56 grid-cols-7 items-end gap-2">
                @foreach($trendData as $count)
                    @php $heightPercent = $maxCount > 0 ? max(5, ($count / $maxCount) * 100) : 5; @endphp
                    <div class="rounded-t-lg bg-homy-green-700/75 dark:bg-homy-gold-500" style="height: {{ $heightPercent }}%;"></div>
                @endforeach
            </div>
        </article>

        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">أكثر المنتجات طلباً</span>
                <span class="lang-en">Most Requested Products</span>
            </h2>
            <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                @forelse($topRequestedProducts as $product)
                    <div>
                        <div class="mb-1 flex justify-between">
                            <span>{{ $product->product_ar_name }}</span>
                            <span>{{ $product->percentage }}% ({{ $product->request_count }})</span>
                        </div>
                        <div class="h-2 rounded-full bg-homy-gold-100 dark:bg-homy-green-700/30">
                            <div class="h-full rounded-full bg-homy-green-700 dark:bg-homy-gold-500" style="width: {{ $product->percentage }}%;"></div>
                        </div>
                    </div>
                @empty
                    <p class="text-slate-400">
                        <span class="lang-ar">لا توجد منتجات في السلة بعد</span>
                        <span class="lang-en">No products in cart yet</span>
                    </p>
                @endforelse
            </div>
        </article>
    </div>

    <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
            <span class="lang-ar">أكثر الفئات شيوعاً لديك</span>
            <span class="lang-en">Your Top Categories</span>
        </h2>
        <div class="mt-4 overflow-x-auto custom-scrollbar">
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="text-slate-500 dark:text-slate-300">
                        <th class="py-2 text-right font-black">
                            <span class="lang-ar">الفئة</span>
                            <span class="lang-en">Category</span>
                        </th>
                        <th class="py-2 text-right font-black">
                            <span class="lang-ar">النسبة</span>
                            <span class="lang-en">Share</span>
                        </th>
                        <th class="py-2 text-right font-black">
                            <span class="lang-ar">المنتجات</span>
                            <span class="lang-en">Products</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                    @forelse($topCategories as $category)
                        <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                            <td class="py-3">{{ $category->name }}</td>
                            <td class="py-3">{{ $category->percentage }}%</td>
                            <td class="py-3">{{ $category->product_count }}</td>
                        </tr>
                    @empty
                        <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                            <td colspan="3" class="py-3 text-center text-slate-400">
                                <span class="lang-ar">لم تُضف أي فئة بعد</span>
                                <span class="lang-en">No categories added yet</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </article>

</section>

@endsection
