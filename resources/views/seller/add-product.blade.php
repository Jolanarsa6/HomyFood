<x-seller.app>

    <body class="text-slate-800 dark:text-slate-100">

        {{-- _______________________________ --}}


        @if ($errors->any())
            <div style="color:white">
                {{ $errors->first() }}
            </div>
        @endif


        {{-- _______________________________ --}}


        <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden"></div>

        <main class="mx-auto grid w-full max-w-[1500px] gap-6 px-4 py-6 lg:grid-cols-[1fr_300px]">
            <section class="space-y-5">
                <article
                    class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">نموذج إضافة المنتج</span><span class="lang-en">Product Creation Form</span>
                    </h1>
                    <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">هذا
                            النموذج مصمم خصيصاً لك . فقط املأ التفاصيل خطوة بخطوة.</span><span class="lang-en">This form
                            is optimized for you. Fill details step by step.</span></p>
                </article>

                <form class="space-y-5" method="POST" action="{{ route('seller.addProduct') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <article
                        class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">1) المعلومات الأساسية</span><span class="lang-en">1) Basic
                                Information</span></h2>
                        <div class="mt-4 grid gap-4 sm:grid-cols-2">
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">اسم المنتج بالعربية</span><span class="lang-en">Product Name
                                        (AR)</span></label><input type="text" name="product_ar_name"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">اسم المنتج بالإنجليزية</span><span class="lang-en">Product Name
                                        (EN)</span></label><input type="text" name="product_en_name"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>
                        <div class="mt-4 grid gap-4 sm:grid-cols-3">
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">التصنيف</span><span
                                        class="lang-en">Category</span></label><select name="category_id"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                                    <option value="1">مكدوس</option>
                                    <option value="2">مربيات</option>
                                    <option value="3">مخللات</option>
                                    <option value="4">زعتر</option>
                                    <option value="5">ألبان</option>
                                </select></div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">العلامة/المزرعة</span><span
                                        class="lang-en">Brand/Farm</span></label><input type="text" name="brand"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">بلد المنشأ</span><span class="lang-en">Country Of
                                        Origin</span></label><input type="text" name="palce_of_origin"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>
                        <div class="mt-4"><label
                                class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">وصف المنتج</span><span class="lang-en">Product
                                    Description</span></label>
                            <textarea rows="4" name="description"
                                class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]"></textarea>
                        </div>
                    </article>

                    <article
                        class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">2) السعر والمخزون والتجهيز</span><span class="lang-en">2) Pricing, Stock
                                & Preparation</span></h2>
                        <div class="mt-4 grid gap-4 sm:grid-cols-4">
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">سعر البيع</span><span class="lang-en">Sale
                                        Price</span></label><input type="number" name="price"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">سعر قبل الخصم</span><span class="lang-en">Compare
                                        Price</span></label><input type="number" name="discount_price"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الكمية المتاحة</span><span class="lang-en">Available
                                        Quantity</span></label><input type="number" name="available_quantity"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الحد الأدنى للطلب</span><span class="lang-en">Minimum
                                        Order</span></label><input type="number" name="minimum_order"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>
                        <div class="mt-4 grid gap-4 sm:grid-cols-3">
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">تاريخ الإنتاج</span><span class="lang-en">Production
                                        Date</span></label><input type="date" name="production_date"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">تاريخ الانتهاء</span><span class="lang-en">Expiry
                                        Date</span></label><input type="date" name="expiry_date"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">مدة الصلاحية بالأيام</span><span class="lang-en">Shelf Life
                                        (Days)</span></label><input type="number" name="shelf_life"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>
                    </article>

                    <article
                        class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">3) التغليف والدفع والتوصيل</span><span class="lang-en">3) Packaging,
                                Payment & Delivery</span></h2>
                        <div
                            class="mt-4 grid gap-4 sm:grid-cols-3 text-sm font-bold text-slate-600 dark:text-slate-300">
                            <label
                                class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                    type="checkbox" class="ms-2" name="packaging_id[]" value="1"><span
                                    class="lang-ar">مرطبان
                                    زجاجي</span><span class="lang-en">Glass Jar</span></label>
                            <label
                                class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                    type="checkbox" class="ms-2" name="packaging_id[]" value="2"><span
                                    class="lang-ar">كيس غذائي</span><span class="lang-en">Food Bag</span></label>
                            <label
                                class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                    type="checkbox" class="ms-2" name="packaging_id[]" value="3"><span
                                    class="lang-ar">عبوة بلاستيكية</span><span class="lang-en">Plastic
                                    Container</span></label>
                        </div>
                         <div
                                class="mt-1 grid gap-4 sm:grid-cols-3 text-sm font-bold text-slate-600 dark:text-slate-300">
                                <label
                                    class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                        type="checkbox" class="ms-2" name="payment_id[]" value="1"><span
                                        class="lang-ar">سيرياتيل كاش</span><span class="lang-en">Syriatel
                                        Kash</span></label>
                                <label
                                    class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                        type="checkbox" class="ms-2" name="payment_id[]" value="2"><span
                                        class="lang-ar">شام كاش</span><span class="lang-en">Sham Kash</span></label>
                                <label
                                    class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                        type="checkbox" class="ms-2" name="payment_id[]" value="3"><span
                                        class="lang-ar">الدفع عند
                                        الاستلام</span><span class="lang-en">Cash On Delivery</span></label>
                            </div>
                        <div class="mt-4 grid gap-4">
                            <div><label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">زمن تجهيز الطلب (ساعات)</span><span
                                        class="lang-en">Preparation Time (Hours)</span></label><input type="number"
                                    name="hours"
                                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>

                            <label
                                class="mb-0 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">طريقة التوصيل</span><span class="lang-en">Delivery
                                    Method</span></label>
                            <div
                                class="mt-1 grid gap-4 sm:grid-cols-3 text-sm font-bold text-slate-600 dark:text-slate-300">
                                <label
                                    class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                        type="checkbox" class="ms-2" name="delivery_id[]" value="1"><span
                                        class="lang-ar">تسليم باليد</span><span class="lang-en">Hand To Hand
                                       </span></label>
                                <label
                                    class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                        type="checkbox" class="ms-2" name="delivery_id[]" value="2"><span
                                        class="lang-ar">القدموس</span><span class="lang-en">Alkadmous</span></label>
                                <label
                                    class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                                        type="checkbox" class="ms-2" name="delivery_id[]" value="3"><span
                                        class="lang-ar">بيي أوردر
                                        </span><span class="lang-en">BeeOrder</span></label>
                            </div>
                        </div>
                    </article>

                    <article
                        class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">4) الصور والفيديو</span><span class="lang-en">4) Images & Video</span>
                        </h2>

                        <div class="mt-4 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">صورة المنتج</span><span class="lang-en">Product
                                        Image</span></label>
                                <input type="file" accept="image/*" name="product_image"
                                    data-preview-target="productImagesPreview" class="w-full text-xs font-semibold">
                                <div id="productImagesPreview" class="mt-3 grid grid-cols-2 gap-2"></div>
                            </div>
                            <div class="rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35">
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">فيديو المنتج</span><span class="lang-en">Product
                                        Video</span></label>
                                <input type="file" accept="video/*" name="product_video"
                                    data-preview-target="productVideoPreview" class="w-full text-xs font-semibold">
                                <div id="productVideoPreview" class="mt-3"></div>
                            </div>
                        </div>
                    </article>

                    <article
                        class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">5) أسئلة شائعة من العملاء</span><span class="lang-en">5) Customer FAQ
                                Details</span></h2>
                        <div class="mt-4 grid gap-4">
                            <input type="text" name="quest_1" placeholder="هل المنتج مناسب للأطفال؟"
                                class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            <input type="text" name="quest_2" placeholder="هل يحتاج تبريد بعد الفتح؟"
                                class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            <input type="text" name="quest_3" placeholder="هل يحتوي على مسببات حساسية؟"
                                class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                        </div>

                        <div class="mt-5 flex flex-wrap items-center gap-3">
                            <button type="submit"
                                class="rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white hover:bg-homy-green-600"><span
                                    class="lang-ar">نشر المنتج</span><span class="lang-en">Publish
                                    Product</span></button>
                            <button type="button"
                                class="rounded-2xl border border-homy-gold-300 px-6 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                    class="lang-ar">حفظ كمسودة</span><span class="lang-en">Save As
                                    Draft</span></button>
                            <a href="{{ route('seller.showProducts') }}"
                                class="rounded-2xl border border-homy-gold-300 px-6 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                                    class="lang-ar">عرض المنتجات</span><span class="lang-en">View Products</span></a>
                        </div>
                    </article>
                </form>
            </section>

            @include('partials.seller-aside')
        </main>

    </body>
</x-seller.app>
