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
    <div class="min-h-screen bg-gray-50 font-['Cairo'] p-4 lg:p-10" dir="rtl">
    
    <header class="max-w-7xl mx-auto mb-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            <div>
                <h1 class="text-3xl font-black text-homy-green-700">إدارة الطلبات</h1>
                <p class="text-gray-500 mt-1 text-sm font-bold">لديك 5 طلبات جديدة بحاجة لتحضيرك اليوم ✨</p>
            </div>
            <div class="flex gap-3">
                <button class="bg-white border border-gray-200 p-3 rounded-xl text-gray-500 hover:bg-gray-50 transition-all shadow-sm">
                    <i class="fas fa-download ml-2"></i> تصريف التقرير (Excel)
                </button>
                <button class="bg-homy-green-700 text-white px-6 py-3 rounded-xl font-black shadow-lg shadow-homy-green-100 hover:bg-homy-green-600 transition-all">
                    تحديث القائمة
                </button>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-shopping-basket"></i></div>
                <div><p class="text-xs text-gray-400 font-bold">إجمالي الطلبات</p><p class="text-xl font-black text-homy-green-700">124</p></div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-homy-gold-50 text-homy-gold-600 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-clock"></i></div>
                <div><p class="text-xs text-gray-400 font-bold">قيد التحضير</p><p class="text-xl font-black text-homy-green-700">05</p></div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-green-50 text-green-500 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-truck-loading"></i></div>
                <div><p class="text-xs text-gray-400 font-bold">خرج للتوصيل</p><p class="text-xl font-black text-homy-green-700">03</p></div>
            </div>
            <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-red-50 text-red-500 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-undo"></i></div>
                <div><p class="text-xs text-gray-400 font-bold">طلبات ملغاة</p><p class="text-xl font-black text-homy-green-700">02</p></div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto bg-white rounded-[2.5rem] shadow-2xl shadow-gray-200/40 border border-gray-100 overflow-hidden">
        
        <div class="p-6 border-b border-gray-50 bg-gray-50/30 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div class="flex items-center gap-2 overflow-x-auto no-scrollbar">
                <button class="px-6 py-3 rounded-xl bg-homy-green-700 text-white font-black text-sm shrink-0">الكل</button>
                <button class="px-6 py-3 rounded-xl bg-white text-gray-500 font-bold text-sm border border-gray-100 hover:bg-homy-gold-50 hover:text-homy-green-700 transition-all shrink-0">بانتظار التحضير</button>
                <button class="px-6 py-3 rounded-xl bg-white text-gray-500 font-bold text-sm border border-gray-100 hover:bg-homy-gold-50 hover:text-homy-green-700 transition-all shrink-0">جاهز للتسليم</button>
                <button class="px-6 py-3 rounded-xl bg-white text-gray-500 font-bold text-sm border border-gray-100 hover:bg-homy-gold-50 hover:text-homy-green-700 transition-all shrink-0">مكتمل</button>
                </div>
            
            <div class="relative w-full lg:w-72">
                <input type="text" placeholder="ابحث برقم الطلب أو اسم العميل..." class="w-full bg-white border border-gray-200 py-3 pr-10 pl-4 rounded-xl text-xs focus:ring-2 focus:ring-homy-gold-100 outline-none shadow-sm transition-all">
                <i class="fas fa-search absolute right-4 top-1/2 -translate-y-1/2 text-gray-300"></i>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-right border-collapse">
                <thead class="bg-gray-50/50 text-[10px] text-gray-400 uppercase tracking-widest font-black">
                    <tr>
                        <th class="px-8 py-5 border-b border-gray-100">رقم الطلب والعميل</th>
                        <th class="px-8 py-5 border-b border-gray-100">تفاصيل المنتجات</th>
                        <th class="px-8 py-5 border-b border-gray-100">تاريخ الطلب</th>
                        <th class="px-8 py-5 border-b border-gray-100">طريقة الدفع</th>
                        <th class="px-8 py-5 border-b border-gray-100">إجمالي المبلغ</th>
                        <th class="px-8 py-5 border-b border-gray-100">حالة الطلب</th>
                        <th class="px-8 py-5 border-b border-gray-100">الإجراءات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-homy-gold-50/20 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full bg-homy-gold-500/10 text-homy-gold-600 flex items-center justify-center font-black border border-homy-gold-100 shadow-sm">س</div>
                                <div>
                                    <p class="font-black text-homy-green-700 text-sm">#HOMY-8842</p>
                                    <p class="text-[10px] text-gray-400 font-bold">سارة أحمد • الرياض</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="text-xs text-gray-600 font-bold leading-relaxed">
                                <span class="bg-gray-100 px-2 py-0.5 rounded text-[10px] ml-1">x2</span> مربى تين فاخر<br>
                                <span class="bg-gray-100 px-2 py-0.5 rounded text-[10px] ml-1">x1</span> زيتون أخضر متبل
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-xs font-bold text-gray-500">اليوم</p>
                            <p class="text-[10px] text-gray-300">09:45 م</p>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2 text-xs font-bold text-gray-500">
                                <i class="far fa-credit-card text-homy-gold-500"></i> بطاقة مدى
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-lg font-black text-homy-green-700">185.00 <span class="text-[10px] text-gray-400">ر.س</span></p>
                        </td>
                        <td class="px-8 py-6">
                            <select class="bg-homy-gold-50 text-homy-gold-600 px-3 py-1.5 rounded-lg text-[10px] font-black border-none outline-none focus:ring-2 focus:ring-homy-gold-200 cursor-pointer">
                                <option>بانتظار التحضير</option>
                                <option>قيد التجهيز</option>
                                <option>جاهز للتوصيل</option>
                                <option>تم الإلغاء</option>
                            </select>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex gap-2">
                                <button class="w-9 h-9 rounded-xl bg-white border border-gray-100 text-gray-400 hover:text-homy-green-700 hover:shadow-md transition-all flex items-center justify-center">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="w-9 h-9 rounded-xl bg-white border border-gray-100 text-gray-400 hover:text-blue-500 hover:shadow-md transition-all flex items-center justify-center">
                                    <i class="fas fa-print"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-homy-gold-50/20 transition-colors group">
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full bg-gray-100 text-gray-400 flex items-center justify-center font-black border border-gray-200">م</div>
                                <div>
                                    <p class="font-black text-homy-green-700 text-sm">#HOMY-8841</p>
                                    <p class="text-[10px] text-gray-400 font-bold">محمد العلي • جدة</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <div class="text-xs text-gray-600 font-bold leading-relaxed">
                                <span class="bg-gray-100 px-2 py-0.5 rounded text-[10px] ml-1">x1</span> مكدوس سوري فاخر
                            </div>
                        </td>
                        <td class="px-8 py-6 text-xs font-bold text-gray-500">أمس</td>
                        <td class="px-8 py-6">
                            <div class="flex items-center gap-2 text-xs font-bold text-gray-500">
                                <i class="fas fa-money-bill-wave text-green-500"></i> عند الاستلام
                            </div>
                        </td>
                        <td class="px-8 py-6">
                            <p class="text-lg font-black text-homy-green-700">65.00 <span class="text-[10px] text-gray-400">ر.س</span></p>
                        </td>
                        <td class="px-8 py-6">
                            <span class="bg-green-50 text-green-600 px-3 py-1.5 rounded-lg text-[10px] font-black">مكتمل</span>
                        </td>
                        <td class="px-8 py-6">
                            <div class="flex gap-2 opacity-40 hover:opacity-100 transition-opacity">
                                <button class="w-9 h-9 rounded-xl bg-white border border-gray-100 text-gray-400 flex items-center justify-center"><i class="fas fa-eye"></i></button>
                                <button class="w-9 h-9 rounded-xl bg-white border border-gray-100 text-gray-400 flex items-center justify-center"><i class="fas fa-print"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="p-8 border-t border-gray-50 flex items-center justify-between bg-gray-50/20">
            <p class="text-[10px] text-gray-400 font-bold font-mono uppercase tracking-tighter">عرض 2 من أصل 124 طلب</p>
            <div class="flex gap-2">
                <button class="w-10 h-10 rounded-xl bg-white border border-gray-100 text-gray-400 flex items-center justify-center hover:bg-homy-green-700 hover:text-white transition-all"><i class="fas fa-chevron-right"></i></button>
                <button class="w-10 h-10 rounded-xl bg-homy-green-700 text-white font-black shadow-lg shadow-homy-green-100 flex items-center justify-center">1</button>
                <button class="w-10 h-10 rounded-xl bg-white border border-gray-100 text-gray-400 flex items-center justify-center hover:bg-homy-green-700 hover:text-white transition-all">2</button>
                <button class="w-10 h-10 rounded-xl bg-white border border-gray-100 text-gray-400 flex items-center justify-center hover:bg-homy-green-700 hover:text-white transition-all"><i class="fas fa-chevron-left"></i></button>
            </div>
        </div>
    </main>
</div>
</body>
</html>