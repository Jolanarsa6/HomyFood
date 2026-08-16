@extends('buyer.layouts.master',['title'=> __('titles.about_us')])

@section('content')
    <div class="relative z-10">
        {{-- <div class="bg-homy-green-700 px-4 py-2 text-center text-xs font-bold text-white">
            <span class="lang-ar">نؤمن أن الطعام المنزلي رسالة دفء قبل أن يكون منتجًا</span>
            <span class="lang-en">We believe homemade food is warmth before it is a product</span>
        </div> --}}
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">من نحن</span>
                <span class="lang-en">About Homy Food</span>
            </h1>
            <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                <span class="lang-ar">نؤمن أن الطعام المنزلي رسالة دفء قبل أن يكون منتجًا</span>
                <span class="lang-en">We believe homemade food is warmth before it is a product</span>
            </p>
        </div>

        <main class="px-4 py-10">
            <section class="mx-auto w-full max-w-7xl">
                <div class="grid gap-6 lg:grid-cols-2 lg:items-center">
                    <div>

                        <p class="mt-4 text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300">
                            <span class="lang-ar">Homy Food منصة تجمع بين الذوق المحلي الأصيل والتجربة الرقمية الحديثة.
                                مهمتنا أن نقدم منتجات منزلية موثوقة للمغتربين وكل من يبحث عن طعم البيت، مع تصميم واجهات
                                راقية، بحث سريع، ومقارنة سهلة تساعد المستخدم على اتخاذ القرار بثقة.</span>
                            <span class="lang-en">Homy Food bridges authentic local taste with modern digital experience.
                                Our mission is to deliver trusted homemade products to expats and anyone seeking the comfort
                                of home, with elegant interfaces, fast search and smart comparison flow.</span>
                        </p>
                        <div class="mt-6 grid gap-3 sm:grid-cols-3">
                            <div
                                class="rounded-2xl border border-homy-gold-200 bg-white/85 p-4 text-center dark:border-homy-gold-600/35 dark:bg-[#12211B]/80">
                                <p class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">+{{ $cartStats->total_cart_items }}</p>
                                <p class="text-xs font-bold text-slate-500 dark:text-slate-300"><span class="lang-ar">طلب
                                        شهري</span><span class="lang-en">Monthly Orders</span></p>
                            </div>
                            <div
                                class="rounded-2xl border border-homy-gold-200 bg-white/85 p-4 text-center dark:border-homy-gold-600/35 dark:bg-[#12211B]/80">
                                <p class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">+{{ count($sellers) }}</p>
                                <p class="text-xs font-bold text-slate-500 dark:text-slate-300"><span class="lang-ar">بائع
                                        موثوق</span><span class="lang-en">Trusted Sellers</span></p>
                            </div>
                            <div
                                class="rounded-2xl border border-homy-gold-200 bg-white/85 p-4 text-center dark:border-homy-gold-600/35 dark:bg-[#12211B]/80">
                                <p class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">4.9</p>
                                <p class="text-xs font-bold text-slate-500 dark:text-slate-300"><span class="lang-ar">متوسط
                                        التقييم</span><span class="lang-en">Average Rating</span></p>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/about_us.png') }}" alt="Homy food story"
                        class="h-full max-h-[440px] w-full rounded-[2rem] object-cover border border-homy-gold-200 dark:border-homy-gold-600/35">
                </div>
            </section>

            <section
                class="mx-auto mt-10 w-full max-w-7xl rounded-[2rem] border border-homy-gold-200 bg-white/85 p-6 dark:border-homy-gold-600/30 dark:bg-[#12211B]/85">
                <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">قيمنا الأساسية</span>
                    <span class="lang-en">Our Core Values</span>
                </h2>
                <div class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <article
                        class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-4 dark:border-homy-gold-600/35 dark:bg-homy-green-700/20">
                        <i class="fa-solid fa-shield-heart text-homy-gold-600"></i>
                        <h3 class="mt-2 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الثقة</span><span class="lang-en">Trust</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">تحقق
                                من جودة البائع والمنتج قبل العرض.</span><span class="lang-en">Quality verification before
                                listing.</span></p>
                    </article>
                    <article
                        class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-4 dark:border-homy-gold-600/35 dark:bg-homy-green-700/20">
                        <i class="fa-solid fa-people-group text-homy-gold-600"></i>
                        <h3 class="mt-2 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الانتماء</span><span class="lang-en">Belonging</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">نجعل
                                المستخدم يشعر أنه بين أهله.</span><span class="lang-en">Make users feel at home.</span></p>
                    </article>
                    <article
                        class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-4 dark:border-homy-gold-600/35 dark:bg-homy-green-700/20">
                        <i class="fa-solid fa-bolt text-homy-gold-600"></i>
                        <h3 class="mt-2 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">السرعة</span><span class="lang-en">Speed</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">تصفح
                                سريع وتجربة شراء مختصرة.</span><span class="lang-en">Fast browsing and checkout flow.</span>
                        </p>
                    </article>
                    <article
                        class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-4 dark:border-homy-gold-600/35 dark:bg-homy-green-700/20">
                        <i class="fa-solid fa-star text-homy-gold-600"></i>
                        <h3 class="mt-2 font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">التميّز</span><span class="lang-en">Excellence</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">تصميم
                                ينافس المنصات العالمية.</span><span class="lang-en">Design quality that rivals global
                                marketplaces.</span></p>
                    </article>
                </div>
            </section>
        </main>
    </div>
@endsection
