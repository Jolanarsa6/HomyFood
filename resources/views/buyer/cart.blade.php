@extends('buyer.layouts.master')

@section('content')
    <main class="px-4 py-10">
        <section class="mx-auto grid w-full max-w-7xl gap-5 lg:grid-cols-[1.6fr_1fr]">
            <div class="space-y-4">
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">سلة
                        التسوق</span><span class="lang-en">Shopping Cart</span></h1>

                @foreach ($products as $product)
                    <article class="homy-card p-4">
                        <div class="grid gap-3 sm:grid-cols-[120px_1fr_auto] sm:items-center">
                            <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Makdous"
                                class="h-28 w-full rounded-2xl object-cover">
                            <div>
                                <form action="{{ route('buyer.product_cart.remove', $product->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <x-danger-button class="ms-48">{{ __('actions.remove') }}</x-danger-button>
                                </form>
                                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400 lang-ar">
                                    {{ $product->product_ar_name }}
                                </h2>
                                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400 lang-en">
                                    {{ $product->product_ar_name }}
                                </h2>
                                <p class="text-sm font-semibold text-slate-500 dark:text-slate-300">{{ $product->price }}
                                    SYP</p>
                                <p class="mt-1 text-xs font-semibold text-slate-400 dark:text-slate-300">
                                    {{ $product->brand }}</p>
                            </div>
                            <div data-qty data-price="{{ $product->price }}" class="flex items-center gap-2">
                                <button data-role="minus"
                                    class="h-9 w-9 rounded-xl border border-homy-gold-300 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400">-</button>
                                <input value="1" name="quantity[{{ $product->id }}]"
                                    class="h-9 w-12 rounded-xl border border-homy-gold-300 bg-white text-center text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#173326] dark:text-homy-gold-400"
                                    readonly>
                                <button data-role="plus"
                                    class="h-9 w-9 rounded-xl border border-homy-gold-300 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400">+</button>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            @php
                // Define your constant discount here (e.g., $10.00)
                $discountAmount = 3.0;

                // Calculate the initial subtotal from your product loop
                $initialSubtotal = $products->sum('price');

                // Calculate initial grand total (ensuring it never drops below 0)
                $initialGrandTotal = max(0, $initialSubtotal - $discountAmount);
            @endphp

            <aside class="homy-card h-fit p-5">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">ملخص
                        الطلب</span><span class="lang-en">Order Summary</span></h2>
                <div class="mt-4 space-y-2 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    <div class="flex items-center justify-between"><span><span class="lang-ar">الإجمالي الفرعي</span><span
                                class="lang-en">Subtotal</span></span>
                                <span
                            id="blade-subtotal">{{ number_format($initialGrandTotal, 2) }}
                            SYP</span>
     </div>
                    <div class="flex items-center justify-between"><span><span class="lang-ar">التوصيل</span><span
                                class="lang-en">Delivery</span></span><span>{{ number_format($discountAmount, 2) }}
                            SYP</span></div>
                    <div class="flex items-center justify-between"><span><span class="lang-ar">الخصم</span><span
                                class="lang-en">Discount</span></span><span>12.00-
                            SYP</span></div>
                    <div
                        class="mt-2 border-t border-homy-gold-200 pt-3 text-base font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-400 flex items-center justify-between">
                        <span><span class="lang-ar">الإجمالي</span><span class="lang-en">Total</span></span>                           <span
                            id="grand-total-display">{{ number_format($initialSubtotal, 2) }} SYP</span>
                    </div>
                </div>
            </aside>
            <a href="{{ route('buyer.checkout_all') }}"
                class="mt-5 block rounded-2xl bg-homy-green-700 px-4 py-3 text-center text-sm font-black text-white transition hover:bg-homy-green-600"><span
                    class="lang-ar">متابعة الشراء</span><span class="lang-en">Proceed To Checkout</span></a>
            <a href="{{ route('buyer.dashboard') }}"
                class="mt-3 block rounded-2xl border-2 border-homy-gold-300 px-4 py-3 text-center text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                    class="lang-ar">متابعة التسوق</span><span class="lang-en">Continue Shopping</span></a>
        </section>
    </main>
@endsection
