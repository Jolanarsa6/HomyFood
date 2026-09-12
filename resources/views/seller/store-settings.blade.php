@extends('seller.layouts.master', ['title' => __('titles.messages')])

@section('content')
    <section class="space-y-5">
        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">معلومات المتجر
                    الأساسية</span><span class="lang-en">Core Store Information</span></h1>
            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">اسم المتجر</span><span class="lang-en">Store Name</span></label><input
                        type="text" value="مطبخ بيت الشام"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">رقم التواصل</span><span class="lang-en">Contact Number</span></label><input
                        type="text" value="+966 55 000 1122"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
            </div>
            <div class="mt-4"><label
                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                        class="lang-ar">نبذة المتجر</span><span class="lang-en">Store Bio</span></label>
                <textarea rows="4"
                    class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">منتجات منزلية أصيلة مصنوعة بعناية من وصفات شامية تقليدية.</textarea>
            </div>
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">أوقات العمل
                    والتوصيل</span><span class="lang-en">Working Hours & Delivery</span></h2>
            <div class="mt-4 grid gap-4 sm:grid-cols-3">
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">من</span><span class="lang-en">From</span></label><input type="time"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">إلى</span><span class="lang-en">To</span></label><input type="time"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">مناطق التوصيل</span><span class="lang-en">Delivery Zones</span></label><input
                        type="text" value="دمشق - طرطوس/بيت كمونة"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
            </div>
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">سياسات
                    المتجر</span><span class="lang-en">Store Policies</span></h2>
            <div class="mt-4 space-y-3 text-sm font-bold text-slate-600 dark:text-slate-300">
                <label
                    class="flex items-center gap-2 rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                        type="checkbox" checked class="rounded border-homy-gold-300 text-homy-green-700"><span><span
                            class="lang-ar">السماح بإرجاع خلال 24 ساعة</span><span class="lang-en">Allow return within
                            24h</span></span></label>
                <label
                    class="flex items-center gap-2 rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                        type="checkbox" checked class="rounded border-homy-gold-300 text-homy-green-700"><span><span
                            class="lang-ar">فرض التحقق من العنوان قبل الشحن</span><span class="lang-en">Require address
                            verification before shipping</span></span></label>
                <label
                    class="flex items-center gap-2 rounded-xl border border-homy-gold-200 p-3 dark:border-homy-gold-600/35"><input
                        type="checkbox" class="rounded border-homy-gold-300 text-homy-green-700"><span><span
                            class="lang-ar">تفعيل الدفع عند الاستلام</span><span class="lang-en">Enable cash on
                            delivery</span></span></label>
            </div>
        </article>

        <div class="flex flex-wrap gap-3">
            <button type="button" class="rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white"><span
                    class="lang-ar">حفظ الإعدادات</span><span class="lang-en">Save Settings</span></button>
            <button type="button"
                class="rounded-2xl border border-homy-gold-300 px-6 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                    class="lang-ar">إلغاء</span><span class="lang-en">Cancel</span></button>
        </div>
    </section>
@endsection
