@extends('buyer.layouts.master')

@section('content')


<div class="relative z-10">
  

    <main class="px-4 py-10">
        <section class="mx-auto w-full max-w-7xl">
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">مقارنة المنتجات</span>
                    <span class="lang-en">Compare Products</span>
                </h1>
                <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                    <span class="lang-ar">اختر منتجين وقارن بينهما لتتخذ قرارك بثقة.</span>
                    <span class="lang-en">Pick two products and compare them side by side.</span>
                </p>
            </div>

            <div class="grid gap-5 md:grid-cols-2">
                <div class="relative">
                    <button data-open-compare data-slot="1" id="compare-empty-1"
                        class="group h-72 w-full rounded-[2rem] border-2 border-dashed border-homy-gold-300 bg-white/80 p-6 text-center transition hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-[#12211B]/80 dark:hover:bg-homy-green-700/25">
                        <span
                            class="mx-auto grid h-16 w-16 place-items-center rounded-full border border-homy-gold-300 text-homy-gold-600"><i
                                class="fa-solid fa-plus text-xl"></i></span>
                        <p class="mt-3 text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">أضف المنتج الأول</span><span class="lang-en">Add First Product</span>
                        </p>
                    </button>

                    <div id="compare-filled-1"
                        class="relative hidden h-72 overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                        <img id="compare-img-1" src="" alt="" class="h-48 w-full object-cover">
                        <div class="p-4">
                            <p id="compare-name-1"
                                class="text-base font-black text-homy-green-700 dark:text-homy-gold-400"></p>
                            <div
                                class="mt-2 flex items-center justify-between text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span id="compare-price-1"></span>
                                <span id="compare-score-1"></span>
                            </div>
                        </div>
                        <button data-reset-compare data-slot="1"
                            class="absolute end-3 top-3 h-9 w-9 rounded-full bg-red-500 text-white"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>
                </div>

                <div class="relative">
                    <button data-open-compare data-slot="2" id="compare-empty-2"
                        class="group h-72 w-full rounded-[2rem] border-2 border-dashed border-homy-gold-300 bg-white/80 p-6 text-center transition hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-[#12211B]/80 dark:hover:bg-homy-green-700/25">
                        <span
                            class="mx-auto grid h-16 w-16 place-items-center rounded-full border border-homy-gold-300 text-homy-gold-600"><i
                                class="fa-solid fa-plus text-xl"></i></span>
                        <p class="mt-3 text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">أضف المنتج الثاني</span><span class="lang-en">Add Second Product</span>
                        </p>
                    </button>

                    <div id="compare-filled-2"
                        class="relative hidden h-72 overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white dark:border-homy-gold-600/35 dark:bg-[#12211B]">
                        <img id="compare-img-2" src="" alt="" class="h-48 w-full object-cover">
                        <div class="p-4">
                            <p id="compare-name-2"
                                class="text-base font-black text-homy-green-700 dark:text-homy-gold-400"></p>
                            <div
                                class="mt-2 flex items-center justify-between text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span id="compare-price-2"></span>
                                <span id="compare-score-2"></span>
                            </div>
                        </div>
                        <button data-reset-compare data-slot="2"
                            class="absolute end-3 top-3 h-9 w-9 rounded-full bg-red-500 text-white"><i
                                class="fa-solid fa-xmark"></i></button>
                    </div>
                </div>
            </div>

            <div id="compare-table"
                class="mt-8 hidden overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-white/90 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="overflow-x-auto custom-scrollbar">
                    <table class="min-w-full text-center">
                        <thead class="bg-homy-green-700 text-white">
                            <tr>
                                <th class="px-4 py-4 text-sm font-black"><span class="lang-ar">الخاصية</span><span
                                        class="lang-en">Spec</span></th>
                                <th id="table-title-1" class="px-4 py-4 text-sm font-black"></th>
                                <th id="table-title-2" class="px-4 py-4 text-sm font-black"></th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-semibold text-slate-600 dark:text-slate-300">
                            <tr class="border-b border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="px-4 py-4 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">السعر</span><span class="lang-en">Price</span></td>
                                <td id="table-price-1" class="px-4 py-4"></td>
                                <td id="table-price-2" class="px-4 py-4"></td>
                            </tr>
                            <tr class="border-b border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="px-4 py-4 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">التقييم</span><span class="lang-en">Rating</span></td>
                                <td id="table-rate-1" class="px-4 py-4"></td>
                                <td id="table-rate-2" class="px-4 py-4"></td>
                            </tr>
                            <tr class="border-b border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="px-4 py-4 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">تاريخ الإنتهاء</span><span class="lang-en">Expiry Date</span></td>
                                <td id="table-pack-1" class="px-4 py-4"></td>
                                <td id="table-pack-2" class="px-4 py-4"></td>
                            </tr>
                            <tr>
                                <td class="px-4 py-4 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الوصف</span><span class="lang-en">Description</span></td>
                                <td id="table-text-1" class="px-4 py-4"></td>
                                <td id="table-text-2" class="px-4 py-4"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</div>

<div id="comparePickModal" class="modal-root fixed inset-0 z-[90] bg-black/55 p-4 backdrop-blur-sm">
    <div
        class="modal-panel mx-auto mt-14 w-full max-w-3xl rounded-[2rem] border border-homy-gold-200 bg-white p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
        <div class="mb-5 flex items-center justify-between">
            <h2 class="text-xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">اختر
                    المنتج</span><span class="lang-en">Pick Product</span></h2>
            <button data-close="comparePickModal"
                class="h-9 w-9 rounded-full border border-homy-gold-200 text-homy-green-700 dark:border-homy-gold-600/40 dark:text-homy-gold-300"><i
                    class="fa-solid fa-xmark"></i></button>
        </div>
        <div class="grid gap-3 sm:grid-cols-2">
            @foreach($products as $product)
            <button data-compare-pick data-name="{{ $product->product_ar_name }}" data-price={{ $product->price }} data-rating="5 ★"
                data-pack="{{ $product->expiry_date }}" data-desc={{ $product->description }}
                data-img={{ $product->getFirstMediaUrl("product_images") }}
                class="flex items-center gap-3 rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-3 text-right dark:border-homy-gold-600/35 dark:bg-homy-green-700/20">
                <img src="{{ $product->getFirstMediaUrl("product_images") }}"
                    class="h-14 w-14 rounded-xl object-cover" alt="Product Image">
                <div>
                    <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">{{ $product->product_ar_name }}</p>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-300">{{ $product->price }}</p>
                </div>
            </button>
            @endforeach
        </div>
    </div>
</div>

@endsection