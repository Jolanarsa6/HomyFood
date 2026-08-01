<x-buyer.app>

    <x-alert></x-alert>
    <div class="relative z-10">
        <main>
            <section class="relative overflow-hidden px-4 pb-14 pt-10 lg:pt-14">
                <div class="soft-grid absolute inset-0 opacity-40"></div>
                <div
                    class="pointer-events-none absolute -start-24 -top-20 h-72 w-72 rounded-full bg-homy-gold-200/55 blur-3xl">
                </div>
                <div
                    class="pointer-events-none absolute -end-16 top-10 h-64 w-64 rounded-full bg-homy-green-100/75 blur-3xl dark:bg-homy-green-700/30">
                </div>

                <div class="relative mx-auto grid w-full max-w-7xl items-center gap-8 lg:grid-cols-2">
                    <div>
                        <div
                            class="mb-4 inline-flex items-center gap-2 rounded-full border border-homy-gold-200 bg-white/80 px-4 py-2 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">
                            <i class="fa-solid fa-crown text-homy-gold-500"></i>
                            <span class="lang-ar">تجربة منزلية فاخرة </span>
                            <span class="lang-en">Homemade Experience</span>
                        </div>

                        <h1
                            class="text-3xl font-black leading-tight text-homy-green-700 dark:text-homy-gold-400 sm:text-4xl lg:text-5xl">
                            <span class="lang-ar">مذاق البيت الذي يخفف الغربة ويقربك من أهلك</span>
                            <span class="lang-en">A Home Taste That Brings You Closer To Family</span>
                        </h1>

                        <p
                            class="mt-5 max-w-xl text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300 sm:text-base">
                            <span class="lang-ar">مربيات ومخللات ومكدوس وزعتر وسمن بلدي ومنتجات ألبان مصنوعة بعناية من
                                بائعين موثوقين. .</span>
                            <span class="lang-en">Jams, pickles, makdous, zaatar, ghee and dairy delights from trusted
                                sellers. </span>
                        </p>

                        <div class="mt-7 flex flex-wrap items-center gap-3">

                            {{-- <a href="compare.html"
                                class="rounded-2xl border-2 border-homy-gold-400 bg-white px-6 py-3 text-sm font-black text-homy-green-700 transition hover:-translate-y-0.5 hover:bg-homy-gold-500 hover:text-homy-green-900 dark:bg-homy-gold-500 dark:text-homy-green-900">
                                <span class="lang-ar">قارن المنتجات</span>
                                <span class="lang-en">Compare Products</span>
                            </a> --}}
                            <a href="{{ route('login') }}"
                                class="rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white shadow-lg shadow-homy-green-700/25 transition hover:-translate-y-0.5 hover:bg-homy-green-600">
                                <span class="lang-ar">ابدأ التسوق الآن</span>
                                <span class="lang-en">Start Shopping</span>
                            </a>
                            <a href="{{ route('seller.join') }}"
                                class="rounded-2xl border-2 border-homy-gold-300 bg-homy-gold-50 px-6 py-3 text-sm font-black text-homy-green-700 transition hover:-translate-y-0.5 hover:bg-homy-gold-500 hover:text-homy-green-900 dark:border-homy-gold-600/35 dark:bg-homy-green-700/35 dark:text-homy-gold-300 dark:hover:bg-homy-gold-500 dark:hover:text-homy-green-900">
                                <span class="lang-ar">انضم كبائع</span>
                                <span class="lang-en">Become A Seller</span>
                            </a>
                        </div>
                    </div>

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
                </div>
            </section>

            {{-- <section class="px-4 pb-8">
                <div class="mx-auto flex w-full max-w-7xl gap-20 overflow-x-auto pb-2 custom-scrollbar">
                    <button
                        class="js-filter-item active shrink-0 rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-center text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#153023] dark:text-homy-gold-300">
                        <i class="fa-solid fa-layer-group mb-2 block text-base"></i>
                        <span class="lang-ar">الكل</span>
                        <span class="lang-en">All</span>
                    </button>
                    <button
                        class="js-filter-item shrink-0 rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-center text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#153023] dark:text-homy-gold-300">
                        <i class="fa-solid fa-jar mb-2 block text-base"></i>
                        <span class="lang-ar">المربيات</span>
                        <span class="lang-en">Jams</span>
                    </button>
                    <button
                        class="js-filter-item shrink-0 rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-center text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#153023] dark:text-homy-gold-300">
                        <i class="fa-solid fa-seedling mb-2 block text-base"></i>
                        <span class="lang-ar">الزعتر</span>
                        <span class="lang-en">Zaatar</span>
                    </button>
                    <button
                        class="js-filter-item shrink-0 rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-center text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#153023] dark:text-homy-gold-300">
                        <i class="fa-solid fa-pepper-hot mb-2 block text-base"></i>
                        <span class="lang-ar">المخللات</span>
                        <span class="lang-en">Pickles</span>
                    </button>
                    <button
                        class="js-filter-item shrink-0 rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-center text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#153023] dark:text-homy-gold-300">
                        <i class="fa-solid fa-wheat-awn mb-2 block text-base"></i>
                        <span class="lang-ar">المونة</span>
                        <span class="lang-en">Pantry</span>
                    </button>
                    <button
                        class="js-filter-item shrink-0 rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-center text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-[#153023] dark:text-homy-gold-300">
                        <i class="fa-solid fa-cheese mb-2 block text-base"></i>
                        <span class="lang-ar">الألبان</span>
                        <span class="lang-en">Dairy</span>
                    </button>
                </div>
            </section> --}}

            <section class="px-4 pb-14">
                <div class="mx-auto w-full max-w-7xl">
                    <div class="mb-7 flex items-end justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">منتجات مختارة لك</span>
                                <span class="lang-en">Curated For You</span>
                            </h2>
                            <!-- <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span class="lang-ar">بطاقات المنتج الأساسية بنفس روح متجرك الحالية</span>
                                <span class="lang-en">Core product cards aligned with your current style</span>
                            </p> -->
                        </div>
                        <a href="{{ route('buyer.all_products.show') }}"
                            class="text-sm font-black text-homy-green-700 underline decoration-homy-gold-500 decoration-2 underline-offset-4 dark:text-homy-gold-400">
                            <span class="lang-ar">عرض الكل</span>
                            <span class="lang-en">View All</span>
                        </a>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ($products->take(18) as $product)
                            <article class="homy-card p-3">
                                <a class="relative block">
                                    <img src={{ $product->getFirstMediaUrl('product_images') }} alt="Fig Jam"
                                        class="h-44 w-full rounded-2xl object-cover">
                                    <span
                                        class="absolute start-2 top-2 rounded-full bg-white/90 px-2 py-1 text-[11px] font-black text-homy-green-700">{{ $product->price }}
                                        SAR</span>
                                    <form action="{{ route('buyer.addToWishlist', $product->id) }}" method="GET">
                                        <button type="submit" data-action="toggle-favorite" aria-pressed="false"
                                            class="absolute end-2 top-2 h-9 w-9 rounded-full bg-white/90 text-homy-green-700 shadow"
                                            type="button">
                                            <i class="fa-solid fa-heart"></i>
                                        </button>
                                    </form>
                                </a>


                                {{-- ....................... --}}
                                {{-- @auth
    <div x-data="{ 
            productId: {{ $product->id }},
            /* التحقق من حالة المنتج باستخدام العلاقة المجهزة من الكنترولر */
            isFav: {{ (auth()->check() && $product->productWishlists->contains(auth()->id())) ? 'true' : 'false' }},
            loading: false 
         }" 
         class="inline-block">
        
        <button @click="
                if(loading) return;
                loading = true;
                
                // تغيير اللون فوراً لتجربة سريعة
                isFav = !isFav; 
                
                // إرسال الطلب مع تمرير الـ CSRF Token في الـ Headers
                axios.post('/wishlist/toggle/' + productId, {}, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    isFav = response.data.is_favorite;
                })
                .catch(error => {
                    // في حال الفشل، نعيد الأيقونة لحالتها السابقة
                    isFav = !isFav;
                    alert('حدث خطأ ما، يرجى المحاولة لاحقاً');
                    console.error(error); // هذا السطر سيطبع لك تفاصيل الخطأ بدقة في متصفحك (Console)
                })
                .finally(() => loading = false);
            "
            type="button"
            class="p-2 rounded-full transition-all duration-300 transform active:scale-95 focus:outline-none"
            :class="isFav ? 'text-homy-green-700 dark:text-homy-gold-400' : 'text-slate-400 dark:text-slate-500 hover:text-homy-green-600 dark:hover:text-homy-gold-200'">
            
            <i :class="isFav ? 'fa-solid fa-heart' : 'fa-regular fa-heart'" class="text-xl transition-transform duration-300"></i>
            
        </button>
    </div>
@else
    <a href="{{ route('login') }}" class="p-2 text-slate-400 dark:text-slate-500 hover:text-homy-green-600 dark:hover:text-homy-gold-200 inline-block">
        <i class="fa-regular fa-heart text-xl"></i>
    </a>
@endauth --}}


                                {{-- ....................... --}}


                                <div class="pt-3">
                                    <h3
                                        class="line-clamp-1 text-sm font-black text-homy-green-700 dark:text-homy-gold-400">
                                        <span class="lang-ar">{{ $product->product_ar_name }}</span>
                                        <span class="lang-en">{{ $product->product_en_name }}</span>
                                    </h3>
                                    <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300">
                                        <span class="lang-ar">{{ $product->brand }}</span>
                                        <span class="lang-en">{{ $product->brand }}</span>
                                    </p>
                                    <div class="mt-3 flex items-center justify-between">
                                        <div class="text-xs font-black text-homy-gold-600">5 ★</div>
                                        <a href="{{ route('buyer.addToCart', $product->id) }}"
                                            class="rounded-xl bg-homy-green-700 px-3 py-2 text-[11px] font-black text-white">
                                            <span class="lang-ar">أضف للسلة</span>
                                            <span class="lang-en">Add To Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="px-4 pb-14">
                <div class="mx-auto w-full max-w-7xl">
                    <div class="mb-7 flex items-end justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">قد يعجبك</span>
                                <span class="lang-en">May You Love</span>
                            </h2>
                            {{-- <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span class="lang-ar">تنويع بصري يعزز تجربة المستخدم في الصفحة الرئيسية</span>
                                <span class="lang-en">Visual diversity for richer homepage experience</span>
                            </p>  --}}
                        </div>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-2">
                        @foreach ($products->sortByDesc('id')->take(1) as $product)
                            <article class="homy-card flex flex-col gap-4 p-4 sm:flex-row">
                                <img src="{{ $product->getFirstMediaUrl('product_images') }}" alt="Makdous"
                                    class="h-44 w-full rounded-2xl object-cover sm:h-auto sm:w-48">
                                <div class="flex flex-1 flex-col">
                                    <div class="flex items-start justify-between gap-2">
                                        <h3 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                                            <span class="lang-ar">{{ $product->product_ar_name }}</span>
                                            <span class="lang-en">{{ $product->product_en_name }}</span>
                                        </h3>
                                        <span
                                            class="rounded-full bg-homy-gold-100 px-3 py-1 text-xs font-black text-homy-green-700 dark:bg-homy-gold-500 dark:text-homy-green-900">-15%</span>
                                    </div>
                                    <p class="mt-2 text-sm font-medium text-slate-600 dark:text-slate-300">
                                        <span class="lang-ar">{{ $product->description }}</span>
                                        <span class="lang-en">{{ $product->description }}</span>
                                    </p>
                                    <div class="mt-auto pt-4 flex flex-wrap items-center gap-2">
                                        <span
                                            class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">{{ $product->price }}
                                            SAR</span>
                                        <a href="{{ route('buyer.show_product_details', $product->id) }}"
                                            class="rounded-xl border border-homy-gold-300 px-3 py-2 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:text-homy-gold-300">
                                            <span class="lang-ar">التفاصيل</span>
                                            <span class="lang-en">Details</span>
                                        </a>
                                        <a href="{{ route('buyer.checkout', $product->id) }}"
                                            class="rounded-xl bg-homy-green-700 px-3 py-2 text-xs font-black text-white">
                                            <span class="lang-ar">شراء الآن</span>
                                            <span class="lang-en">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach


                        <article class="homy-card p-4">
                            <div class="grid gap-3 sm:grid-cols-[1.2fr_1fr]">
                                <img src="{{ asset('images/boxPhoto.jpg') }}" alt="Assorted products"
                                    class="h-44 w-full rounded-2xl object-cover sm:h-full">
                                <div class="rounded-2xl bg-homy-green-700/95 p-4 text-white dark:bg-homy-green-700">
                                    <p class="text-xs font-bold uppercase tracking-wider text-homy-gold-100">
                                        <span class="lang-ar">صندوق العائلة</span>
                                        <span class="lang-en">Family Box</span>
                                    </p>
                                    <h3 class="mt-1 text-lg font-black">
                                        <span class="lang-ar">5 منتجات مختارة</span>
                                        <span class="lang-en">5 Curated Products</span>
                                    </h3>
                                    <p class="mt-2 text-xs font-semibold text-white/80">
                                        <span class="lang-ar">مربى + زعتر + مكدوس + سمن + مخلل</span>
                                        <span class="lang-en">Jam + Zaatar + Makdous + Ghee + Pickles</span>
                                    </p>
                                    <a href="{{ route('buyer.addToCart', 1) }}"
                                        class="mt-4 inline-block rounded-xl bg-homy-gold-500 px-3 py-2 text-xs font-black text-homy-green-900">
                                        <span class="lang-ar">أضف البوكس للسلة</span>
                                        <span class="lang-en">Add Box To Cart</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="px-4 pb-14">
                <div class="mx-auto w-full max-w-7xl">
                    <div
                        class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/45 p-6 shadow-xl dark:border-homy-gold-600/30 dark:from-[#14261f] dark:via-[#12211b] dark:to-[#173326]">
                        <div class="mb-5 flex flex-wrap items-end justify-between gap-3">
                            <div>
                                <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                                    <span class="lang-ar">فلاتر سريعة</span>
                                    <span class="lang-en">Quick Filters</span>
                                </h2>
                                <!-- <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300">
                                    <span class="lang-ar">نفس هدف فلاتر الأعلى لكن بعرض بصري عالمي</span>
                                    <span class="lang-en">Same purpose as top filters with a richer visual style</span>
                                </p> -->
                            </div>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-6">
                            <button
                                class="js-filter-item active mx-auto flex h-28 w-28 flex-col items-center justify-center rounded-full border border-homy-gold-300 bg-white text-xs font-black text-homy-green-700 shadow-md transition hover:-translate-y-1 dark:border-homy-gold-600/40 dark:bg-[#173326] dark:text-homy-gold-300">
                                <i class="fa-solid fa-jar mb-2 text-lg"></i>
                                <span class="lang-ar">مربى</span>
                                <span class="lang-en">Jam</span>
                            </button>
                            <button
                                class="js-filter-item mx-auto flex h-28 w-28 flex-col items-center justify-center rounded-full border border-homy-gold-300 bg-white text-xs font-black text-homy-green-700 shadow-md transition hover:-translate-y-1 dark:border-homy-gold-600/40 dark:bg-[#173326] dark:text-homy-gold-300">
                                <i class="fa-solid fa-bowl-food mb-2 text-lg"></i>
                                <span class="lang-ar">مكدوس</span>
                                <span class="lang-en">Makdous</span>
                            </button>
                            <button
                                class="js-filter-item mx-auto flex h-28 w-28 flex-col items-center justify-center rounded-full border border-homy-gold-300 bg-white text-xs font-black text-homy-green-700 shadow-md transition hover:-translate-y-1 dark:border-homy-gold-600/40 dark:bg-[#173326] dark:text-homy-gold-300">
                                <i class="fa-solid fa-leaf mb-2 text-lg"></i>
                                <span class="lang-ar">زعتر</span>
                                <span class="lang-en">Zaatar</span>
                            </button>
                            <button
                                class="js-filter-item mx-auto flex h-28 w-28 flex-col items-center justify-center rounded-full border border-homy-gold-300 bg-white text-xs font-black text-homy-green-700 shadow-md transition hover:-translate-y-1 dark:border-homy-gold-600/40 dark:bg-[#173326] dark:text-homy-gold-300">
                                <i class="fa-solid fa-cow mb-2 text-lg"></i>
                                <span class="lang-ar">سمن</span>
                                <span class="lang-en">Ghee</span>
                            </button>
                            <button
                                class="js-filter-item mx-auto flex h-28 w-28 flex-col items-center justify-center rounded-full border border-homy-gold-300 bg-white text-xs font-black text-homy-green-700 shadow-md transition hover:-translate-y-1 dark:border-homy-gold-600/40 dark:bg-[#173326] dark:text-homy-gold-300">
                                <i class="fa-solid fa-cheese mb-2 text-lg"></i>
                                <span class="lang-ar">ألبان</span>
                                <span class="lang-en">Dairy</span>
                            </button>
                            <button
                                class="js-filter-item mx-auto flex h-28 w-28 flex-col items-center justify-center rounded-full border border-homy-gold-300 bg-white text-xs font-black text-homy-green-700 shadow-md transition hover:-translate-y-1 dark:border-homy-gold-600/40 dark:bg-[#173326] dark:text-homy-gold-300">
                                <i class="fa-solid fa-pepper-hot mb-2 text-lg"></i>
                                <span class="lang-ar">مخللات</span>
                                <span class="lang-en">Pickles</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="px-4 pb-14">
                <div class="mx-auto w-full max-w-7xl">
                    <div class="mb-7 flex items-end justify-between gap-4">
                        <div>
                            <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">فيديوهات من البائعين</span>
                                <span class="lang-en">Seller Video Showcase</span>
                            </h2>
                            <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span class="lang-ar">قسم مخصص لشرح المنتج وطريقة التحضير</span>
                                <span class="lang-en">Dedicated videos for product stories and preparation</span>
                            </p>
                        </div>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-3">
                        <article class="homy-card overflow-hidden">
                            <video controls preload="metadata"
                                poster="https://images.unsplash.com/photo-1587241321921-91a834d6d191?auto=format&fit=crop&w=900&q=80"
                                class="h-52 w-full object-cover">
                                <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"
                                    type="video/mp4">
                            </video>
                            <div class="p-4">
                                <h3 class="font-black text-homy-green-700 dark:text-homy-gold-400">
                                    <span class="lang-ar">طريقة تحضير المكدوس البلدي</span>
                                    <span class="lang-en">How We Prepare Traditional Makdous</span>
                                </h3>
                            </div>
                        </article>
                        <article class="homy-card overflow-hidden">
                            <video controls preload="metadata"
                                poster="https://images.unsplash.com/photo-1589712235274-89ec11f2f24f?auto=format&fit=crop&w=900&q=80"
                                class="h-52 w-full object-cover">
                                <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.webm"
                                    type="video/webm">
                            </video>
                            <div class="p-4">
                                <h3 class="font-black text-homy-green-700 dark:text-homy-gold-400">
                                    <span class="lang-ar">من الحقل إلى مرطبان الزعتر</span>
                                    <span class="lang-en">From Field To Zaatar Jar</span>
                                </h3>
                            </div>
                        </article>
                        <article class="homy-card overflow-hidden">
                            <video controls preload="metadata"
                                poster="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&w=900&q=80"
                                class="h-52 w-full object-cover">
                                <source src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4"
                                    type="video/mp4">
                            </video>
                            <div class="p-4">
                                <h3 class="font-black text-homy-green-700 dark:text-homy-gold-400">
                                    <span class="lang-ar">سر نكهة السمن البلدي</span>
                                    <span class="lang-en">The Secret Of Traditional Ghee</span>
                                </h3>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="px-4 pb-14">
                <div
                    class="mx-auto w-full max-w-7xl rounded-[2rem] border border-homy-gold-200 bg-white/85 p-6 shadow-xl dark:border-homy-gold-600/30 dark:bg-[#12211B]/85">
                    <div class="mb-6 flex flex-wrap items-end justify-between gap-3">
                        <div>
                            <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">قسم المقارنة </span>
                                <span class="lang-en">Comparison Zone</span>
                            </h2>
                            <p class="mt-1 text-sm font-semibold text-slate-500 dark:text-slate-300">
                                <span class="lang-ar">اختر منتجاتك وقارن السعر والتقييم والتعبئة بسرعة</span>
                                <span class="lang-en">Pick products and compare price, rating and packaging fast</span>
                            </p>
                        </div>
                        <a href="{{ route('buyer.compare') }}"
                            class="rounded-xl bg-homy-green-700 px-4 py-2 text-xs font-black text-white transition hover:bg-homy-green-600">
                            <span class="lang-ar">افتح صفحة المقارنة</span>
                            <span class="lang-en">Open Comparison Page</span>
                        </a>
                    </div>

                    <div class="grid gap-4 md:grid-cols-2">
                        <article
                            class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-4 dark:border-homy-gold-600/30 dark:bg-homy-green-700/25">
                            <h3 class="font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">مربى تين عضوي</span>
                                <span class="lang-en">Organic Fig Jam</span>
                            </h3>
                            <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300">45 SAR | 4.9 ★</p>
                        </article>
                        <article
                            class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50/70 p-4 dark:border-homy-gold-600/30 dark:bg-homy-green-700/25">
                            <h3 class="font-black text-homy-green-700 dark:text-homy-gold-400">
                                <span class="lang-ar">مربى تين كلاسيك</span>
                                <span class="lang-en">Classic Fig Jam</span>
                            </h3>
                            <p class="mt-1 text-sm font-semibold text-slate-600 dark:text-slate-300">39 SAR | 4.6 ★</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="px-4 pb-14">
                <div class="mx-auto w-full max-w-7xl">
                    <div class="mb-6 flex items-end justify-between gap-3">
                        <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                            <span class="lang-ar">العلامات والبائعون المميزون</span>
                            <span class="lang-en">Featured Brands & Sellers</span>
                        </h2>
                    </div>

                    <div
                        class="brand-marquee overflow-hidden rounded-3xl border border-homy-gold-200 bg-white/90 p-4 dark:border-homy-gold-600/30 dark:bg-[#12211B]/85">
                        <div class="brand-track flex w-max gap-3">
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Homy
                                Pantry</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Levant
                                Spoon</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Golden
                                Ghee House</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Makdous
                                Stories</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Farm
                                To Jar</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Royal
                                Pickles</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Homy
                                Pantry</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Levant
                                Spoon</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Golden
                                Ghee House</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Makdous
                                Stories</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Farm
                                To Jar</span>
                            <span
                                class="rounded-2xl border border-homy-gold-200 bg-homy-gold-50 px-4 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/30 dark:text-homy-gold-300">Royal
                                Pickles</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

</x-buyer.app>
