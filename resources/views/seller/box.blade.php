
@extends('seller.layouts.master')

@section('content')
{{-- تذييل الصفحة غير مرئي لأننا سنستخدم تذييلًا عائمًا أسفل الشاشة --}}
<section>
<div class="mx-auto max-w-lg space-y-4 pb-24" x-data="{ 
    selected: [], 
    toggle(id) { 
        if(this.selected.includes(id)) { 
            this.selected = this.selected.filter(i => i !== id) 
        } else { 
            this.selected.push(id) 
        } 
    } 
}">
    
    {{-- رأس الصفحة مشابه للصورة --}}
    <div class="flex items-center justify-between rounded-[2rem] border border-homy-gold-200 bg-white/90 p-4 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85">
        <div class="flex items-center gap-3">
            <div class="flex -space-x-2">
                <template x-for="id in selected.slice(0, 3)" :key="id">
                    <div class="relative h-10 w-10 rounded-full border-2 border-white bg-homy-green-500 dark:border-[#12211B] flex items-center justify-center text-xs font-bold text-white shadow-sm">
                        <span x-text="'#' + id"></span>
                    </div>
                </template>
                <template x-if="selected.length > 3">
                    <div class="relative h-10 w-10 rounded-full border-2 border-white bg-slate-300 dark:border-[#12211B] flex items-center justify-center text-xs font-bold text-slate-700 shadow-sm">
                        +<span x-text="selected.length - 3"></span>
                    </div>
                </template>
                <template x-if="selected.length === 0">
                    <div class="text-sm font-medium text-slate-400 px-2">
                        <span class="lang-ar">اختر المنتجات</span>
                        <span class="lang-en">Select products</span>
                    </div>
                </template>
            </div>
        </div>
        <a href="{{ route('seller.dashboard') }}" class="h-10 w-10 rounded-full border border-homy-gold-200 flex items-center justify-center text-homy-green-700 dark:border-homy-gold-600/35 dark:text-homy-gold-300">
            <i class="fa-solid fa-xmark text-lg"></i>
        </a>
    </div>

    {{-- قسم "الأكثر طلباً" (مشابه لـ Frequently contacted) --}}
    <div class="px-2 text-xs font-black text-slate-500 dark:text-slate-400">
        <span class="lang-ar">المنتجات الأكثر مبيعاً لديك</span>
        <span class="lang-en">Your Best Sellers</span>
    </div>

    {{-- قائمة المنتجات --}}
    <div class="space-y-1 rounded-[1.5rem] border border-homy-gold-200 bg-white/90 p-2 dark:border-homy-gold-600/35 dark:bg-[#12211B]/85 divide-y divide-homy-gold-100 dark:divide-homy-gold-600/20">
        
        @foreach($products as $product)
        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-homy-gold-50 dark:hover:bg-homy-green-700/20 transition-colors cursor-pointer" @click="toggle({{ $product->id }})">
            
            {{-- صورة المنتج (أفاتار دائري) --}}
            <div class="relative h-12 w-12 shrink-0">
                @if($product->getFirstMediaUrl('product_images'))
                    <img src="{{ $product->getFirstMediaUrl('product_images', 'thumb') }}" alt="{{ $product->product_ar_name }}" class="h-full w-full rounded-full object-cover border border-homy-gold-100 dark:border-homy-gold-600/30">
                @else
                    <div class="h-full w-full rounded-full bg-homy-green-100 dark:bg-homy-green-700/40 flex items-center justify-center text-homy-green-700 dark:text-homy-gold-300 font-black text-lg">
                        {{ substr($product->product_ar_name, 0, 1) }}
                    </div>
                @endif
                <div class="absolute -bottom-1 -right-1 rounded-full bg-white dark:bg-[#12211B] p-0.5 border border-homy-gold-100 dark:border-homy-gold-600/30">
                    <span class="block px-1 text-[10px] font-bold text-homy-gold-600 dark:text-homy-gold-400">{{ $product->available_quantity }}</span>
                </div>
            </div>

            {{-- اسم المنتج والسعر --}}
            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-bold text-slate-700 dark:text-slate-200">
                    {{ $product->product_ar_name }}
                    <span class="text-xs font-normal text-slate-400 dark:text-slate-500">({{ $product->product_en_name }})</span>
                </p>
                <p class="text-xs font-bold text-homy-green-700 dark:text-homy-gold-400">
                    {{ number_format($product->price) }} SAR
                </p>
            </div>

            {{-- زر الاختيار الدائري (مشابه للصورة) --}}
            <div class="shrink-0 flex items-center justify-center w-6 h-6 rounded-full border-2 border-slate-400 dark:border-slate-500 transition-colors duration-200"
                 :class="selected.includes({{ $product->id }}) ? 'bg-homy-green-700 border-homy-green-700 dark:bg-homy-gold-500 dark:border-homy-gold-500' : ''">
                <i class="fa-solid fa-check text-[10px] text-white opacity-0 transition-opacity"
                   :class="selected.includes({{ $product->id }}) ? 'opacity-100' : ''"></i>
            </div>
        </div>
        @endforeach

        @if($products->isEmpty())
        <div class="p-8 text-center text-slate-400 dark:text-slate-500">
            <i class="fa-solid fa-box-open text-4xl mb-2"></i>
            <p class="font-bold"><span class="lang-ar">لا توجد منتجات لإضافتها</span><span class="lang-en">No products to add</span></p>
            <a href="{{ route('seller.products.create') }}" class="mt-2 inline-block text-xs font-black text-homy-gold-600 underline">
                <span class="lang-ar">أضف منتجاً الآن</span>
                <span class="lang-en">Add product now</span>
            </a>
        </div>
        @endif

    </div>

    {{-- التذييل العائم الثابت (مشابه لأسفل شاشة واتساب) --}}
    <div class="fixed bottom-0 left-0 right-0 bg-white/90 dark:bg-[#12211B]/90 backdrop-blur-md border-t border-homy-gold-200/50 dark:border-homy-gold-600/20 p-4 safe-area-pb z-50">
        <div class="mx-auto max-w-lg flex items-center justify-between gap-4">
            
            {{-- جهة اليسار: زر الحذف / إعادة التعيين --}}
            <div class="flex items-center gap-3">
                <button @click="selected = []" class="h-12 w-12 rounded-2xl border border-red-200 dark:border-red-800/40 text-red-600 dark:text-red-400 flex items-center justify-center hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors">
                    <i class="fa-solid fa-trash-can text-lg"></i>
                </button>
                <span class="text-xs font-black text-slate-500 dark:text-slate-400" x-text="selected.length + ' ' + (selected.length === 1 ? '{{ __('منتج') }}' : '{{ __('منتجات') }}')"></span>
            </div>

            {{-- جهة اليمين: زر الإرسال (السهم الأخضر الكبير) --}}
            <form action="{{ route('seller.box.store') }}" method="POST" class="flex-1 flex justify-end">
                @csrf
                <input type="hidden" name="product_ids" :value="JSON.stringify(selected)">
                <button type="submit" 
                        :disabled="selected.length === 0"
                        class="h-14 rounded-2xl bg-homy-green-700 dark:bg-homy-gold-500 text-white flex items-center justify-center px-6 shadow-lg transition-all hover:scale-105 active:scale-95"
                        :class="selected.length === 0 ? 'opacity-40 cursor-not-allowed hover:scale-100' : ''">
                    <span class="font-black text-sm mr-2">
                        <span class="lang-ar">إنشاء الصندوق</span>
                        <span class="lang-en">Create Box</span>
                    </span>
                    <i class="fa-solid fa-arrow-right text-lg"></i>
                </button>
            </form>
        </div>
    </div>

</div>

{{-- إضافة استدعاء Alpine.js إذا لم يكن مضمناً في الـ layout --}}
{{-- @push('scripts') <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> @endpush --}}
 </section>
@endsection