<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="min-h-screen bg-gray-50 font-['Cairo'] antialiased py-12 px-4" dir="rtl">
    
    <div class="max-w-3xl mx-auto">
        
        <div class="mb-12 relative">
            <div class="flex justify-between items-center relative z-10">
                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-homy-green-700 text-white flex items-center justify-center shadow-lg shadow-homy-green-100 ring-4 ring-white">
                        <i class="fas fa-check text-xs"></i>
                    </div>
                    <span class="text-xs font-bold text-homy-green-700">البداية</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-homy-gold-500 text-white flex items-center justify-center shadow-lg shadow-homy-gold-100 ring-4 ring-white">
                        <span class="font-bold">2</span>
                    </div>
                    <span class="text-xs font-bold text-homy-gold-500">الملف الشخصي</span>
                </div>
                <div class="flex flex-col items-center gap-2">
                    <div class="w-10 h-10 rounded-full bg-white text-gray-300 border-2 border-gray-100 flex items-center justify-center">
                        <span class="font-bold">3</span>
                    </div>
                    <span class="text-xs font-bold text-gray-300">البيانات البنكية</span>
                </div>
            </div>
            <div class="absolute top-5 inset-x-0 h-0.5 bg-gray-200 -z-0">
                <div class="h-full bg-homy-green-700 transition-all duration-500" style="width: 50%;"></div>
            </div>
        </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-homy-green-100/20 border border-gray-50 overflow-hidden">
            
            <div class="p-8 lg:p-10 text-center border-b border-gray-50 bg-homy-gold-50/30">
                <h2 class="text-2xl font-black text-homy-green-700">لنبدأ بتجهيز متجرك الفاخر</h2>
                <p class="text-gray-500 mt-2 text-sm leading-relaxed">نريد التعرف عليك أكثر لتقديم أفضل تجربة بيع في "Homy Food"</p>
            </div>

            <div class="p-8 lg:p-10 space-y-8">
                
                <div class="space-y-4">
                    <label class="block text-sm font-bold text-homy-green-700">كيف سمعت عن عالم "Homy Food"؟</label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <button class="p-4 rounded-2xl border border-gray-100 hover:border-homy-gold-500 hover:bg-homy-gold-50 text-xs font-bold text-gray-500 transition-all focus:ring-2 focus:ring-homy-gold-100">شبكات التواصل</button>
                        <button class="p-4 rounded-2xl border-2 border-homy-green-700 bg-homy-green-50/50 text-xs font-bold text-homy-green-700 transition-all">صديق أو زميل</button>
                        <button class="p-4 rounded-2xl border border-gray-100 hover:border-homy-gold-500 hover:bg-homy-gold-50 text-xs font-bold text-gray-500 transition-all">إعلانات جوجل</button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-homy-green-700">المدينة</label>
                        <select class="w-full px-5 py-4 rounded-2xl border border-gray-100 bg-gray-50 focus:border-homy-gold-500 outline-none transition-all appearance-none">
                            <option>اختر مدينتك...</option>
                            <option>الرياض</option>
                            <option>جدة</option>
                            <option>دبي</option>
                        </select>
                        </div>
                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-homy-green-700">العمر التقديري</label>
                        <input type="number" placeholder="مثلاً: 28" class="w-full px-5 py-4 rounded-2xl border border-gray-100 bg-gray-50 focus:border-homy-gold-500 outline-none transition-all">
                    </div>
                </div>

                <div class="space-y-4">
                    <label class="block text-sm font-bold text-homy-green-700">طبيعة نشاطك التجاري</label>
                    <div class="space-y-3">
                        <label class="flex items-center gap-4 p-5 rounded-2xl border border-gray-100 cursor-pointer hover:shadow-md transition-all group">
                            <div class="w-6 h-6 rounded-full border-2 border-gray-200 group-hover:border-homy-gold-500 flex items-center justify-center">
                                <div class="w-3 h-3 bg-homy-gold-500 rounded-full opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-800">صناعة منزلية أصيلة</h4>
                                <p class="text-[10px] text-gray-400">أقوم بطبخ وتجهيز المنتجات بنفسي في المنزل.</p>
                            </div>
                        </label>
                        <label class="flex items-center gap-4 p-5 rounded-2xl border border-gray-100 cursor-pointer hover:shadow-md transition-all group">
                            <div class="w-6 h-6 rounded-full border-2 border-gray-200 group-hover:border-homy-gold-500 flex items-center justify-center">
                                <div class="w-3 h-3 bg-homy-gold-500 rounded-full opacity-0"></div>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-800">محل تجاري / علامة تجارية مسجلة</h4>
                                <p class="text-[10px] text-gray-400">لدي متجر قائم أو معمل مرخص رسمياً.</p>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-50 space-y-6">
                    <div class="flex items-center gap-3 text-homy-gold-600 bg-homy-gold-50 p-4 rounded-2xl">
                        <i class="fas fa-shield-alt text-lg"></i>
                        <p class="text-[10px] font-bold leading-relaxed">يتم تشفير بياناتك البنكية بأمان عالٍ وفق المعايير العالمية لضمان وصول مستحقاتك في مواعيدها.</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-bold text-homy-green-700 mb-2">رقم الآيبان (IBAN)</label>
                        <div class="relative">
                            <input type="text" placeholder="SA 0000 0000 0000 0000 0000" class="w-full px-5 py-4 rounded-2xl border border-gray-100 bg-gray-50 focus:border-homy-gold-500 outline-none font-mono tracking-widest text-center">
                            <i class="fas fa-university absolute right-5 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 lg:p-10 bg-gray-50/50 flex items-center justify-between">
                <button class="px-8 py-3.5 rounded-xl font-bold text-gray-400 hover:text-homy-green-700 transition-all flex items-center gap-2">
                    <i class="fas fa-arrow-right text-xs"></i> السابق
                </button>
                <button class="px-10 py-3.5 rounded-xl bg-homy-green-700 text-white font-black shadow-xl shadow-homy-green-100 hover:bg-homy-green-600 active:scale-95 transition-all flex items-center gap-2">
                    الخطوة التالية <i class="fas fa-arrow-left text-xs"></i>
                </button>
            </div>
        </div>
        <p class="mt-8 text-center text-[10px] text-gray-400">
            بالنقر على "الخطوة التالية"، أنت توافق على <a href="#" class="underline hover:text-homy-gold-500">شروط وأحكام البائع</a> في Homy Food.
        </p>
    </div>
</div>
</body>
</html>