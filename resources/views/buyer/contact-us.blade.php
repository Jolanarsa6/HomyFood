@extends('buyer.layouts.master')

@section('content')
    <div class="relative z-10">
        {{-- <div class="bg-homy-green-700 px-4 py-2 text-center text-xs font-bold text-white">
            <span class="lang-ar">فريقنا معك يوميًا من 9 صباحًا حتى 11 مساءً</span>
            <span class="lang-en">Our team is available daily from 9 AM to 11 PM</span>
        </div> --}}



        <main class="px-4 py-10">
            <section class="mx-auto w-full max-w-7xl">
                <div class="mb-8 text-center">
                    <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400">
                        <span class="lang-ar">تواصل معنا</span>
                        <span class="lang-en">Contact Us</span>
                    </h1>
                    <p class="mt-2 text-sm font-semibold text-slate-500 dark:text-slate-300">
                        <span class="lang-ar">نحن هنا للإجابة عن أي سؤال أو مساعدة في الطلبات.</span>
                        <span class="lang-en">We are here to answer any question and support your orders.</span>
                    </p>
                </div>

                <div class="grid gap-5 lg:grid-cols-3">
                    <div class="space-y-4 lg:col-span-1">
                        <article class="homy-card p-4">
                            <h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">الهاتف</span><span class="lang-en">Phone</span></h2>
                            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300 lang-en">+963 983 612
                                714</p>
                            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300 lang-ar">714 612 983 963+</p>
                        </article>
                        <article class="homy-card p-4">
                            <h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">البريد الإلكتروني</span><span class="lang-en">Email</span></h2>
                            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300">support@homyfood.com
                            </p>
                        </article>
                        <article class="homy-card p-4">
                            <h2 class="text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">العنوان</span><span class="lang-en">Address</span></h2>
                            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span
                                    class="lang-ar">طرطوس - الجمهورية العربية السورية</span><span class="lang-en">TARTOUS -
                                    Syrian Arabic Repablic</span></p>
                        </article>
                    </div>

                    <form class="homy-card p-5 lg:col-span-2" method="POST" action="{{ route('buyer.contact_us.store') }}">
                        @csrf
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">الاسم</span><span class="lang-en">Name</span></label>
                                <input type="text" name="name"
                                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                            <div>
                                <label
                                    class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                        class="lang-ar">البريد الإلكتروني</span><span class="lang-en">Email</span></label>
                                <input type="email" name="email"
                                    class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">الموضوع</span><span class="lang-en">Subject</span></label>
                            <input type="text" name="subject"
                                class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]">
                        </div>
                        <div class="mt-4">
                            <label class="mb-2 block text-sm font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                    class="lang-ar">رسالتك</span><span class="lang-en">Message</span></label>
                            <textarea rows="6" name="message"
                                class="w-full rounded-2xl border border-homy-gold-200 bg-white px-4 py-3 text-sm font-semibold outline-none focus:border-homy-gold-500 dark:border-homy-gold-600/35 dark:bg-[#173326]"></textarea>
                        </div>
                        <button type="submit"
                            class="mt-5 rounded-2xl bg-homy-green-700 px-6 py-3 text-sm font-black text-white transition hover:bg-homy-green-600">
                            <span class="lang-ar">إرسال الرسالة</span>
                            <span class="lang-en">Send Message</span>
                        </button>
                    </form>
                </div>
            </section>
        </main>
    </div>
@endsection
