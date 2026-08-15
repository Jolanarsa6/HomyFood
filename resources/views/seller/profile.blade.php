@extends('seller.layouts.master')

@section('content')
    <section class="space-y-5">
        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <div class="flex flex-wrap items-center gap-4">
                <img id="sellerAvatar" src="{{ asset('images/a.jpg') }}" alt="Seller avatar"
                    class="h-24 w-24 rounded-2xl object-cover">
                <div>
                    <h1 class="text-2xl font-black text-homy-green-700 dark:text-homy-gold-400">{{ $profile->full_name }}
                    </h1>
                    <p class="text-sm font-semibold text-slate-500 dark:text-slate-300"><span>مالك متجر:
                            {{ $detail->username }}</span>
                    </p>
                </div>
            </div>
            {{-- <div class="mt-4"><label
                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                        class="lang-ar">تحديث الصورة الشخصية</span><span class="lang-en">Update
                        Avatar</span></label><input type="file" accept="image/*" data-preview-target="sellerAvatar"
                    data-preview-mode="single" class="w-full text-xs font-semibold"></div> --}}
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">البيانات
                    الشخصية</span><span class="lang-en">Personal Information</span></h2>
            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">الاسم الكامل</span><span class="lang-en">Full Name</span></label><input
                        type="text" value="{{ $profile->full_name }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">البريد الإلكتروني</span><span class="lang-en">Email</span></label><input
                        type="email" value="{{ $profile->email }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">رقم الجوال</span><span class="lang-en">Phone</span></label><input type="text"
                        value="{{ $profile->phone }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">تاريخ الميلاد</span><span class="lang-en">Birthdate</span></label><input
                        type="text" value="{{ $detail->birthdate }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
            </div>
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">معلومات
                    السكن</span><span class="lang-en">Home Information</span></h2>
            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">الدولة</span><span class="lang-en">Country</span></label><input type="text"
                        value="{{ $detail->country }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">المدينة</span><span class="lang-en">City</span></label><input type="text"
                        value="{{ $detail->city }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">الحي</span><span class="lang-en">Town</span></label><input type="email"
                        value="{{ $detail->town }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">العنوان</span><span class="lang-en">Address</span></label><input type="text"
                        value="{{ $detail->address }}"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
            </div>
        </article>

        <article
            class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
            <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">الأمان
                    والتحقق</span><span class="lang-en">Security & Verification</span></h2>
            <div class="mt-4 grid gap-4 sm:grid-cols-2">
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">كلمة مرور جديدة</span><span class="lang-en">New
                            Password</span></label><input type="password"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
                <div><label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                            class="lang-ar">تأكيد كلمة المرور</span><span class="lang-en">Confirm
                            Password</span></label><input type="password"
                        class="w-full rounded-xl border border-homy-gold-200 px-4 py-3 text-sm font-semibold dark:border-homy-gold-600/35 dark:bg-[#173326]">
                </div>
            </div>
            <div class="mt-4 space-y-2 text-sm font-bold text-slate-600 dark:text-slate-300">
                <label class="flex items-center gap-2"><input type="checkbox" checked
                        class="rounded border-homy-gold-300 text-homy-green-700"><span><span class="lang-ar">تفعيل
                            التحقق الثنائي (OTP)</span><span class="lang-en">Enable 2FA (OTP)</span></span></label>
                <label class="flex items-center gap-2"><input type="checkbox" checked
                        class="rounded border-homy-gold-300 text-homy-green-700"><span><span class="lang-ar">إشعار تسجيل
                            الدخول من جهاز جديد</span><span class="lang-en">Notify on new device
                            login</span></span></label>
            </div>
        </article>

        <div class="flex flex-wrap gap-3">
            <form action="{{ route('seller.profile.update') }}" method="POST">
                @csrf
                @method('put')
                <button type="submit" class="rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white"><span
                    class="lang-ar">حفظ التغييرات</span><span class="lang-en">Save Changes</span></button>
                </form>
            
                <button type="submit" 
                class="rounded-2xl border border-homy-gold-300 px-6 py-3 text-sm font-black text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300"><span
                class="lang-ar">إلغاء</span><span class="lang-en">Cancel</span></button>
            </div>
    </section>
@endsection
