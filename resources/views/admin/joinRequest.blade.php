@extends('admin.layouts.master')

@section('content')

@foreach ($admin->notifications as $notification) 
   {{ $notification->type}}

@endforeach


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة طلبات البائعين - Homy Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'homy-green': {
                            DEFAULT: '#1A472A',
                            dark: '#0d3b1f',
                            hover: '#225E38'
                        },
                        'homy-gold': {
                            DEFAULT: '#C4A462',
                            light: '#EAD5AC',
                            dark: '#A88E53'
                        },
                        'dark-bg': '#0A1411',
                        'dark-surface': '#12211B'
                    },
                    fontFamily: {
                        cairo: ['Cairo', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        body { font-family: 'Cairo', sans-serif; }
        /* تحسين مظهر التمرير للجداول على الشاشات الصغيرة */
        .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #C4A462; border-radius: 10px; }
    </style>
</head>
<body class="bg-[#f9f9f9] dark:bg-dark-bg text-gray-800 dark:text-gray-200 transition-colors duration-300 h-full">

    <div class="p-4 md:p-8 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-homy-green dark:text-homy-gold">طلبات انضمام البائعين</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">مراجعة والتحقق من بيانات البائعين الجدد في المنصة</p>
            </div>
            
            <div class="flex items-center gap-2">
                <button onclick="document.documentElement.classList.toggle('dark')" class="p-2 rounded-lg bg-white dark:bg-dark-surface border border-gray-200 dark:border-homy-green/30 shadow-sm hover:border-homy-gold transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-homy-green dark:text-homy-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white dark:bg-dark-surface p-4 rounded-xl border-b-4 border-homy-gold shadow-sm">
                <p class="text-gray-500 dark:text-gray-400 text-sm">إجمالي الطلبات المعلقة</p>
                <h3 class="text-2xl font-bold text-homy-green dark:text-white">12 طلب</h3>
            </div>
        </div>

        <div class="bg-white dark:bg-dark-surface rounded-2xl shadow-sm border border-gray-100 dark:border-homy-green/20 overflow-hidden">
            <div class="overflow-x-auto custom-scrollbar">
                <table class="w-full text-right border-collapse">
                    <thead>
                        <tr class="bg-gray-50 dark:bg-homy-green/10 text-gray-600 dark:text-homy-gold border-b border-gray-100 dark:border-homy-green/20">
                            <th class="px-6 py-4 font-bold text-sm">معلومات البائع</th>
                            <th class="px-6 py-4 font-bold text-sm">اسم المتجر</th>
                            <th class="px-6 py-4 font-bold text-sm">تاريخ التقديم</th>
                            <th class="px-6 py-4 font-bold text-sm">الحالة</th>
                            <th class="px-6 py-4 font-bold text-sm text-center">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-homy-green/10">
                        <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-homy-gold/10 flex items-center justify-center text-homy-gold font-bold">
                                        س
                                    </div>
                                    <div>
                                        <div class="font-bold text-gray-900 dark:text-white">سارة أحمد</div>
                                        <div class="text-xs text-gray-500">sara@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium">مطبخ الياسمين</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">12 أبريل 2026</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs font-bold rounded-full bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-500">
                                    قيد المراجعة
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="flex items-center gap-1 px-4 py-2 bg-homy-green hover:bg-homy-green-hover text-white text-xs font-bold rounded-lg shadow-sm transition-all transform hover:scale-105">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        قبول
                                    </button>
                                    <button class="flex items-center gap-1 px-4 py-2 bg-white dark:bg-transparent border border-red-200 dark:border-red-900 text-red-600 dark:text-red-500 hover:bg-red-50 text-xs font-bold rounded-lg transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        رفض
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-homy-green/10 flex items-center justify-center text-homy-green font-bold">
                                       </div>
                                    <div>
                                        <div class="font-bold text-gray-900 dark:text-white">محمد علي</div>
                                        <div class="text-xs text-gray-500">mohammed@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium">حلويات الشرق</td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">14 أبريل 2026</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs font-bold rounded-full bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-500">
                                    قيد المراجعة
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center justify-center gap-2">
                                    <button class="flex items-center gap-1 px-4 py-2 bg-homy-green hover:bg-homy-green-hover text-white text-xs font-bold rounded-lg shadow-sm transition-all transform hover:scale-105">
                                        قبول
                                    </button>
                                    <button class="flex items-center gap-1 px-4 py-2 bg-white dark:bg-transparent border border-red-200 dark:border-red-900 text-red-600 dark:text-red-500 hover:bg-red-50 text-xs font-bold rounded-lg transition-all">
                                        رفض
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="px-6 py-4 border-t border-gray-100 dark:border-homy-green/10 flex items-center justify-between">
                <span class="text-xs text-gray-500">عرض 2 من أصل 12 طلب معلق</span>
                <div class="flex gap-1">
                    <button class="p-2 border rounded-md hover:bg-gray-50 dark:border-homy-green/30 dark:hover:bg-homy-green/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </button>
                    <button class="p-2 border rounded-md hover:bg-gray-50 dark:border-homy-green/30 dark:hover:bg-homy-green/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>




@endsection
