<x-buyer.app>

    <main class="px-4 py-10">
        <section class="mx-auto w-full max-w-7xl">
            <div class="mb-7 flex items-end justify-between gap-3">
                <a href="{{ route('home') }}"
                    class="rounded-2xl bg-homy-green-700 px-4 py-2 text-xs font-black text-white"><span
                        class="lang-ar">العودة إلى الرئيسية</span><span class="lang-en">Return Home</span></a>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @if(count($products) != 0)
                @foreach ($products as $product)
                    <article class="homy-card p-3">
                        <a href="{{ route('buyer.show_product_details', $product->id) }}" class="relative block">
                            <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Ghee"
                                class="h-44 w-full rounded-2xl object-cover">
                            <button data-action="toggle-favorite" aria-pressed="true"
                                class="absolute end-2 top-2 h-9 w-9 rounded-full bg-white/90 text-homy-green-700 shadow"><i
                                    class="fa-solid fa-heart"></i></button>
                        </a>
                        <h2 class="mt-3 text-sm font-black text-homy-green-700 dark:text-homy-gold-400 lang-ar">
                            {{ $product->product_ar_name }}</h2>
                        <h2 class="mt-3 text-sm font-black text-homy-green-700 dark:text-homy-gold-400 lang-en">
                            {{ $product->product_en_name }}</h2>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300">{{ $product->price }} SYP</p>
                        <div class="mt-3 flex gap-2">
                            <a href="{{ route('buyer.addToCart',$product->id) }}"
                                class="rounded-xl bg-homy-green-700 px-3 py-2 text-[11px] font-black text-white"><span
                                    class="lang-ar">أضف للسلة</span><span class="lang-en">Add To Cart</span></a>
                            <a href="{{ route('buyer.show_product_details', $product->id) }}"
                                class="rounded-xl border border-homy-gold-300 px-3 py-2 text-[11px] font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                    class="lang-ar">التفاصيل</span><span class="lang-en">Details</span></a>
                        </div>
                    </article>
                @endforeach
    
                @else
                  <div class="mb-7 flex items-end justify-between gap-3">
                <h1 class="text-4xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">
                        لم يتم العثور على نتائج</span><span class="lang-en">No results found</span></h1>
                    </div>
                    
                @endif
            </div>
        </section>
    </main>
</x-buyer.app>

