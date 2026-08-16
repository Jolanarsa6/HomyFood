@extends('admin.layouts.master',['title'=> __('titles.products_type')])

@section('content')
    <section class="space-y-6">
        <article
            class="rounded-[2rem] border border-homy-gold-200 bg-gradient-to-br from-homy-gold-50 via-white to-homy-green-100/60 p-6 dark:border-homy-gold-600/35 dark:from-[#15261f] dark:via-[#12211B] dark:to-[#183629]">
            <h1 class="text-3xl font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">إدارة أنواع
                    المنتجات</span><span class="lang-en">Manage Product Types</span></h1>
            <p class="mt-2 text-sm font-semibold text-slate-600 dark:text-slate-300"><span class="lang-ar">أضف نوعًا جديدًا أو
                    عطّل نوعًا مخالفًا ليظهر للبائعين أثناء إضافة المنتجات.</span><span class="lang-en">Add new product types
                    or disable problematic ones for all vendors.</span></p>
        </article>
        <div class="grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
            <article
                class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">الأنواع
                        الحالية</span><span class="lang-en">Current Types</span></h2>
                <div class="mt-4 overflow-x-auto custom-scrollbar">
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr class="text-slate-500 dark:text-slate-300">
                                <th class="py-2 text-right font-black"><span class="lang-ar">النوع</span><span
                                        class="lang-en">Type</span></th>
                                <th class="py-2 text-right font-black"><span class="lang-ar">عدد المنتجات</span><span
                                        class="lang-en">Products</span></th>
                                        <th class="py-2 text-right font-black"><span class="lang-ar">الوصف</span><span
                                        class="lang-en">Description</span></th>
                                <th class="py-2 px-8 text-right font-black"><span class="lang-ar">إجراء</span><span
                                        class="lang-en">Action</span></th>
                            </tr>
                        </thead>
                        <tbody class="font-semibold text-slate-600 dark:text-slate-300">
                            @foreach ($categories as $category)
                                <tr class="border-t border-homy-gold-100 dark:border-homy-gold-600/25">
                                    <td class="p-3">{{ $category->name }}</td>

                                    <td class="p-3">{{ count($category->products) }}</td>
                                    <td class="p-3">{{ $category->description }}</td>
                                    <form action="{{ route('admin.delete_category', $category->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <td class="py-3"><x-danger-button><span class="lang-ar">حذف</span><span
                                                    class="lang-en">Delete</span></x-danger-button></td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </article>

            <article
                class="rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-5 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
                <h2 class="text-lg font-black text-homy-green-700 dark:text-homy-gold-400"><span class="lang-ar">إضافة نوع
                        جديد</span><span class="lang-en">Add New Type</span></h2>
                <form class="mt-4 space-y-3" method="POST" action="{{ route('admin.add_category') }}">
                    @csrf
                    <input type="hidden" name="admin_id" value="{{ Auth::guard('admin')->user() }}">
                    <div><label class="mb-1 block text-xs font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">اسم النوع</span><span class="lang-en">Type Name</span></label>
                                <input name="name" type="text"
                            class="w-full rounded-xl border border-homy-gold-200 px-3 py-2 text-sm dark:border-homy-gold-600/35 dark:bg-homy-green-700/25">
                    </div>
                    <div><label class="mb-1 block text-xs font-black text-homy-green-700 dark:text-homy-gold-400"><span
                                class="lang-ar">الوصف</span><span class="lang-en">Description</span></label>
                        <textarea rows="4" name="description"
                            class="w-full rounded-xl border border-homy-gold-200 px-3 py-2 text-sm dark:border-homy-gold-600/35 dark:bg-homy-green-700/25"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full rounded-xl bg-homy-green-700 px-4 py-2 text-sm font-black text-white"><span
                            class="lang-ar">إضافة النوع</span><span class="lang-en">Create Type</span></button>
                </form>
            </article>
        </div>
    </section>
@endSection
