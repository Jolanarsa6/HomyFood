@extends('admin.layouts.master')

@section('content')
    <section class="space-y-6">

    <article
        class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
        <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">إدارة البائعين
                </span><span class="lang-en">Manage Sellers</span></h1>
        <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">أضف بائعاً جديدًا أو
                عدل بعض تفاصيل البائعين</span><span class="lang-en">Add new seller
                or edit any seller details.</span></p>
    </article>

    <article
        class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
        <div class="mb-4 flex items-center justify-between">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">قائمة طلبات
                    الانضمام</span><span class="lang-en">Applications Queue</span></h2>
        </div>
        <div class="overflow-x-auto custom-scrollbar">
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="text-slate-500 dark:text-slate-300">
                        <th class="py-2 text-right font-black"><span class="lang-ar">الطلب</span><span
                                class="lang-en">Request</span></th>
                        <th class="py-2 text-right font-black"><span class="lang-ar">البائع</span><span
                                class="lang-en">Vendor</span></th>
                        <th class="py-2 text-right font-black"><span class="lang-ar">الحالة</span><span
                                class="lang-en">Status</span></th>
                        <th class="py-2 text-center font-black"><span class="lang-ar">التفاصيل</span><span
                                class="lang-en">Details</span></th>
                    </tr>
                </thead>
                <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                    @foreach ($users as $user)
                        <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                            <td class="py-3">{{ $loop->iteration }}</td>
                            <td class="py-3">{{ $user->full_name }}</td>
                            <td class="py-3"><span
                                    class="rounded-full bg-amber-100 px-2 py-1 text-xs font-black text-amber-700">{{ $user->status }}</span>
                            </td>
                            {{-- <td class="py-3 flex">
                                    <form action="{{ route('admin.approve_joinRequest') }}" class=""
                                        id="approved-update-form" method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <button type="submit" class="rounded-xl bg-emerald-600 px-4 py-2 text-white"><span
                                                class="lang-ar">قبول</span><span class="lang-en">Approve</span></button>
                                    </form>
                                    <h1>&nbsp;&nbsp;</h1>
                                    <form action="{{ route('admin.reject_joinRequest') }}" class=""
                                        id="reject-update-form" method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <button type="submit"
                                            class="rounded-xl border border-red-300 px-4 py-2 text-red-600"><span
                                                class="lang-ar">رفض</span><span class="lang-en">Reject</span></button>
                                    </form>
                                </td> --}}
                            <td><x-primary-button class=""><span class="lang-ar">مزيد من التفاصيل</span><span
                                        class="lang-en">More Details</span></x-primary-button></td>
                            </th>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </article>
    </section>
@endsection
