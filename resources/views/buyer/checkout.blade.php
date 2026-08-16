@extends('buyer.layouts.master',['title'=> __('titles.checkout')])

@section('content')
    <main class="px-4 py-10">
        <section class="mx-auto grid w-full max-w-7xl gap-6 lg:grid-cols-[1.25fr_1fr]">

            @if ($no == 1)
                <article
                    class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 shadow-lg dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">صفحة
                            الشراء</span><span class="lang-en">Checkout</span></h1>

                    <div class="mt-6 grid gap-4 sm:grid-cols-[130px_1fr]">
                        <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Makdous"
                            class="h-32 w-full rounded-2xl object-cover">
                        <div>
                            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">{{ $product->product_ar_name }}</span><span
                                    class="lang-en">{{ $product->product_en_name }}</span>
                            </h2>
                            <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300">{{ $product->price }}
                                SYP</p>
                            <p class="mt-2 text-xs font-semibold text-slate-400 dark:text-slate-300"><span
                                    class="lang-ar">منتج يدوي من : {{ $product->brand }}</span><span
                                    class="lang-en">Handmade
                                    product from {{ $product->brand }}.</span></p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">خيارات التعبئة</span><span class="lang-en">Packaging Options</span></h3>
                        <div class="mt-3 grid gap-3 sm:grid-cols-3 text-sm font-bold">
                            @foreach ($product->packagings as $packaging)
                                <label
                                    class="cursor-pointer rounded-2xl border border-homy-gold-300 bg-homy-gold-50/70 px-3 py-3 dark:border-homy-gold-600/35 dark:bg-homy-green-700/20"><input
                                        type="radio" class="ms-2" name="packaging_id[]" value="{{ $loop->iteration }}">
                                    <span>{{ $packaging->name }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-6" data-qty>
                        <h3 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الكمية</span><span class="lang-en">Quantity</span></h3>
                        <div class="mt-3 flex items-center gap-2">
                            <button data-role="minus"
                                class="h-10 w-10 rounded-xl border border-homy-gold-300 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400">-</button>
                            <input value="1"
                                class="h-10 w-16 rounded-xl border border-homy-gold-300 bg-white text-center text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#173326] dark:text-homy-gold-400"
                                readonly name="quantity">
                            <button data-role="plus"
                                class="h-10 w-10 rounded-xl border border-homy-gold-300 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400">+</button>
                        </div>
                    </div>

                    <div
                        class="mt-6 rounded-2xl border border-homy-gold-200 p-4 text-sm font-semibold text-slate-600 dark:border-homy-gold-600/35 dark:text-slate-300">
                        <p><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تفاصيل
                                    المنتج:</span><span class="lang-en">Product Details:</span></span> 
                                    <span>{{ $product->description }}</span>
                            </div>
                                <?php
                                @$totalPrice += $product->price;
                                session()->put('totlaPrice', $totalPrice);
                                // $initialSubtotal = $product('price');
                                
                                ?>
                                {{-- <button data-open="paymentModal" type="button" class="mt-6 rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600"><span class="lang-ar">شراء الآن</span><span class="lang-en">Buy Now</span></button> --}}
                </article>
            @elseif($no != 1)
                @foreach ($product as $product)
                    <article
                        class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 shadow-lg dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                        <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">جاهز للشراء
                            </span><span class="lang-en">Checkout</span></h1>

                        <div class="mt-6 grid gap-4 sm:grid-cols-[130px_1fr]">
                            <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Makdous"
                                class="h-32 w-full rounded-2xl object-cover">
                            <div>
                                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">{{ $product->product_ar_name }}</span><span
                                        class="lang-en">{{ $product->product_en_name }}</span>
                                </h2>
                                <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300">
                                    {{ $product->price }} SYP</p>
                                <p class="mt-2 text-xs font-semibold text-slate-400 dark:text-slate-300"><span
                                        class="lang-ar">منتج يدوي من : {{ $product->brand }}</span><span
                                        class="lang-en">Handmade
                                        product from {{ $product->brand }}.</span></p>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">خيارات التعبئة</span><span class="lang-en">Packaging Options</span></h3>
                            <div class="mt-3 grid gap-3 sm:grid-cols-3 text-sm font-bold">
                                @foreach ($product->packagings as $packaging)
                                    <label
                                        class="cursor-pointer rounded-2xl border border-homy-gold-300 bg-homy-gold-50/70 px-3 py-3 dark:border-homy-gold-600/35 dark:bg-homy-green-700/20"><input
                                            type="radio" class="ms-2" name="packaging_id[]"
                                            value="{{ $loop->iteration }}">
                                        <span>{{ $packaging->name }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-6" data-qty>
                            <h3 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">الكمية</span><span class="lang-en">Quantity</span></h3>
                            <div class="mt-3 flex items-center gap-2">
                                <button data-role="minus" data-qty data-price="{{ $product->price }}"
                                    class="h-10 w-10 rounded-xl border border-homy-gold-300 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400">-</button>
                                <input value="1" name="quantity[{{ $product->id }}]"
                                    class="h-10 w-16 rounded-xl border border-homy-gold-300 bg-white text-center text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#173326] dark:text-homy-gold-400"
                                    readonly>
                                <button data-role="plus"
                                    class="h-10 w-10 rounded-xl border border-homy-gold-300 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400">+</button>
                            </div>
                        </div>

                        <div
                            class="mt-6 rounded-2xl border border-homy-gold-200 p-4 text-sm font-semibold text-slate-600 dark:border-homy-gold-600/35 dark:text-slate-300">
                            <p><span class="font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">تفاصيل
                                        المنتج:</span><span class="lang-en">Product Details:</span></span> <span
                                    >{{ $product->description }}</span> </div>

                                    {{-- <button data-open="paymentModal" type="button" class="mt-6 rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600"><span class="lang-ar">شراء الآن</span><span class="lang-en">Buy Now</span></button> --}}
                    </article>
                    <?php
                    @$totalPrice += $product->price;
                    session()->put('totlaPrice', $totalPrice);
                    @$initialSubtotal = $product->sum('price');
                    ?>
                @endforeach
            @endif


          

            <aside class="homy-card h-fit p-5">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">ملخص
                        السعر</span><span class="lang-en">Price Summary</span></h2>
                <div class="mt-4 space-y-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    <div class="flex justify-between"><span><span class="lang-ar">السعر الكلي</span><span
                                class="lang-en">Total Price</span></span><span>{{ session('totlaPrice') }} SYP</span></div>
                    <div class="flex justify-between"><span><span class="lang-ar">رسوم التوصيل</span><span
                                class="lang-en">Delivery</span></span><span>12 SYP</span></div>
                    <div class="flex justify-between"><span><span class="lang-ar">الضريبة</span><span
                                class="lang-en">Tax</span></span><span>3 SYP</span></div>
                    <div
                        class="border-t border-homy-gold-200 pt-3 text-base font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400 flex justify-between">
                        <span><span class="lang-ar">الإجمالي</span><span
                                class="lang-en">Total</span></span><span id="grand-total-display">{{ session('totlaPrice') + 12 + 3 }}
                            SYP</span>
                    </div>
                </div>

                <button data-open="paymentModal" type="button"
                    class="mt-6 rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600"><span
                        class="lang-ar">شراء الكل</span><span class="lang-en">Buy All</span></button>
                {{-- <a href="{{ route('buyer.show_cart') }}" class="mt-4 block rounded-2xl border-2 border-homy-gold-300 px-4 py-3 text-center text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span class="lang-ar">الرجوع للسلة</span><span class="lang-en">Back To Cart</span></a> --}}
            </aside>
        </section>
    </main>
    </div>

    <div id="paymentModal" class="modal-root fixed inset-0 z-[90] bg-black/55 p-4 backdrop-blur-sm">
        <div
            class="modal-panel mx-auto mt-10 w-full max-w-2xl rounded-[2rem] border border-homy-gold-200 bg-white p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]">
            <div class="mb-5 flex items-center justify-between">
                <h2 class="text-xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">طرق الدفع
                        ومعلومات التوصيل</span><span class="lang-en">Payment & Delivery Info</span></h2>
                <button data-close="paymentModal"
                    class="h-9 w-9 rounded-full border border-homy-gold-200 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><i
                        class="fa-solid fa-xmark"></i></button>
            </div>

            <div class="space-y-4 mt-2">
                <div>
                    <p class="mb-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">اختر طريقة الدفع</span><span class="lang-en">Choose Payment Method</span></p>
                    <div class="grid gap-2 sm:grid-cols-3 text-sm font-bold">
                        <label class="rounded-xl border border-homy-gold-300 p-3 dark:border-homy-gold-600/35"><input
                                type="radio" name="payment" class="ms-2" checked>Syriatel Kash</label>
                        <label class="rounded-xl border border-homy-gold-300 p-3 dark:border-homy-gold-600/35"><input
                                type="radio" name="payment" class="ms-2"><span class="lang-ar">شام كاش</span><span
                                class="lang-en">Sham Kash</span></label>
                        <label class="rounded-xl border border-homy-gold-300 p-3 dark:border-homy-gold-600/35"><input
                                type="radio" name="payment" class="ms-2"><span class="lang-ar">الدفع عند
                                الاستلام</span><span class="lang-en">Cash On Delivery</span></label>
                    </div>
                </div>
            </div>

            <div class="grid mt-2 gap-3 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">اسم حامل البطاقة</span><span class="lang-en">Cardholder
                            Name</span></label>
                    <input type="text"
                        class="w-full rounded-xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div>
                    <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">رقم البطاقة</span><span class="lang-en">Card Number</span></label>
                    <input type="text"
                        class="w-full rounded-xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
            </div>

            <label mt-4 class="inline-flex items-center gap-2 text-sm font-bold text-slate-600 dark:text-slate-300">
                <input type="checkbox" class="rounded border-homy-gold-300 text-homy-green-700 focus:ring-homy-gold-200"
                    checked>
                <span><span class="lang-ar">أريد التوصيل عبر شركة الشحن</span><span class="lang-en">I want home
                        delivery via courier company</span></span>
            </label>

            <div mt-2>
                <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                        class="lang-ar">عنوان التوصيل</span><span class="lang-en">Delivery Address</span></label>
                <textarea rows="3"
                    class="w-full rounded-xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]"></textarea>
            </div>

            <div class="mt-2 flex flex-wrap gap-2">
                <button type="button" class="rounded-xl bg-homy-green-700 px-5 py-3 text-sm font-black text-white"><span
                        class="lang-ar">تأكيد الدفع</span><span class="lang-en">Confirm Payment</span></button>
                <button data-close="paymentModal" type="button"
                    class="rounded-xl border border-homy-gold-300 px-5 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                        class="lang-ar">إلغاء</span><span class="lang-en">Cancel</span></button>
            </div>
        </div>
    </div>
    </div>
@endsection
