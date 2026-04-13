<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen bg-gray-50 p-4 lg:p-10 font-['Cairo']" dir="rtl">
    <header class="max-w-6xl mx-auto mb-8 flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-black text-homy-green-700">إضافة منتج جديد</h1>
            <p class="text-gray-500 mt-2">املأ البيانات أدناه لعرض منتجك في عالم الطعام الفاخر.</p>
        </div>
        <div class="flex gap-3">
            <button class="px-6 py-3 rounded-xl bg-white border border-gray-200 text-gray-500 font-bold hover:bg-gray-50 transition-all">حفظ كمسودة</button>
            <button class="px-8 py-3 rounded-xl bg-homy-green-700 text-white font-black shadow-lg shadow-homy-green-100 hover:bg-homy-green-600 transition-all active:scale-95">نشر المنتج الآن</button>
        </div>
    </header>

    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <div class="lg:col-span-2 space-y-8">
            
            <section class="bg-white p-8 rounded-3xl shadow-xl shadow-gray-200/40 border border-gray-100">
                <h3 class="text-xl font-black text-homy-green-700 mb-6 border-b pb-4 border-gray-50">المعلومات الأساسية</h3>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-homy-green-700 mb-2">اسم المنتج الملكي</label>
                        <input type="text" placeholder="مثلاً: مربى تين فاخر بالجوز" class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:border-homy-gold-500 focus:ring focus:ring-homy-gold-100 outline-none bg-gray-50 transition-all">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-homy-green-700 mb-2">نوع المنتج (التصنيف)</label>
                            <select class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:border-homy-gold-500 outline-none bg-gray-50 appearance-none">
                                <option>اختر التصنيف...</option>
                                <option>مربيات</option>
                                <option>مكدوس وأجبان</option>
                                <option>زيوت وعطارة</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-homy-green-700 mb-2">نوع التغليف</label>
                            <select class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:border-homy-gold-500 outline-none bg-gray-50">
                                <option>مرطبان زجاجي فاخر</option>
                                <option>علبة كرتونية صديقة للبيئة</option>
                                <option>تغليف هدايا ملكي</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-homy-green-700 mb-2">وصف المنتج (القصة وراء المذاق)</label>
                        <textarea rows="5" placeholder="اشرح للعملاء ما يميز هذا المذاق..." class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:border-homy-gold-500 outline-none bg-gray-50 resize-none"></textarea>
                    </div>
                </div>
            </section>

            <section class="bg-white p-8 rounded-3xl shadow-xl shadow-gray-200/40 border border-gray-100 overflow-hidden">
                <h3 class="text-xl font-black text-homy-green-700 mb-6 border-b pb-4 border-gray-50">صور المنتج والفيديو</h3>
                
                <div class="relative group">
                    <div id="image-track" class="flex gap-4 overflow-x-auto pb-4 scroll-smooth scrollbar-hide no-scrollbar" style="-ms-overflow-style: none; scrollbar-width: none;">
                        <div class="min-w-[150px] h-40 border-2 border-dashed border-homy-gold-200 rounded-2xl flex flex-col items-center justify-center text-homy-gold-500 cursor-pointer hover:bg-homy-gold-50 transition-all shrink-0">
                            <i class="fas fa-plus-circle text-2xl mb-2"></i>
                            <span class="text-xs font-bold">أضف صورة</span>
                        </div>
                        <div class="min-w-[150px] h-40 bg-gray-100 rounded-2xl relative shrink-0 overflow-hidden group/img">
                            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover">
                            <button class="absolute top-2 right-2 bg-red-500 text-white w-6 h-6 rounded-full text-[10px] opacity-0 group-hover/img:opacity-100 transition-all"><i class="fas fa-trash"></i></button>
                        </div>
                        <div class="min-w-[150px] h-40 bg-gray-100 rounded-2xl relative shrink-0 overflow-hidden group/img">
                            <img src="https://via.placeholder.com/150" class="w-full h-full object-cover">
                            <button class="absolute top-2 right-2 bg-red-500 text-white w-6 h-6 rounded-full text-[10px] opacity-0 group-hover/img:opacity-100 transition-all"><i class="fas fa-trash"></i></button>
                        </div>
                        <div class="min-w-[150px] h-40 bg-gray-100 rounded-2xl relative shrink-0 overflow-hidden group/img border-2 border-homy-green-700">
                             <img src="https://via.placeholder.com/150" class="w-full h-full object-cover">
                             <span class="absolute bottom-0 inset-x-0 bg-homy-green-700 text-white text-[10px] text-center py-1 font-bold uppercase">الرئيسية</span>
                        </div>
                         <div class="min-w-[150px] h-40 bg-homy-green-700 rounded-2xl flex flex-col items-center justify-center text-homy-gold-500 shrink-0 relative">
                            <i class="fas fa-play-circle text-3xl"></i>
                            <span class="text-[10px] text-white mt-2 font-bold">فيديو المنتج</span>
                         </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-sm font-bold text-homy-green-700 mb-2">رابط فيديو (YouTube / Vimeo)</label>
                    <input type="url" placeholder="أدخل رابط الفيديو لعرضه في صفحة المنتج" class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:border-homy-gold-500 outline-none bg-gray-50">
                </div>
            </section>
        </div>

        <div class="space-y-8">
            
            <section class="bg-white p-8 rounded-3xl shadow-xl shadow-gray-200/40 border border-gray-100">
                <h3 class="text-lg font-black text-homy-green-700 mb-6">التسعير والمخزون</h3>
                
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-bold text-homy-green-700 mb-2">السعر الأساسي (ر.س)</label>
                        <div class="relative">
                            <input type="number" placeholder="0.00" class="w-full px-5 py-3.5 rounded-xl border border-gray-200 focus:border-homy-gold-500 outline-none font-black text-xl">
                            <span class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 font-bold">ر.س</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-homy-green-700 mb-2">الكمية المتوفرة</label>
                        <div class="flex items-center justify-between bg-gray-50 p-2 rounded-2xl border border-gray-200">
                            <button onclick="changeQty(-1)" class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center text-homy-green-700 hover:bg-homy-gold-500 hover:text-white transition-all"><i class="fas fa-minus"></i></button>
                            <input id="qty-input" type="number" value="1" class="bg-transparent text-center font-black text-2xl w-20 outline-none border-none">
                            <button onclick="changeQty(1)" class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center text-homy-green-700 hover:bg-homy-gold-500 hover:text-white transition-all"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white p-8 rounded-3xl shadow-xl shadow-gray-200/40 border border-gray-100">
                <h3 class="text-lg font-black text-homy-green-700 mb-6">خيارات الدفع</h3>
                
                <div class="space-y-4">
                    <label class="flex items-center gap-3 p-4 rounded-xl border border-gray-100 cursor-pointer hover:bg-gray-50 transition-all">
                        <input type="checkbox" checked class="w-5 h-5 rounded border-gray-300 text-homy-green-700 focus:ring-homy-gold-500">
                        <span class="text-sm font-bold text-gray-600">الدفع عند الاستلام</span>
                    </label>
                    <label class="flex items-center gap-3 p-4 rounded-xl border border-gray-100 cursor-pointer hover:bg-gray-50 transition-all">
                        <input type="checkbox" class="w-5 h-5 rounded border-gray-300 text-homy-green-700 focus:ring-homy-gold-500">
                        <span class="text-sm font-bold text-gray-600">بطاقة ائتمان / مدى</span>
                    </label>
                    <label class="flex items-center gap-3 p-4 rounded-xl border border-gray-100 cursor-pointer hover:bg-gray-50 transition-all">
                        <input type="checkbox" class="w-5 h-5 rounded border-gray-300 text-homy-green-700 focus:ring-homy-gold-500">
                        <span class="text-sm font-bold text-gray-600">تحويل بنكي</span>
                    </label>
                </div>
            </section>

             <section class="bg-homy-green-700 p-8 rounded-3xl shadow-xl text-white">
                <h3 class="text-lg font-black mb-4">مميزات المنتج</h3>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-white/10 rounded-lg text-xs font-bold">عضوي 100%</span>
                    <span class="px-3 py-1 bg-white/10 rounded-lg text-xs font-bold">بدون مواد حافظة</span>
                    <span class="px-3 py-1 bg-white/10 rounded-lg text-xs font-bold">صنع منزلي</span>
                    <span class="px-3 py-1 bg-homy-gold-500 text-homy-green-700 rounded-lg text-xs font-black">+ إضافة ميزة</span>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="relative flex flex-col bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group max-w-sm">
    
    <div class="relative h-48 w-full overflow-hidden bg-gray-50">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
             alt="وجبة صحية" 
             class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-500">

        <div class="absolute top-3 start-3 bg-homy-gold-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm z-10">
            15% خصم
        </div>

        <button class="absolute top-3 end-3 p-2 bg-white/80 backdrop-blur-sm rounded-full text-gray-400 hover:text-homy-gold-500 hover:bg-white transition-all shadow-sm z-10">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
        </button>
    </div>



    <!-- the product card -->
    <div class="p-5 flex flex-col flex-grow">
        
        <div class="flex items-center justify-between mb-3">
            <span class="text-xs font-medium text-gray-500 flex items-center gap-1">
                <svg class="w-4 h-4 text-homy-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                مطعم المشويات الفاخرة
            </span>
            <div class="flex items-center gap-1 bg-homy-gold-50 px-2 py-0.5 rounded-md">
                <span class="text-xs font-bold text-homy-gold-600">4.8</span>
                <svg class="w-3 h-3 text-homy-gold-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
            </div>
        </div>

        <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-1" title="طبق مشاوي مشكل فاخر مع الأرز">طبق مشاوي مشكل فاخر مع الأرز</h3>
        
        <p class="text-sm text-gray-500 mb-4 line-clamp-2">
            تشكيلة من أفضل أنواع اللحوم الطازجة المشوية على الفحم مع التوابل الشرقية الأصيلة والبطاطس المقرمشة، تكفي لشخصين.
        </p>

        <div class="mt-auto flex items-center justify-between pt-4 border-t border-gray-100">
            <div class="flex flex-col">
                <span class="text-xs text-gray-400 line-through mb-0.5">$25.00</span>
                <span class="text-2xl font-extrabold text-homy-green-700">$18.<span class="text-sm">50</span></span>
            </div>
            
            <button class="flex items-center gap-2 bg-homy-green-700 hover:bg-homy-green-600 text-white px-5 py-2.5 rounded-xl transition-all font-semibold shadow-sm hover:shadow-homy-green-100 active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                <span>أضف للسلة</span>
            </button>
        </div>
        
    </div>
</div> 

<script>
    // وظيفة العداد (Quantity)
    function changeQty(amount) {
        const input = document.getElementById('qty-input');
        let current = parseInt(input.value);
        if (current + amount >= 0) {
            input.value = current + amount;
        }
    }

    // إضافة تأثير التمرير الأفقي بالماوس (اختياري لتحسين الـ UX)
    const track = document.getElementById('image-track');
    track.addEventListener('wheel', (evt) => {
        evt.preventDefault();
        track.scrollLeft += evt.deltaY;
    });
</script>

<style>
    /* إخفاء شريط التمرير الافتراضي للمظهر الاحترافي */
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
</body>
</html>