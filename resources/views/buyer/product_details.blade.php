@extends('buyer.layouts.master')

@section('content')
 
{{-- <body class="text-slate-800 dark:text-slate-100">
    <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"></div> --}}

    {{-- <aside id="sidebar" class="offcanvas-sidebar fixed top-0 right-0 z-50 h-full w-80 max-w-[88vw] overflow-y-auto custom-scrollbar border-s border-homy-gold-200/60 bg-white/95 p-6 shadow-2xl shadow-black/25 backdrop-blur-xl dark:border-homy-gold-600/40 dark:bg-[#12211B]/95">
        <div class="mb-8 flex items-center justify-between">
            <a href="index.html" class="flex items-center gap-3">
                <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-white grid place-items-center text-lg shadow-lg">HF</div>
                <p class="text-lg font-black text-homy-green-700 dark:text-homy-gold-500">Homy Food</p>
            </a>
            <button id="closeSidebar" class="h-10 w-10 rounded-xl border border-homy-gold-200 text-homy-green-700 hover:bg-homy-gold-50 dark:border-homy-gold-600/50 dark:text-homy-gold-400 dark:hover:bg-homy-green-700/40"><i class="fa-solid fa-xmark"></i></button>
        </div>
        <nav class="space-y-2">
            <a href="index.html" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/30"><i class="fa-solid fa-house"></i><span class="lang-ar">الرئيسية</span><span class="lang-en">Home</span></a>
            <a href="wishlist.html" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/30"><i class="fa-solid fa-heart"></i><span class="lang-ar">المفضلة</span><span class="lang-en">Wishlist</span></a>
            <a href="cart.html" class="flex items-center gap-3 rounded-2xl px-4 py-3 text-sm font-bold text-slate-600 hover:bg-homy-gold-50 dark:text-slate-300 dark:hover:bg-homy-green-700/30"><i class="fa-solid fa-bag-shopping"></i><span class="lang-ar">السلة</span><span class="lang-en">Cart</span></a>
        </nav>
    </aside> --}}

    {{-- <div class="relative z-10"> --}}
        {{-- <header class="sticky top-0 z-30 border-b border-homy-gold-100/80 bg-white/80 backdrop-blur-xl dark:border-homy-gold-600/25 dark:bg-[#0f1f18]/85">
            <div class="mx-auto flex w-full max-w-7xl items-center gap-3 px-4 py-3">
                <button id="menuToggle" class="h-11 w-11 shrink-0 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 shadow-sm hover:bg-homy-gold-50 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"><i class="fa-solid fa-bars"></i></button>
                <a href="index.html" class="flex items-center gap-3">
                    <div class="grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br from-homy-green-700 to-homy-green-500 text-base font-black text-white shadow-lg">HF</div>
                    <p class="text-base font-black text-homy-green-700 dark:text-homy-gold-400">Homy Food</p>
                </a>
                <div class="ms-auto flex items-center gap-2">
                    <button id="langToggle" class="inline-flex h-11 items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"><i class="fa-solid fa-language"></i><span class="lang-ar">EN</span><span class="lang-en">AR</span></button>
                    <button id="themeToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/40 dark:text-homy-gold-300"><i class="fa-solid fa-moon"></i></button>
                </div>
            </div>
        </header> --}}

        <main class="px-4 py-10">
            <section class="mx-auto grid w-full max-w-7xl gap-6 lg:grid-cols-[1.15fr_1fr]">
                <article class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-5 shadow-lg dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <div class="relative overflow-hidden rounded-[1.5rem]">
                        <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Makdous product" class="h-[420px] w-full object-cover">
                        <button data-action="toggle-favorite" aria-pressed="false" class="absolute end-4 top-4 h-11 w-11 rounded-full bg-white/90 text-homy-green-700 shadow"><i class="fa-solid fa-heart"></i></button>
                    </div>

                    <div class="mt-5">
                        <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">{{ $product->product_ar_name }}</span><span class="lang-en">{{ $product->product_en_name }}</span></h1>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">{{ $product->description }}</span><span class="lang-en">{{ $product->description }}</span></p>

                        <div class="mt-4 flex flex-wrap items-center gap-4">
                            <span class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900">58 SAR</span>
                            <span class="text-sm font-black text-homy-gold-600">4.8 ★</span>
                            <span class="text-xs font-bold text-slate-500 dark:text-slate-300"><span class="lang-ar">+320 تقييم</span><span class="lang-en">+320 Reviews</span></span>
                        </div>

                        <div class="mt-5 rating-group" data-rating="0">
                            <p class="mb-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قيّم المنتج</span><span class="lang-en">Rate Product</span></p>
                            <div class="flex items-center gap-1 text-2xl">
                                <span class="rating-star" data-value="1">★</span>
                                <span class="rating-star" data-value="2">★</span>
                                <span class="rating-star" data-value="3">★</span>
                                <span class="rating-star" data-value="4">★</span>
                                <span class="rating-star" data-value="5">★</span>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="cart.html" class="rounded-2xl bg-homy-green-700 px-5 py-3 text-sm font-black text-white transition hover:bg-homy-green-600"><span class="lang-ar">إضافة إلى السلة</span><span class="lang-en">Add To Cart</span></a>
                            <a href="checkout.html" class="rounded-2xl border-2 border-homy-gold-400 bg-white px-5 py-3 text-sm font-black text-homy-green-700 transition hover:bg-homy-gold-500 hover:text-homy-green-900 dark:bg-homy-gold-500 dark:text-homy-green-900"><span class="lang-ar">شراء الآن</span><span class="lang-en">Buy Now</span></a>
                            <a href="compare.html" class="rounded-2xl border border-homy-gold-300 px-5 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span class="lang-ar">مقارنة</span><span class="lang-en">Compare</span></a>
                        </div>
                    </div>
                </article>

                <aside class="space-y-5">
                    <article class="homy-card p-5">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تواصل مع صاحب المنتج</span><span class="lang-en">Contact Seller</span></h2>
                        <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">مطبخ بيت الشام - رد سريع خلال 15 دقيقة.</span><span class="lang-en">Beit Al Sham Kitchen - replies within 15 minutes.</span></p>
                        <div class="mt-4 grid gap-2 text-sm font-bold text-slate-600 dark:text-slate-300">
                            <a href="#" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center dark:border-homy-gold-600/35"><i class="fa-brands fa-whatsapp ms-1"></i>WhatsApp</a>
                            <a href="#" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center dark:border-homy-gold-600/35"><i class="fa-regular fa-envelope ms-1"></i>Email</a>
                        </div>
                    </article>

                    <article class="homy-card p-5">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تفاصيل إضافية</span><span class="lang-en">More Details</span></h2>
                        <ul class="mt-3 space-y-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                            <li><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">الحجم:</span><span class="lang-en">Size:</span></span> 750g</li>
                            <li><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">الصلاحية:</span><span class="lang-en">Expiry:</span></span> 9 <span class="lang-ar">أشهر</span><span class="lang-en">months</span></li>
                            <li><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">التوصيل:</span><span class="lang-en">Delivery:</span></span> <span class="lang-ar">24-48 ساعة</span><span class="lang-en">24-48h</span></li>
                        </ul>
                    </article>
                </aside>
            </section>

            <section class="mx-auto mt-8 w-full max-w-7xl rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">التعليقات والردود</span><span class="lang-en">Comments & Replies</span></h2>

                <form class="mt-4 rounded-2xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                    <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">أضف تعليقك</span><span class="lang-en">Add Your Comment</span></label>
                    <textarea rows="4" class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]"></textarea>
                    <button type="button" class="mt-3 rounded-xl bg-homy-green-700 px-4 py-2 text-sm font-black text-white"><span class="lang-ar">إرسال التعليق</span><span class="lang-en">Submit Comment</span></button>
                </form>

                <div class="mt-6 space-y-4">
                    <article class="rounded-2xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                        <div class="flex items-center justify-between gap-2">
                            <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">ريم أحمد</p>
                            <p class="text-xs font-bold text-slate-400">2 <span class="lang-ar">يوم</span><span class="lang-en">days</span></p>
                        </div>
                        <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">الطعم رائع جدًا، وهل يتوفر حجم أكبر؟</span><span class="lang-en">Amazing taste! Is there a larger size?</span></p>

                        <div class="mt-3 rounded-xl bg-homy-gold-50 p-3 dark:bg-homy-green-700/25">
                            <p class="text-xs font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">رد البائع</span><span class="lang-en">Seller Reply</span></p>
                            <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">نعم يتوفر 1.5 كغ وسيتم إضافته قريبًا ضمن الخيارات.</span><span class="lang-en">Yes, 1.5kg is available and will be added to options soon.</span></p>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                        <div class="flex items-center justify-between gap-2">
                            <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">Khaled N.</p>
                            <p class="text-xs font-bold text-slate-400">5 days</p>
                        </div>
                        <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">Packaging was excellent and delivery was quick.</p>

                        <div class="mt-3 rounded-xl bg-homy-gold-50 p-3 dark:bg-homy-green-700/25">
                            <p class="text-xs font-black text-homy-green-700 dark:text-homy-gold-400">Seller Reply</p>
                            <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300">Thank you, we are glad you enjoyed the experience.</p>
                        </div>
                    </article>
                </div>
            </section>
        </main>
    </div>

  
@endsection