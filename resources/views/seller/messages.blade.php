@extends('seller.layouts.master')

@section('content')

        <section data-tab-group data-tab-default="inbox" class="space-y-5">
            {{-- <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="flex flex-wrap items-center gap-2">
                    <button data-tab-trigger="inbox" class="rounded-xl border border-homy-gold-300 px-4 py-2 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span class="lang-ar">صندوق الرسائل</span><span class="lang-en">Inbox</span></button>
                    <button data-tab-trigger="comments" class="rounded-xl border border-homy-gold-300 px-4 py-2 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span class="lang-ar">تعليقات المنتجات</span><span class="lang-en">Product Comments</span></button>
                </div>
            </article> --}}

             <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar"> 
                    التعليقات على المنتجات</span><span class="lang-en">Product Comments</span>
            </h1>
            <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">هنا
                    يمكنك إرسال رد على التعليقات و ستيم نشره مباشرة</span><span class="lang-en">Here you can send a reply to the comments, and it will be published directly.
                    </span></p>
        </article>
            <div data-tab-pane="inbox" class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="grid gap-4 lg:grid-cols-[280px_1fr]">
                    <aside class="space-y-2">
                        <button class="w-full rounded-xl border border-homy-gold-200 bg-homy-gold-50 p-3 text-right text-sm font-bold text-homy-green-700 dark:border-homy-gold-600/35 dark:bg-homy-green-700/30 dark:text-homy-gold-300">ريم أحمد <span class="block text-xs font-semibold text-slate-500 dark:text-slate-300">أريد تعديل عنوان الطلب</span></button>
                        <button class="w-full rounded-xl border border-homy-gold-200 p-3 text-right text-sm font-bold text-slate-600 dark:border-homy-gold-600/35 dark:text-slate-300">Khaled N. <span class="block text-xs font-semibold text-slate-500 dark:text-slate-300">هل يوجد حجم أكبر؟</span></button>
                        <button class="w-full rounded-xl border border-homy-gold-200 p-3 text-right text-sm font-bold text-slate-600 dark:border-homy-gold-600/35 dark:text-slate-300">Dina H. <span class="block text-xs font-semibold text-slate-500 dark:text-slate-300">شكرا على التغليف الرائع</span></button>
                    </aside>
                    <article class="rounded-xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                        <div class="space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                            <div class="rounded-xl bg-homy-gold-50 p-3 dark:bg-homy-green-700/25"><span class="font-black text-homy-green-700 dark:text-homy-gold-400">العميل:</span> أريد تعديل عنوان الطلب من فضلك.</div>
                            <div class="rounded-xl bg-homy-green-700 p-3 text-white"><span class="font-black">أنت:</span> تم يا ريم، أرسلي العنوان الجديد وسأحدثه مباشرة.</div>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <input type="text" placeholder="اكتب الرد هنا..." class="flex-1 rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            <button type="button" class="rounded-xl bg-homy-green-700 px-4 py-3 text-sm font-black text-white"><span class="lang-ar">إرسال</span><span class="lang-en">Send</span></button>
                        </div>
                    </article>
                </div>
            </div>

            <div data-tab-pane="comments" class="hidden rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">تعليقات العملاء على المنتجات</span><span class="lang-en">Customer Product Comments</span></h2>
                <div class="mt-4 space-y-4">
                    <article class="rounded-xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                        <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">ريم أحمد - مكدوس جوز سوبر</p>
                        <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">المنتج ممتاز، هل لديكم عبوة 1.5 كغ؟</span><span class="lang-en">Great product, do you have 1.5kg option?</span></p>
                        <div class="mt-3 flex gap-2"><input type="text" placeholder="اكتب ردك..." class="flex-1 rounded-xl border border-homy-gold-200 px-4 py-2 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]"><button type="button" class="rounded-xl bg-homy-green-700 px-4 py-2 text-sm font-black text-white"><span class="lang-ar">رد</span><span class="lang-en">Reply</span></button></div>
                    </article>
                    <article class="rounded-xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                        <p class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400">Khaled N. - مربى تين ملكي</p>
                        <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">Very nice texture and less sugar, loved it.</p>
                        <div class="mt-3 flex gap-2"><input type="text" placeholder="اكتب ردك..." class="flex-1 rounded-xl border border-homy-gold-200 px-4 py-2 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]"><button type="button" class="rounded-xl bg-homy-green-700 px-4 py-2 text-sm font-black text-white"><span class="lang-ar">رد</span><span class="lang-en">Reply</span></button></div>
                    </article>
                </div>
            </div>
        </section>
 @endsection

  
