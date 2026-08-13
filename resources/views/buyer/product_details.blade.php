@extends('buyer.layouts.master')

@section('content')
    <main class="px-4 py-10">
        <section class="mx-auto grid w-full max-w-7xl gap-6 lg:grid-cols-[1.15fr_1fr]">
            <article
                class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-5 shadow-lg dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="relative overflow-hidden rounded-[1.5rem]">
                    <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Makdous product"
                        class="h-[420px] w-full object-cover">
                    <a href="{{ route('buyer.addToWishlist', $product->id) }}"><button data-action="toggle-favorite"
                            aria-pressed="false"
                            class="absolute end-4 top-4 h-11 w-11 rounded-full bg-white/90 text-homy-green-700 shadow"><i
                                class="fa-solid fa-heart"></i></button></a>
                </div>

                <div class="mt-5">
                    <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">{{ $product->product_ar_name }}</span><span
                            class="lang-en">{{ $product->product_en_name }}</span></h1>
                    <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300"><span
                            class="lang-ar">{{ $product->description }}</span><span
                            class="lang-en">{{ $product->description }}</span></p>

                    <div class="mt-4 flex flex-wrap items-center gap-4">
                        <span
                            class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900">{{ $product->price }}
                            SAR</span>
                        <span class="text-sm font-black text-homy-gold-600">4.9 ★</span>
                        {{-- <span class="text-xs font-bold text-slate-500 dark:text-slate-300"><span class="lang-ar">+320 تقييم</span><span class="lang-en">+320 Reviews</span></span> --}}
                    </div>

                    <div class="mt-5 rating-group" data-rating="0">
                        <p class="mb-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">قيّم المنتج</span><span class="lang-en">Rate Product</span></p>
                        <div class="flex items-center gap-1 text-2xl">
                            <span class="rating-star" data-value="1">★</span>
                            <span class="rating-star" data-value="2">★</span>
                            <span class="rating-star" data-value="3">★</span>
                            <span class="rating-star" data-value="4">★</span>
                            <span class="rating-star" data-value="5">★</span>
                        </div>
                    </div>

                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('buyer.addToCart', $product->id) }}"
                            class="rounded-2xl bg-homy-green-700 px-5 py-3 text-sm font-black text-white transition hover:bg-homy-green-600"><span
                                class="lang-ar">إضافة إلى السلة</span><span class="lang-en">Add To Cart</span></a>
                        <a href="{{ route('buyer.checkout', $product->id) }}"
                            class="rounded-2xl border-2 border-homy-gold-400 bg-white px-5 py-3 text-sm font-black text-homy-green-700 transition hover:bg-homy-gold-500 hover:text-homy-green-900 dark:bg-homy-gold-500 dark:text-homy-green-900"><span
                                class="lang-ar">شراء الآن</span><span class="lang-en">Buy Now</span></a>
                        <a href="{{ route('buyer.compare') }}"
                            class="rounded-2xl border border-homy-gold-300 px-5 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                class="lang-ar">مقارنة</span><span class="lang-en">Compare</span></a>
                    </div>
                </div>
            </article>

            <aside class="space-y-5">
                <article class="homy-card p-5">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تواصل
                            مع صاحب المنتج</span><span class="lang-en">Contact Seller</span></h2>
                    <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300"><span
                            class="lang-ar">{{ $product->brand }} - رد سريع خلال 15 دقيقة.</span><span
                            class="lang-en">{{ $product->brand }} - replies within 15 minutes.</span></p>
                    <div class="mt-4 grid gap-2 text-sm font-bold text-slate-600 dark:text-slate-300">
                        <a href="#"
                            class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center dark:border-homy-gold-600/35"><i
                                class="fa-brands fa-whatsapp ms-1"></i>WhatsApp</a>
                        <a href="#"
                            class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center dark:border-homy-gold-600/35"><i
                                class="fa-regular fa-envelope ms-1"></i>Email</a>
                    </div>
                </article>

                <article class="homy-card p-5">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تفاصيل
                            إضافية</span><span class="lang-en">More Details</span></h2>
                    <ul class="mt-3 space-y-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <li><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">الحد
                                    الأدنى للطلب:</span><span class="lang-en">Minimum Order:</span></span>
                            {{ $product->minimum_order }} kg</li>
                        <li><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">الصلاحية:</span><span class="lang-en">Expiry:</span></span>
                            {{ $product->shelf_life }} <span class="lang-ar">يوم</span><span class="lang-en">day</span>
                        </li>
                        <li><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">التوصيل:</span><span class="lang-en">Delivery:</span></span> <span
                                class="lang-ar">{{ $product->hours }} ساعة</span><span
                                class="lang-en">{{ $product->hours }}h</span></li>
                    </ul>
                </article>
            </aside>
        </section>

        <section
            class="mx-auto mt-8 w-full max-w-7xl rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">التعليقات
                    والردود</span><span class="lang-en">Comments & Replies</span></h2>

            <form method="POST" action="{{ route('buyer.comment.store') }}"
                class="mt-4 rounded-2xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="buyer_name" value="{{ Auth::user()->full_name }}">
                <input type="hidden" name="comment_date" value="{{ now() }}">
                <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                        class="lang-ar">أضف تعليقك</span><span class="lang-en">Add Your Comment</span></label>
                <textarea rows="4"
                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]"
                    name="buyer_comment"></textarea>
                <button type="submit"
                    class="mt-3 rounded-xl bg-homy-green-700 px-4 py-2 text-sm font-black text-white"><span
                        class="lang-ar">نشر التعليق</span><span class="lang-en">Submit Comment</span></button>
            </form>

            <div class="mt-6 space-y-4">
                @foreach ($comments as $comment)
                    @if ($product->id == $comment->product_id)
                        <article class="rounded-2xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                            <div class="flex items-center justify-between gap-2">
                                <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">
                                    {{ $comment->buyer_name }}</p>
                                <p class="text-xs font-bold text-slate-400">{{ $comment->comment_date }}</p>
                            </div>
                            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span
                                    class="lang-ar">{{ $comment->buyer_comment }}</span><span class="lang-en">Amazing
                                    taste! Is there a larger size?</span></p>

                            <div class="mt-3 rounded-xl bg-homy-gold-50 p-3 dark:bg-homy-green-700/25">
                                <p class="text-xs font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">رد البائع : {{ $product->brand }}</span><span
                                        class="lang-en">Seller Reply</span></p>
                                <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300"><span
                                        class="lang-ar">..............</span><span class="lang-en">..............</span>
                                </p>
                            </div>
                        </article>
                    @endif
                @endforeach
            </div>
        </section>
    </main>
    </div>
@endsection
