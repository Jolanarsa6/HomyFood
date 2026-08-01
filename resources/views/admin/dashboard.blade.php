@extends('admin.layouts.master')

@section('content')


    <section class="space-y-6">
        <article
            class="relative overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
            <div
                class="absolute -left-20 -top-20 h-52 w-52 rounded-full bg-homy-gold-200/40 blur-3xl dark:bg-homy-gold-600/20">
            </div>
            <div
                class="absolute -bottom-24 -right-20 h-60 w-60 rounded-full bg-homy-green-500/30 blur-3xl dark:bg-homy-green-500/20">
            </div>
            <div class="relative flex flex-wrap items-start justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">لوحة
                            التحكم  </span><span class="lang-en">Mission Dashboard</span></h1>
                    <p class="mt-2 max-w-2xl text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300"><span
                            class="lang-ar">إشراف كامل على البائعين، المدفوعات، جودة المنتجات، التجربة التشغيلية، والنمو
                            اليومي للمنصة من نقطة واحدة قوية.</span><span class="lang-en">Oversee vendors, payments, product
                            quality, operational experience, and platform growth from one powerful center.</span></p>
                </div>
                <div class="flex flex-wrap gap-2 text-xs font-black">
                    <a href="{{ route('admin.join_request') }}" class="rounded-xl bg-homy-green-700 px-4 py-2 text-white"><span
                            class="lang-ar">طلبات الانضمام</span><span class="lang-en">Join Requests</span></a>
                    <a href="{{ route('admin.show_site_analytics') }}"
                        class="rounded-xl border border-homy-gold-300 px-4 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                            class="lang-ar">لوحة الإحصائيات</span><span class="lang-en">Analytics</span></a>
                </div>
            </div>
        </article>

        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
              <article class="kpi-card p-4">
                  <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">إجمالي المبيعات
                          الشهرية</span><span class="lang-en">Monthly GMV</span></p>
                  <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">  SAR</p>
                  <p class="mt-1 text-xs font-bold text-emerald-600">+18.4%</p>
              </article>
              <article class="kpi-card p-4">
                  <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">البائعون
                          النشطون</span><span class="lang-en">Active Vendors</span></p>
                  <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ count($sellers) }}</p>
                  <p class="mt-1 text-xs font-bold text-homy-gold-600"><span class="lang-ar">{{ count($sellers) }} جديد هذا الأسبوع</span><span
                          class="lang-en">42 new this week</span></p>
              </article>       
    

            <article class="kpi-card p-4">
                <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">معدل رضا
                        العملاء</span><span class="lang-en">Customer Satisfaction</span></p>
                <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">96.1%</p>
                <p class="mt-1 text-xs font-bold text-sky-600"><span class="lang-ar">4.8/5 متوسط التقييم</span><span
                        class="lang-en">4.8/5 average rating</span></p>
            </article>
            <article class="kpi-card p-4">
                <p class="text-xs font-black text-slate-500 dark:text-slate-300"><span class="lang-ar">قضايا تحتاج
                        تدخل</span><span class="lang-en">Needs Attention</span></p>
                <p class="mt-2 text-2xl font-black text-red-600">14</p>
                <p class="mt-1 text-xs font-bold text-red-600"><span class="lang-ar">نزاعات وطلبات حساسة</span><span
                        class="lang-en">Disputes & sensitive cases</span></p>
            </article>
        </div>

        <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
            <article
                class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <div class="mb-4 flex items-center justify-between">
                    <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">طلبات
                            تتطلب قرار فوري</span><span class="lang-en">Actions Requiring Immediate Decision</span></h2>
                    <a href="vendor-applications.html" class="text-xs font-black text-homy-gold-600 underline"><span
                            class="lang-ar">إدارة الطلبات</span><span class="lang-en">Manage</span></a>
                </div>
                <div class="overflow-x-auto custom-scrollbar">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-slate-500 dark:text-slate-300">
                                <th class="py-2 text-right font-black"><span class="lang-ar">النوع</span><span
                                        class="lang-en">Type</span></th>
                                <th class="py-2 text-right font-black"><span class="lang-ar">المرجع</span><span
                                        class="lang-en">Reference</span></th>
                                <th class="py-2 text-right font-black"><span class="lang-ar">الأولوية</span><span
                                        class="lang-en">Priority</span></th>
                                <th class="py-2 text-right font-black"><span class="lang-ar">الإجراء</span><span
                                        class="lang-en">Action</span></th>
                            </tr>
                        </thead>
                        <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="py-3"><span class="lang-ar">انضمام بائع</span><span class="lang-en">Vendor
                                        Join</span></td>
                                <td class="py-3">#VJ-9032</td>
                                <td class="py-3"><span
                                        class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700"><span
                                            class="lang-ar">متوسط</span><span class="lang-en">Medium</span></span></td>
                                <td class="py-3"><a href="vendor-applications.html"
                                        class="text-xs font-black text-homy-gold-600 underline"><span
                                            class="lang-ar">مراجعة</span><span class="lang-en">Review</span></a></td>
                            </tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="py-3"><span class="lang-ar">نزاع دفع</span><span class="lang-en">Payment
                                        Dispute</span></td>
                                <td class="py-3">#DP-1801</td>
                                <td class="py-3"><span
                                        class="rounded-full bg-red-100 px-2 py-1 text-xs font-black text-red-700"><span
                                            class="lang-ar">عالي</span><span class="lang-en">High</span></span></td>
                                <td class="py-3"><a href="disputes.html"
                                        class="text-xs font-black text-red-600 underline"><span class="lang-ar">حل
                                            الآن</span><span class="lang-en">Resolve</span></a></td>
                            </tr>
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="py-3"><span class="lang-ar">متجر مخالف</span><span class="lang-en">Store
                                        Violation</span></td>
                                <td class="py-3">#SV-118</td>
                                <td class="py-3"><span
                                        class="rounded-full bg-red-100 px-2 py-1 text-xs font-black text-red-700"><span
                                            class="lang-ar">حرج</span><span class="lang-en">Critical</span></span></td>
                                <td class="py-3"><a href="stores-control.html"
                                        class="text-xs font-black text-red-600 underline"><span
                                            class="lang-ar">تجميد</span><span class="lang-en">Suspend</span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>

            <article
                class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">حالة
                        المنصة المباشرة</span><span class="lang-en">Live Platform Health</span></h2>
                <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    <div
                        class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                        <span><span class="lang-ar">الخوادم</span><span class="lang-en">Servers</span></span><span
                            class="font-black text-emerald-600">99.99%</span></div>
                    <div
                        class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                        <span><span class="lang-ar">بوابات الدفع</span><span class="lang-en">Payment
                                Gateways</span></span><span class="font-black text-emerald-600">Operational</span></div>
                    <div
                        class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                        <span><span class="lang-ar">التنبيهات الأمنية</span><span class="lang-en">Security
                                Alerts</span></span><span class="font-black text-amber-600">2 Warnings</span></div>
                </div>

                <div class="mt-5 grid gap-2 text-xs font-black sm:grid-cols-2">
                    <a href="audit-logs.html" class="rounded-xl bg-homy-green-700 px-3 py-2 text-center text-white"><span
                            class="lang-ar">سجل النشاط</span><span class="lang-en">Audit Logs</span></a>
                    <a href="system-settings.html"
                        class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                            class="lang-ar">إعدادات النظام</span><span class="lang-en">System Settings</span></a>
                </div>
            </article>
        </div>
    </section>
@endSection
