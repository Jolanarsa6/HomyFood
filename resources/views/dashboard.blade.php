<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

    
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homy Food - عالم الطعام</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;900&display=swap" rel="stylesheet">

    <script>
        // تكوين Tailwind المخصص لتعريف ألوان الشعار الملكي
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // الأخضر الداكن الملكي من الشعار
                        'homy-green': {
                            100: '#e1ede5',
                            500: '#1a5732',
                            600: '#144527',
                            700: '#0d3b1f', // اللون الأساسي الداكن جداً
                        },
                        // الذهبي الفاخر من الشعار
                        'homy-gold': {
                            100: '#f9f1e0',
                            200: '#f0dfbd',
                            400: '#d9bf8c',
                            500: '#d1b16c', // اللون الذهبي الأساسي
                            600: '#b89a5a',
                        },
                    },
                    fontFamily: {
                        sans: ['Cairo', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        /* تحسينات إضافية بسيطة لا تغطيها Tailwind بشكل افتراضي */
        body {
            font-family: 'Cairo', sans-serif;
            scroll-behavior: smooth;
        }
        /* منع التمرير الأفقي عند فتح القائمة */
        body.sidebar-open {
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <div id="overlay" class="fixed inset-0 bg-black/50 z-[1500] opacity-0 visibility-hidden transition-all duration-300"></div>

    <nav id="sidebar" class="fixed top-0 right-[-100%] w-[300px] h-vh bg-white shadow-2xl z-[2000] transition-all duration-300 ease-in-out flex flex-col p-8">
        <div class="flex items-center justify-between mb-10 pb-5 border-b-2 border-homy-green-700">
            <div class="flex items-center gap-3">
                <x-application-logo class="h-12" />
                <span class="font-black text-xl text-homy-green-700">عالم الطعام</span>
            </div>
            <button id="closeSidebar" class="text-2xl text-gray-500 hover:text-homy-green-700 transition-colors">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="space-y-4">
            <a href="#" class="flex items-center gap-4 text-lg p-3 rounded-xl bg-homy-green-100/50 text-homy-green-700 font-bold">
                <i class="fas fa-home w-6 text-center text-homy-gold-500"></i> الرئيسية
            </a>
            <a href="#" class="flex items-center gap-4 text-lg p-3 rounded-xl hover:bg-homy-green-100/50 text-gray-700 hover:text-homy-green-700 transition-all">
                <i class="fas fa-utensils w-6 text-center text-homy-gold-500"></i> جميع المنتجات
            </a>
            <a href="#" class="flex items-center gap-4 text-lg p-3 rounded-xl hover:bg-homy-green-100/50 text-gray-700 hover:text-homy-green-700 transition-all">
                <i class="fas fa-jar w-6 text-center text-homy-gold-500"></i> المربيات والمكدوس
            </a>
            <a href="#" class="flex items-center gap-4 text-lg p-3 rounded-xl hover:bg-homy-green-100/50 text-gray-700 hover:text-homy-green-700 transition-all">
                <i class="fas fa-envelope w-6 text-center text-homy-gold-500"></i> اتصل بنا
            </a>
        </div>
    </nav>
    <header class="bg-white shadow-md sticky top-0 z-[1000]">
        <div class="bg-homy-gold-500 text-white text-center py-1.5 px-4 text-sm font-bold">
            شحن مجاني لأول طلب فوق 200 ريال! استخدم الكود: <span class="font-black">HOMY100</span>
        </div>
        
        <div class="max-w-[1400px] mx-auto px-6 py-4 flex items-center justify-between">
            
            <div class="flex items-center gap-5">
                <button id="menuToggle" class="text-2xl text-homy-green-700 hover:text-homy-gold-600 transition-colors">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="#" class="flex items-center">
                    <x-application-logo alt="Homy Food Logo" class="h-12 border-2 border-homy-gold-500 rounded-full" />
                </a>
            </div>

            <div class="flex-1 max-w-[500px] mx-8 relative group">
                <input type="text" placeholder="ابحث عن زعتر، مكدوس، مربى تين..." class="shadow-inner w-full px-5 py-3.5 rounded-full border border-gray-200 focus:border-homy-gold-500 focus:ring focus:ring-homy-gold-100 transition-all outline-none bg-gray-50 text-base placeholder:text-gray-400">
                <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-homy-green-700 text-lg cursor-pointer"></i>
            </div>

            <div class="flex items-center gap-6">
                <a href="#" class="relative action-item text-homy-green-700 hover:text-homy-gold-600 transition-colors text-xl">
                    <i class="far fa-heart"></i>
                    <span class="absolute -top-2 -right-2.5 bg-homy-gold-500 text-homy-green-700 text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center shadow">3</span>
                </a>
                <a href="#" class="relative action-item text-homy-green-700 hover:text-homy-gold-600 transition-colors text-xl">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="absolute -top-2 -right-2.5 bg-homy-gold-500 text-homy-green-700 text-xs font-bold w-5 h-5 rounded-full flex items-center justify-center shadow">5</span>
                </a>
                
                <div class="flex items-center gap-3 auth-buttons mobile:hidden">
                    <a href="#" class="btn-outline px-5 py-2.5 rounded-xl border-2 border-homy-gold-400 text-homy-green-700 hover:bg-homy-gold-500 hover:text-white transition-all font-bold flex items-center gap-2">
                        <i class="far fa-user text-lg"></i> تسجيل الدخول
                    </a>
                    <a href="#" class="btn-primary px-5 py-2.5 rounded-xl bg-homy-green-700 text-white hover:bg-homy-green-600 transition-all font-black shadow-md shadow-homy-green-100/50"> إنشاء حساب
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-white border-b border-gray-100 py-10 px-6">
        <div class="max-w-[1200px] mx-auto flex flex-wrap items-center justify-center gap-7">
            
            <button class="filter-item group active flex flex-col items-center gap-3">
                <div class="circle w-20 h-20 bg-gray-100 border-3 border-transparent rounded-full flex items-center justify-center text-3xl text-homy-green-700 transition-all shadow-md group-hover:bg-homy-green-700 group-hover:text-white group-hover:border-homy-gold-500 group-hover:-translate-y-1.5 group-active:active:scale-95 group-[.active]:bg-homy-gold-500 group-[.active]:text-homy-green-700 group-[.active]:border-homy-green-700 group-[.active]:shadow-lg shadow-homy-gold-100/50">
                    <i class="fas fa-th-large"></i>
                </div>
                <span class="font-bold text-gray-600 transition-colors group-hover:text-homy-green-700 group-[.active]:text-homy-green-700">الكل</span>
            </button>
            <button class="filter-item group flex flex-col items-center gap-3">
                <div class="circle w-20 h-20 bg-gray-100 border-3 border-transparent rounded-full flex items-center justify-center text-3xl text-homy-green-700 transition-all shadow-md group-hover:bg-homy-green-700 group-hover:text-white group-hover:border-homy-gold-500 group-hover:-translate-y-1.5 group-active:active:scale-95 group-[.active]:bg-homy-gold-500 group-[.active]:text-homy-green-700 group-[.active]:border-homy-green-700 group-[.active]:shadow-lg">
                    <i class="fas fa-jar"></i>
                </div>
                <span class="font-bold text-gray-600 transition-colors group-hover:text-homy-green-700 group-[.active]:text-homy-green-700">المربيات</span>
            </button>

            <button class="filter-item group flex flex-col items-center gap-3">
                <div class="circle w-20 h-20 bg-gray-100 border-3 border-transparent rounded-full flex items-center justify-center text-3xl text-homy-green-700 transition-all shadow-md group-hover:bg-homy-green-700 group-hover:text-white group-hover:border-homy-gold-500 group-hover:-translate-y-1.5 group-active:active:scale-95 group-[.active]:bg-homy-gold-500 group-[.active]:text-homy-green-700 group-[.active]:border-homy-green-700 group-[.active]:shadow-lg">
                    <i class="fas fa-utensils"></i>
                </div>
                <span class="font-bold text-gray-600 transition-colors group-hover:text-homy-green-700 group-[.active]:text-homy-green-700">المكدوس</span>
            </button>

            <button class="filter-item group flex flex-col items-center gap-3">
                <div class="circle w-20 h-20 bg-gray-100 border-3 border-transparent rounded-full flex items-center justify-center text-3xl text-homy-green-700 transition-all shadow-md group-hover:bg-homy-green-700 group-hover:text-white group-hover:border-homy-gold-500 group-hover:-translate-y-1.5 group-active:active:scale-95 group-[.active]:bg-homy-gold-500 group-[.active]:text-homy-green-700 group-[.active]:border-homy-green-700 group-[.active]:shadow-lg">
                    <i class="fas fa-seedling"></i>
                </div>
                <span class="font-bold text-gray-600 transition-colors group-hover:text-homy-green-700 group-[.active]:text-homy-green-700">الزعتر</span>
            </button>

            <button class="filter-item group flex flex-col items-center gap-3">
                <div class="circle w-20 h-20 bg-gray-100 border-3 border-transparent rounded-full flex items-center justify-center text-3xl text-homy-green-700 transition-all shadow-md group-hover:bg-homy-green-700 group-hover:text-white group-hover:border-homy-gold-500 group-hover:-translate-y-1.5 group-active:active:scale-95 group-[.active]:bg-homy-gold-500 group-[.active]:text-homy-green-700 group-[.active]:border-homy-green-700 group-[.active]:shadow-lg">
                    <i class="fas fa-oil-can"></i>
                </div>
                <span class="font-bold text-gray-600 transition-colors group-hover:text-homy-green-700 group-[.active]:text-homy-green-700">السمن</span>
            </button>
        </div>
    </section>

    <main class="max-w-[1200px] mx-auto py-16 px-6 flex flex-col items-center justify-center text-center">
        <h1 class="font-black text-5xl text-homy-green-700 mb-6 leading-tight">مرحبا بكم في Homy Food <br> <span class="text-homy-gold-600 text-4xl">عالم الطعام الفاخر</span></h1>
        <p class="text-xl text-gray-500 mb-12 max-w-2xl">اختر من تشكيلتنا الفاخرة المستوحاة من دفء البيت وأصالة المذاق. نحن نقدم لك الأفضل، بعناية فائقة.</p>
        
        <div class="w-full max-w-xs">
            <button type="submit" class="w-full bg-homy-green-700 hover:bg-homy-green-600 text-white font-black py-4 rounded-full text-lg shadow-xl shadow-homy-green-100/50 transition-all active:scale-95 flex items-center justify-center gap-3">
                <i class="fas fa-shopping-bag"></i> ابدأ التسوق الآن
            </button>
        </div>
    </main>

    
    
                            
                      

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const closeSidebar = document.getElementById('closeSidebar');
        const body = document.body;

        // وظيفة لفتح/إغلاق القائمة
        function toggleSidebar() {
            sidebar.classList.toggle('right-[-100%]');
            sidebar.classList.toggle('right-0');
            overlay.classList.toggle('opacity-0');
            overlay.classList.toggle('visibility-hidden');
            body.classList.toggle('sidebar-open');
        }

        menuToggle.addEventListener('click', toggleSidebar);
        closeSidebar.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar); // إغلاق عند النقر خارج القائمة

        // تفعيل فلاتر الدوائر (Tailwind)
        const filterItems = document.querySelectorAll('.filter-item');
        filterItems.forEach(item => {
            item.addEventListener('click', () => {
                // إزالة الحالة النشطة من الجميع
                document.querySelector('.filter-item.active').classList.remove('active');
                // إضافة الحالة النشطة للعنصر الذي تم النقر عليه
                item.classList.add('active');
            });
        });
    </script>
</body>
</html> 

