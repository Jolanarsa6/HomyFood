<x-app-layout>
<body class="text-slate-800 dark:text-slate-100">
    <main class="min-h-screen px-4 py-10 grid place-items-center">
        {{-- <div class="mb-4 flex w-full max-w-2xl justify-end gap-2">
            <button id="langToggle" class="inline-flex h-11 items-center gap-2 rounded-2xl border border-homy-gold-200 bg-white px-3 text-xs font-black text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <i class="fa-solid fa-language"></i>
                <span class="lang-ar">EN</span>
                <span class="lang-en">AR</span>
            </button>
            <button id="themeToggle" class="h-11 w-11 rounded-2xl border border-homy-gold-200 bg-white text-homy-green-700 dark:border-homy-gold-600/40 dark:bg-homy-green-700/35 dark:text-homy-gold-300">
                <i class="fa-solid fa-moon"></i>
            </button>
        </div> --}}
        <section class="w-full max-w-2xl rounded-[2rem] border border-homy-gold-200 bg-white/90 p-8 text-center shadow-2xl dark:border-homy-gold-600/35 dark:bg-[#12211B]/90">
            <div class="mx-auto mb-6 grid h-20 w-20 place-items-center rounded-full border-2 border-homy-gold-300 bg-homy-gold-50 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/30 dark:text-homy-gold-400">
                <i class="fa-solid fa-hourglass-half text-2xl"></i>
            </div>

            <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">طلبك قيد المراجعة</span>
                <span class="lang-en">Your Request Is Under Review</span>
            </h1>

            <p class="mt-3 text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300">
                <span class="lang-ar">تم استلام بياناتك بنجاح. سيقوم فريقنا بمراجعة المعلومات والتحقق من المستندات. غالبا ما يتم الرد خلال 24 إلى 48 ساعة.</span>
                <span class="lang-en">Your data has been received successfully. Our team will review and verify documents. Most applications are processed within 24 to 48 hours.</span>
            </p>

            <div class="mt-6 grid gap-3 sm:grid-cols-3 text-sm font-black">
                <div class="rounded-xl border border-homy-gold-200 bg-homy-gold-50 p-3 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/25 dark:text-homy-gold-300">
                    <span class="lang-ar">تم الإرسال</span>
                    <span class="lang-en">Submitted</span>
                </div>
                <div class="rounded-xl border border-homy-gold-200 bg-homy-gold-50 p-3 text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/25 dark:text-homy-gold-300">
                    <span class="lang-ar">قيد التحقق</span>
                    <span class="lang-en">Verifying</span>
                </div>
                <div class="rounded-xl border border-dashed border-homy-gold-200 p-3 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
                    <span class="lang-ar">بانتظار القبول</span>
                    <span class="lang-en">Pending Approval</span>
                </div>
            </div>

            <div class="mt-7 flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('home') }}" class="rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600">
                    <span class="lang-ar">العودة للرئيسية</span>
                    <span class="lang-en">Back To Home</span>
                </a>
                {{-- <a href="join.html" class="rounded-2xl border border-homy-gold-300 px-6 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
                    <span class="lang-ar">تعديل المعلومات</span>
                    <span class="lang-en">Edit Information</span>
                </a> --}}
            </div>
        </section>
    </main>

</body>
</x-app-layout>
