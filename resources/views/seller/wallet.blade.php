@extends('seller.layouts.master', ['title' => __('titles.messages')])

@section('content')
   <section class="space-y-5">
            <div class="grid gap-4 sm:grid-cols-3">
                <article class="kpi-card p-5"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">الرصيد المتاح</span><span class="lang-en">Available Balance</span></p><p class="mt-2 text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">12,340 SYP</p></article>
                <article class="kpi-card p-5"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">قيد التسوية</span><span class="lang-en">Pending Settlement</span></p><p class="mt-2 text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">2,180 SYP</p></article>
                <article class="kpi-card p-5"><p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">آخر تحويل</span><span class="lang-en">Last Payout</span></p><p class="mt-2 text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">3,650 SYP</p></article>
            </div>

            <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="grid gap-5 lg:grid-cols-[1.2fr_0.8fr]">
                    <div>
                        <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">سجل العمليات</span><span class="lang-en">Transactions</span></h2>
                        <div class="mt-4 overflow-x-auto custom-scrollbar">
                            <table class="min-w-full text-sm">
                                <thead><tr class="text-slate-500 dark:text-slate-300"><th class="py-2 text-right font-black"><span class="lang-ar">التاريخ</span><span class="lang-en">Date</span></th><th class="py-2 text-right font-black"><span class="lang-ar">النوع</span><span class="lang-en">Type</span></th><th class="py-2 text-right font-black"><span class="lang-ar">القيمة</span><span class="lang-en">Amount</span></th><th class="py-2 text-right font-black"><span class="lang-ar">الحالة</span><span class="lang-en">Status</span></th></tr></thead>
                                <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                                    <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">2026-04-24</td><td class="py-3"><span class="lang-ar">تحويل بنكي</span><span class="lang-en">Bank Payout</span></td><td class="py-3">3,650 SYP</td><td class="py-3"><span class="rounded-full bg-emerald-100 px-2 py-1 text-xs font-black text-emerald-700">Completed</span></td></tr>
                                    <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">2026-04-23</td><td class="py-3"><span class="lang-ar">مبيعات يومية</span><span class="lang-en">Daily Sales</span></td><td class="py-3">1,120 SYP</td><td class="py-3"><span class="rounded-full bg-sky-100 px-2 py-1 text-xs font-black text-sky-700">Settled</span></td></tr>
                                    <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25"><td class="py-3">2026-04-22</td><td class="py-3"><span class="lang-ar">رسوم المنصة</span><span class="lang-en">Platform Fee</span></td><td class="py-3">-190 SYP</td><td class="py-3"><span class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700">Deducted</span></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="rounded-xl border border-homy-gold-200 p-4 dark:border-homy-gold-600/35">
                        <h3 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">طلب سحب رصيد</span><span class="lang-en">Request Withdrawal</span></h3>
                        <div class="mt-3 space-y-3">
                            <input type="number" placeholder="المبلغ" class="w-full rounded-xl border border-homy-gold-200 px-3 py-2 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            <select class="w-full rounded-xl border border-homy-gold-200 px-3 py-2 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]"><option><span class="lang-ar">الحساب البنكي الرئيسي</span><span class="lang-en">Primary Bank Account</span></option></select>
                            <button type="button" class="w-full rounded-xl bg-homy-green-700 px-4 py-2.5 text-sm font-black text-white"><span class="lang-ar">إرسال طلب السحب</span><span class="lang-en">Submit Withdrawal</span></button>
                        </div>
                        <p class="mt-3 text-xs font-semibold text-slate-500 dark:text-slate-300"><span class="lang-ar">زمن التحويل المتوقع: 1-2 يوم عمل.</span><span class="lang-en">Estimated payout: 1-2 business days.</span></p>
                    </div>
                </div>
            </article>
        </section>
@endsection
