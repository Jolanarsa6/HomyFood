@extends('buyer.layouts.master',['title'=> __('titles.special_offer')])

@section('content')


    {{-- <div class="relative z-10">
        <div class="bg-homy-green-700 px-4 py-2 text-center text-xs font-bold text-white">
            <span class="lang-ar">عروض يومية متجددة - وفر حتى 35%</span>
            <span class="lang-en">Daily Fresh Deals - Save Up To 35%</span>
        </div> --}}

        <main class="px-4 py-10">
            <section class="mx-auto w-full max-w-7xl">
                <div class="mb-8 text-center">
                    <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                        <span class="lang-ar">العروض المميزة</span>
                        <span class="lang-en">Special Offers</span>
                    </h1>
                    <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                        <span class="lang-ar">خصومات يومية مع باقات عائلية موسمية</span>
                        <span class="lang-en">Daily discounts and seasonal family bundles</span>
                    </p>
                </div>

                <div class="grid gap-5 lg:grid-cols-3">

                     <div class="grid gap-4 sm:grid-cols-2">
                        @foreach ($products->take(2) as $product)
                            <article
                                class="hero-badge rounded-3xl border border-homy-gold-200/80 bg-white/90 p-4 shadow-xl shadow-homy-gold-100/70 dark:border-homy-gold-600/35 dark:bg-[#153023]/90">
                                <img src="{{ $product->getFirstMediaUrl('product_images') }}"
                                    alt="{{ $product->ar_name }}" class="h-36 w-full rounded-2xl object-cover">
                                <h3 class="mt-3 font-black text-homy-green-700 dark:text-homy-gold-400">
                                    <span class="lang-ar">{{ $product->product_ar_name }}</span>
                                    <span class="lang-en">{{ $product->product_en_name }}</span>
                                </h3>
                                <p class="mt-1 text-sm text-slate-500 dark:text-slate-300">{{ $product->price }} <span
                                        class="lang-ar">ليرة</span><span class="lang-en">SR.P</span></p>
                            </article>
                        @endforeach


                        <article
                            class="rounded-3xl border border-homy-gold-200/80 bg-homy-green-700 p-4 text-white shadow-xl sm:col-span-2 dark:border-homy-gold-600/35">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-wider text-homy-gold-100">
                                        <span class="lang-ar">منتج الأسبوع</span>
                                        <span class="lang-en">Product Of The Week</span>
                                    </p>
                                    <h3 class="mt-1 text-lg font-black">
                                        <span class="lang-ar">سمن بلدي نقي 100%</span>
                                        <span class="lang-en">Pure Traditional Ghee 100%</span>
                                    </h3>
                                </div>
                                <a href="{{ route('buyer.show_product_details', 3) }}"
                                    class="rounded-xl bg-homy-gold-500 px-4 py-2 text-xs font-black text-homy-green-900 transition hover:bg-homy-gold-400">
                                    <span class="lang-ar">عرض التفاصيل</span>
                                    <span class="lang-en">View Details</span>
                                </a>
                            </div>
                        </article>
                    </div>
                    {{-- <article class="homy-card overflow-hidden p-4">
                        <div class="relative">
                            <img src="" alt="Offer" class="h-52 w-full rounded-2xl object-cover">
                            <span class="absolute start-2 top-2 rounded-full bg-red-500 px-3 py-1 text-xs font-black text-white">-25%</span>
                        </div>
                        <h2 class="mt-4 text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                            <span class="lang-ar">عرض المكدوس الذهبي</span>
                            <span class="lang-en">Golden Makdous Deal</span>
                        </h2>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">88 SYP بدل 117 SYP</p>
                        <div class="mt-4 flex gap-2">
                            <a href="product-details.html" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:text-homy-gold-300"><span class="lang-ar">التفاصيل</span><span class="lang-en">Details</span></a>
                            <a href="checkout.html" class="rounded-xl bg-homy-green-700 px-3 py-2 text-xs font-black text-white"><span class="lang-ar">شراء فوري</span><span class="lang-en">Buy Now</span></a>
                        </div>
                    </article> --}}

                    {{-- <article class="homy-card overflow-hidden p-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1590779033100-9f60705a013d?auto=format&fit=crop&w=1000&q=80" alt="Offer" class="h-52 w-full rounded-2xl object-cover">
                            <span class="absolute start-2 top-2 rounded-full bg-red-500 px-3 py-1 text-xs font-black text-white">-30%</span>
                        </div>
                        <h2 class="mt-4 text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                            <span class="lang-ar">باقـة المربيات الثلاثية</span>
                            <span class="lang-en">Triple Jam Bundle</span>
                        </h2>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">72 SYP بدل 103 SYP</p>
                        <div class="mt-4 flex gap-2">
                            <a href="product-details.html" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:text-homy-gold-300"><span class="lang-ar">التفاصيل</span><span class="lang-en">Details</span></a>
                            <a href="checkout.html" class="rounded-xl bg-homy-green-700 px-3 py-2 text-xs font-black text-white"><span class="lang-ar">شراء فوري</span><span class="lang-en">Buy Now</span></a>
                        </div>
                    </article>

                    <article class="homy-card overflow-hidden p-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1617093727343-374698b1b08d?auto=format&fit=crop&w=1000&q=80" alt="Offer" class="h-52 w-full rounded-2xl object-cover">
                            <span class="absolute start-2 top-2 rounded-full bg-red-500 px-3 py-1 text-xs font-black text-white">-18%</span>
                        </div>
                        <h2 class="mt-4 text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                            <span class="lang-ar">عرض السمن البلدي</span>
                            <span class="lang-en">Traditional Ghee Offer</span>
                        </h2>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">55 SYP بدل 67 SYP</p>
                        <div class="mt-4 flex gap-2">
                            <a href="product-details.html" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:text-homy-gold-300"><span class="lang-ar">التفاصيل</span><span class="lang-en">Details</span></a>
                            <a href="checkout.html" class="rounded-xl bg-homy-green-700 px-3 py-2 text-xs font-black text-white"><span class="lang-ar">شراء فوري</span><span class="lang-en">Buy Now</span></a>
                        </div>
                    </article> --}}
                </div>

                <section class="mt-12 rounded-[2rem] border border-homy-gold-200 bg-white/85 p-6 dark:border-homy-gold-600/30 dark:bg-[#12211B]/85">
                    <div class="grid gap-4 lg:grid-cols-2">
                        <div class="rounded-2xl bg-homy-green-700 p-5 text-white">
                            <p class="text-xs font-bold uppercase text-homy-gold-100">
                                <span class="lang-ar">عرض موسمي</span>
                                <span class="lang-en">Seasonal Offer</span>
                            </p>
                            <h3 class="mt-2 text-2xl font-black">
                                <span class="lang-ar">صندوق الشتاء الدافئ</span>
                                <span class="lang-en">Warm Winter Box</span>
                            </h3>
                            <p class="mt-2 text-sm text-white/80">
                                <span class="lang-ar">زعتر، سمن، مخلل، مربى، وشاي أعشاب منزلي.</span>
                                <span class="lang-en">Zaatar, ghee, pickles, jam and homemade herbal tea.</span>
                            </p>
                            <a href="#" class="mt-4 inline-block rounded-xl bg-homy-gold-500 px-4 py-2 text-xs font-black text-homy-green-900">
                                <span class="lang-ar">اشتري الصندوق</span>
                                <span class="lang-en">Buy The Box</span>
                            </a>
                        </div>
                        <div class="rounded-2xl border border-dashed border-homy-gold-300 p-5 dark:border-homy-gold-600/40">
                            <h3 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">برنامج الولاء</span>
                                <span class="lang-en">Loyalty Program</span>
                            </h3>
                            <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span class="lang-ar">كل 5 طلبات تحصل على قسيمة خصم 20% تلقائيًا.</span>
                                <span class="lang-en">Every 5 orders unlocks an automatic 20% discount voucher.</span>
                            </p>
                            <div class="mt-4 flex flex-wrap gap-2">
                                <span class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900">Fast Delivery</span>
                                <span class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900">Gift Ready</span>
                                <span class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900">Quality Checked</span>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </main>
    {{-- </div> --}}

    @endsection
