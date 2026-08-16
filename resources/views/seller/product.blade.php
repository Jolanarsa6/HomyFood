@extends('seller.layouts.master',['title'=> __('titles.show_products')])

@section('content')
    <section class="space-y-5">
        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">منتجات
                        المتجر</span><span class="lang-en">Store Products</span></h1>
                <div class="flex flex-wrap gap-2 text-xs font-black">
                    <span
                        class="rounded-full bg-homy-gold-100 px-3 py-1 text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900"><span
                            class="lang-ar">منشور: {{ count($products) }}</span><span class="lang-en">Published:
                            24</span></span>
                    {{-- <span class="rounded-full bg-amber-100 px-3 py-1 text-amber-700"><span class="lang-ar">مسودة:
                            6</span><span class="lang-en">Drafts: 6</span></span> --}}
                    <span class="rounded-full bg-red-100 px-3 py-1 text-red-700"><span class="lang-ar">منخفض
                            المخزون: {{ $lowStockProducts }}</span><span class="lang-en">Low Stock: 3</span></span>
                </div>
            </div>

            <div class="mt-4 grid gap-3 sm:grid-cols-3">
                {{-- <input type="search" placeholder=" ابحث بالاسم أو Brand "
                    class="rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none dark:border-homy-gold-600/35 dark:bg-[#173326]"> --}}



                <div class="mx-auto block max-w-7xl px-4 pb-3">
                    <label class="relative block">
                        <form action="{{ route('seller.search') }}" method="GET">
                            <input type="search" placeholder=" ابحث بالاسم أو Brand " name="search"
                                value="{{ request()->search }}"
                                class="w-full rounded-2xl border border-homy-gold-200/80 bg-white py-3 ps-12 pe-4 text-sm font-semibold text-slate-700 outline-none ring-homy-gold-100 transition placeholder:font-medium placeholder:text-slate-400 focus:border-homy-gold-500 focus:ring-4 dark:border-homy-gold-600/35 dark:bg-[#163126] dark:text-slate-100 dark:placeholder:text-slate-400">
                            <button type="submit"></button>
                        </form>
                    </label>
                </div>




                <select
                    class="rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    <option><span class="lang-ar">كل التصنيفات</span>
                        {{-- <span class="lang-en">All Categories</span> --}}
                    </option>
                    @foreach ($categories as $category)
                        <option>{{ $category->name }}</option>
                    @endforeach
                </select>
                {{-- <select
                    class="rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                    <option>
                        <span class="lang-ar">كل الحالات</span>
                        <span class="lang-en">All Status</span>
                    </option>
                    <option>Published</option>
                    <option>Draft</option>
                    <option>Out of stock</option>
                </select> --}}
            </div>
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <div class="overflow-x-auto custom-scrollbar">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-slate-500 dark:text-slate-300">
                            <th class="py-3 text-right font-black"><span class="lang-ar">المنتج</span><span
                                    class="lang-en">Product</span></th>
                            <th class="py-3 text-right font-black"><span class="lang-ar">العلامة التجارية</span><span
                                    class="lang-en">Brand</span></th>
                            <th class="py-3 text-right font-black"><span class="lang-ar">السعر</span><span
                                    class="lang-en">Price</span></th>
                            <th class="py-3 text-right font-black"><span class="lang-ar">المخزون</span><span
                                    class="lang-en">Stock</span></th>
                            <th class="py-3 text-right font-black"><span class="lang-ar">التقييم</span><span
                                    class="lang-en">Rating</span></th>
                            <th class="py-3 text-right font-black"><span class="lang-ar">السعر قبل الخصم</span><span
                                    class="lang-en">Original Price</span></th>
                            {{-- <th class="py-3 text-right font-black"><span class="lang-ar">إجراء</span><span
                                    class="lang-en">Action</span></th> --}}
                        </tr>
                    </thead>
                    <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                        @foreach ($products as $product)
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="py-3">
                                    <div class="flex items-center gap-2"><img
                                            src="{{ $product->getFirstMediaUrl('product_images') }}"
                                            class="h-10 w-10 rounded-lg object-cover" alt="">
                                        <span class="lang-ar">{{ $product->product_ar_name }}</span><span
                                            class="lang-en">{{ $product->product_en_name }}</span>
                                    </div>
                                </td>
                                <td class="py-3">{{ $product->brand }}</td>
                                <td class="py-3">{{ $product->price }} SYP</td>
                                <td class="py-3">{{ $product->available_quantity }}</td>
                                <td class="py-3">4.9</td>
                                <td class="py-3"><span
                                        class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-black text-emerald-700">{{ $product->discount_price }}</span>
                                </td>
                                {{-- <td class="py-3"><a href="add-product.html"
                                        class="text-xs font-black text-homy-gold-600 underline"><span
                                            class="lang-ar">تعديل</span><span class="lang-en">Edit</span></a></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </article>
    </section>
@endsection
