@extends('admin.layouts.master')

@section('content')

<section class="space-y-6">
    {{-- رأس الصفحة مع الأزرار --}}
    <article class="relative overflow-hidden rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
        <div class="absolute -left-20 -top-20 h-52 w-52 rounded-full bg-homy-gold-200/40 blur-3xl dark:bg-homy-gold-600/20"></div>
        <div class="absolute -bottom-24 -right-20 h-60 w-60 rounded-full bg-homy-green-500/30 blur-3xl dark:bg-homy-green-500/20"></div>
        
        <div class="relative flex flex-wrap items-start justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">لوحة التحكم</span>
                    <span class="lang-en">Mission Dashboard</span>
                </h1>
                <p class="mt-2 max-w-2xl text-sm font-semibold leading-7 text-slate-600 dark:text-slate-300">
                    <span class="lang-ar">إشراف كامل على البائعين، المنتجات، تفاعل العملاء، ونمو المنصة اليومي.</span>
                    <span class="lang-en">Oversee vendors, products, customer engagement, and platform growth daily.</span>
                </p>
            </div>
            <div class="flex flex-wrap gap-2 text-xs font-black">
                <a href="{{ route('admin.join_request') }}" class="rounded-xl bg-homy-green-700 px-4 py-2 text-white">
                    <span class="lang-ar">طلبات الانضمام</span>
                    <span class="lang-en">Join Requests</span>
                </a>
                <a href="{{ route('admin.show_site_analytics') }}" class="rounded-xl border border-homy-gold-300 px-4 py-2 text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
                    <span class="lang-ar">لوحة الإحصائيات</span>
                    <span class="lang-en">Analytics</span>
                </a>
            </div>
        </div>
    </article>

    {{-- بطاقات مؤشرات الأداء الرئيسية (KPI) --}}
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">قيمة السلة الإجمالية</span>
                <span class="lang-en">Total Cart Value</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ number_format($totalCartValue) }} SAR</p>
            <p class="mt-1 text-xs font-bold text-emerald-600">
                <span class="lang-ar">تقديري للطلب</span>
                <span class="lang-en">Estimated demand</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">البائعون النشطون</span>
                <span class="lang-en">Active Vendors</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ $activeVendors }}</p>
            <p class="mt-1 text-xs font-bold text-homy-gold-600">
                <span class="lang-ar">{{ $activeVendors }} بائع معتمد</span>
                <span class="lang-en">{{ $activeVendors }} approved sellers</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">تعليقات العملاء</span>
                <span class="lang-en">Customer Feedback</span>
            </p>
            <p class="mt-2 text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ $totalComments }}</p>
            <p class="mt-1 text-xs font-bold text-sky-600">
                <span class="lang-ar">جميع المراجعات</span>
                <span class="lang-en">Total reviews</span>
            </p>
        </article>

        <article class="kpi-card p-4">
            <p class="text-xs font-black text-slate-500 dark:text-slate-300">
                <span class="lang-ar">طلبات معلقة</span>
                <span class="lang-en">Pending Requests</span>
            </p>
            <p class="mt-2 text-2xl font-black text-red-600">{{ $pendingSellers }}</p>
            <p class="mt-1 text-xs font-bold text-red-600">
                <span class="lang-ar">بائعون بانتظار الموافقة</span>
                <span class="lang-en">Sellers awaiting approval</span>
            </p>
        </article>
    </div>

    {{-- قسم الجدول والحالة المباشرة --}}
    <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        {{-- جدول الطلبات المعلقة --}}
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <div class="mb-4 flex items-center justify-between">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                    <span class="lang-ar">طلبات انضمام جديدة</span>
                    <span class="lang-en">New Join Requests</span>
                </h2>
                <a href="{{ route('admin.join_request') }}" class="text-xs font-black text-homy-gold-600 underline">
                    <span class="lang-ar">إدارة الكل</span>
                    <span class="lang-en">Manage All</span>
                </a>
            </div>
            
            <div class="overflow-x-auto custom-scrollbar">
                <table class="min-w-full text-sm">
                    <thead>
                        <tr class="text-slate-500 dark:text-slate-300">
                            <th class="py-2 text-right font-black">
                                <span class="lang-ar">الاسم</span>
                                <span class="lang-en">Name</span>
                            </th>
                            <th class="py-2 text-right font-black">
                                <span class="lang-ar">البريد</span>
                                <span class="lang-en">Email</span>
                            </th>
                            <th class="py-2 text-right font-black">
                                <span class="lang-ar">تاريخ الطلب</span>
                                <span class="lang-en">Date</span>
                            </th>
                            <th class="py-2 text-right font-black">
                                <span class="lang-ar">الإجراء</span>
                                <span class="lang-en">Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                        @forelse($pendingRequests as $request)
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td class="py-3">{{ $request->full_name }}</td>
                                <td class="py-3">{{ $request->email }}</td>
                                <td class="py-3">{{ $request->created_at->format('Y-m-d') }}</td>
                                <td class="py-3">
                                    <a href="{{ route('admin.join_request') }}" class="text-xs font-black text-homy-gold-600 underline">
                                        <span class="lang-ar">مراجعة</span>
                                        <span class="lang-en">Review</span>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                <td colspan="4" class="py-3 text-center text-slate-400">
                                    <span class="lang-ar">لا توجد طلبات معلقة حالياً</span>
                                    <span class="lang-en">No pending requests currently</span>
                                </td>
                            </tr>
                        @endforelse
                        
                        {{-- صفوف إضافية لملء الجدول إذا كان العدد أقل من 3 (للتنسيق) --}}
                        @if($pendingRequests->count() < 3 && $pendingRequests->count() > 0)
                            @for($i = $pendingRequests->count(); $i < 3; $i++)
                                <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25 opacity-50">
                                    <td class="py-3">—</td>
                                    <td class="py-3">—</td>
                                    <td class="py-3">—</td>
                                    <td class="py-3">—</td>
                                </tr>
                            @endfor
                        @endif
                    </tbody>
                </table>
            </div>
        </article>

        {{-- حالة المنصة المباشرة --}}
        <article class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400">
                <span class="lang-ar">حالة المنصة المباشرة</span>
                <span class="lang-en">Live Platform Health</span>
            </h2>
            <div class="mt-4 space-y-3 text-sm font-semibold text-slate-600 dark:text-slate-300">
                <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                    <span><span class="lang-ar">الخوادم</span><span class="lang-en">Servers</span></span>
                    <span class="font-black text-emerald-600">100%</span>
                </div>
                <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                    <span><span class="lang-ar">اتصال قاعدة البيانات</span><span class="lang-en">Database</span></span>
                    <span class="font-black text-emerald-600">Online</span>
                </div>
                <div class="flex items-center justify-between rounded-xl border border-homy-gold-200 px-3 py-2 dark:border-homy-gold-600/30">
                    <span><span class="lang-ar">التنبيهات الأمنية</span><span class="lang-en">Security Alerts</span></span>
                    <span class="font-black text-emerald-600">0 Warnings</span>
                </div>
            </div>

            <div class="mt-5 grid gap-2 text-xs font-black sm:grid-cols-2">
                <a href="#" class="rounded-xl bg-homy-green-700 px-3 py-2 text-center text-white">
                    <span class="lang-ar">سجل النشاط</span>
                    <span class="lang-en">Audit Logs</span>
                </a>
                <a href="#" class="rounded-xl border border-homy-gold-300 px-3 py-2 text-center text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
                    <span class="lang-ar">إعدادات النظام</span>
                    <span class="lang-en">System Settings</span>
                </a>
            </div>
        </article>
    </div>
</section>

@endsection
