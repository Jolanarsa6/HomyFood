<x-app-Layout>
<body class="text-slate-800 dark:text-slate-100">
    <main>
        <section class="relative overflow-hidden px-4 pb-16 pt-12">
            <div class="soft-grid absolute inset-0 opacity-40"></div>
            <div class="pointer-events-none absolute -start-20 -top-16 h-64 w-64 rounded-full bg-homy-gold-200/60 blur-3xl"></div>
            <div class="pointer-events-none absolute -end-16 top-20 h-64 w-64 rounded-full bg-homy-green-100/70 blur-3xl dark:bg-homy-green-700/25"></div>

            <div class="relative mx-auto grid w-full max-w-7xl gap-8 lg:grid-cols-[1.1fr_1fr] lg:items-center">
                <div>
                    <div class="inline-flex items-center gap-2 rounded-full border border-homy-gold-200 bg-white/80 px-4 py-2 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/30 dark:text-homy-gold-300">
                        <i class="fa-solid fa-store"></i>
                        <span class="lang-ar">انضم إلى مجتمع البائعين المحترفين</span>
                        <span class="lang-en">Join Professional Seller Community</span>
                    </div>

                    <h1 class="mt-4 text-3xl font-black leading-tight text-homy-green-700 dark:text-homy-gold-400 sm:text-4xl lg:text-5xl">
                        <span class="lang-ar">حوّل مطبخك إلى متجر عالمي من البيت</span>
                        <span class="lang-en">Turn Your Kitchen Into A Global Home Store</span>
                    </h1>

                    <p class="mt-5 max-w-2xl text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300 sm:text-base">
                        <span class="lang-ar">من خلال Homy Food يمكنك عرض منتجاتك المنزلية لآلاف العملاء، إدارة طلباتك بسهولة، متابعة أرباحك، وبناء علامة موثوقة. المنصة مصممة لتخدم البائع غير التقني أيضًا، بخطوات واضحة وتجربة بسيطة.</span>
                        <span class="lang-en">With Homy Food you can list homemade products for thousands of customers, manage orders easily, track revenue, and build a trusted brand. The platform is crafted for non-technical sellers with clear, simple steps.</span>
                    </p>

                    <div class="mt-7 flex flex-wrap items-center gap-3">
                        <a href="register.html" class="rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white shadow-lg shadow-homy-green-700/25 transition hover:-translate-y-0.5 hover:bg-homy-green-600">
                            <span class="lang-ar">ابدأ التسجيل كبائع</span>
                            <span class="lang-en">Start Seller Registration</span>
                        </a>
                        {{-- <a href="dashboard.html" class="rounded-2xl border-2 border-homy-gold-400 bg-white px-6 py-3 text-sm font-black text-homy-green-700 transition hover:-translate-y-0.5 hover:bg-homy-gold-500 hover:text-homy-green-900 dark:bg-homy-gold-500 dark:text-homy-green-900">
                            <span class="lang-ar">استعراض لوحة البائع</span>
                            <span class="lang-en">Preview Seller Dashboard</span>
                        </a> --}}
                    </div>
                </div>

                <div class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-5 shadow-xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=1300&q=80" alt="Seller journey" class="h-64 w-full rounded-2xl object-cover">
                    <div class="mt-4 grid grid-cols-3 gap-3 text-center text-xs font-black">
                        <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300">
                            <p class="text-lg">24h</p>
                            <p><span class="lang-ar">مراجعة الطلب</span><span class="lang-en">Review</span></p>
                        </div>
                        <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300">
                            <p class="text-lg">0%</p>
                            <p><span class="lang-ar">رسوم فتح الحساب</span><span class="lang-en">Setup Fee</span></p>
                        </div>
                        <div class="rounded-xl bg-homy-gold-50 p-3 text-homy-green-700 dark:bg-homy-green-700/30 dark:text-homy-gold-300">
                            <p class="text-lg">+10K</p>
                            <p><span class="lang-ar">عميل نشط</span><span class="lang-en">Active Buyers</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-4 pb-14">
            <div class="mx-auto w-full max-w-7xl rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">ماذا ستحصل كبائع؟</span>
                    <span class="lang-en">What You Get As A Seller</span>
                </h2>
                <div class="mt-5 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <article class="kpi-card p-4">
                        <i class="fa-solid fa-upload text-homy-gold-600"></i>
                        <h3 class="mt-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">رفع منتجات بسهولة</span><span class="lang-en">Simple Product Upload</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">صور متعددة، فيديو، تغليف، أسعار، كميات.</span><span class="lang-en">Multiple images, video, packaging, pricing, quantity.</span></p>
                    </article>
                    <article class="kpi-card p-4">
                        <i class="fa-solid fa-chart-line text-homy-gold-600"></i>
                        <h3 class="mt-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">إحصائيات فورية</span><span class="lang-en">Live Analytics</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">تعرف المنتجات الأكثر مبيعًا وأوقات الذروة.</span><span class="lang-en">Know top sellers and peak order times.</span></p>
                    </article>
                    <article class="kpi-card p-4">
                        <i class="fa-solid fa-wallet text-homy-gold-600"></i>
                        <h3 class="mt-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">محفظة ومدفوعات</span><span class="lang-en">Wallet & Payouts</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">متابعة الأرباح والسحوبات وحالة التحويلات.</span><span class="lang-en">Track revenue, withdrawals and transfers.</span></p>
                    </article>
                    <article class="kpi-card p-4">
                        <i class="fa-solid fa-comments text-homy-gold-600"></i>
                        <h3 class="mt-2 text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">مراسلة العملاء</span><span class="lang-en">Customer Messaging</span></h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">رد سريع على الأسئلة والتعليقات لتحسين المبيعات.</span><span class="lang-en">Respond to questions and comments quickly.</span></p>
                    </article>
                </div>
            </div>
        </section>

        <section class="px-4 pb-14">
            <div class="mx-auto w-full max-w-7xl grid gap-5 lg:grid-cols-2">
                <article class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h2 class="text-xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">مسؤوليات البائع القانونية</span><span class="lang-en">Seller Legal Responsibilities</span></h2>
                    <ul class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <li class="flex gap-2"><i class="fa-solid fa-circle-check mt-1 text-homy-gold-600"></i><span><span class="lang-ar">البائع مسؤول بالكامل عن صحة معلومات المنتج ووصفه.</span><span class="lang-en">Seller is fully responsible for product information accuracy.</span></span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-check mt-1 text-homy-gold-600"></i><span><span class="lang-ar">يجب تحديد تاريخ الإنتاج، تاريخ الانتهاء، ومدة الصلاحية بوضوح.</span><span class="lang-en">Production date, expiry date and shelf-life must be clearly specified.</span></span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-check mt-1 text-homy-gold-600"></i><span><span class="lang-ar">يجب الالتزام بمعايير التغليف والنظافة وسلامة الغذاء المحلية.</span><span class="lang-en">Seller must comply with local hygiene and food safety standards.</span></span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-check mt-1 text-homy-gold-600"></i><span><span class="lang-ar">أي مخالفة أو معلومات مضللة قد تؤدي لإيقاف الحساب.</span><span class="lang-en">Violations or misleading data may lead to account suspension.</span></span></li>
                    </ul>
                </article>

                <article class="rounded-[2rem] border border-homy-gold-200 bg-white/90 p-6 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                    <h2 class="text-xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">رحلة الانضمام بخطوات واضحة</span><span class="lang-en">Clear Onboarding Journey</span></h2>
                    <ol class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                        <li class="rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/35"><span class="font-black text-homy-green-700 dark:text-homy-gold-400">1.</span> <span class="lang-ar">تعبئة بيانات الهوية والاتصال.</span><span class="lang-en">Fill identity and contact data.</span></li>
                        <li class="rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/35"><span class="font-black text-homy-green-700 dark:text-homy-gold-400">2.</span> <span class="lang-ar">إدخال بيانات المتجر والعنوان ومناطق الخدمة.</span><span class="lang-en">Add store info, address and service areas.</span></li>
                        <li class="rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/35"><span class="font-black text-homy-green-700 dark:text-homy-gold-400">3.</span> <span class="lang-ar">توثيق الهوية والبيانات البنكية للتحقق الآمن.</span><span class="lang-en">Verify ID and banking details securely.</span></li>
                        <li class="rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/35"><span class="font-black text-homy-green-700 dark:text-homy-gold-400">4.</span> <span class="lang-ar">انتظار المراجعة ثم تفعيل لوحة التحكم.</span><span class="lang-en">Wait review then access seller dashboard.</span></li>
                    </ol>

                    <a href="register.html" class="mt-5 inline-block rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600">
                        <span class="lang-ar">متابعة إلى التسجيل</span>
                        <span class="lang-en">Continue To Registration</span>
                    </a>
                </article>
            </div>
        </section>
    </main>
</body>
</x-app-Layout>
