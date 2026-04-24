<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انضم كبائع - Homy Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'homy-green': '#1A472A',
                        'homy-gold': '#C4A462',
                        'homy-dark': '#0A1411',
                        'homy-surface': '#12211B'
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
        /* إخفاء اللغات بناءً على الكلاس */
        html[lang="ar"] .lang-en { display: none; }
        html[lang="en"] .lang-ar { display: none; }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-homy-dark text-gray-800 dark:text-gray-200 transition-colors duration-300">

    <nav class="sticky top-0 z-50 bg-white/80 dark:bg-homy-dark/80 backdrop-blur-md border-b border-gray-200 dark:border-homy-green/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-2">
                    <span class="text-3xl font-extrabold text-homy-green dark:text-homy-gold tracking-tight">Homy Food</span>
                </div>
                <div class="flex items-center gap-4">
                    <button onclick="toggleLang()" class="font-bold text-gray-600 dark:text-gray-300 hover:text-homy-gold transition">
                        <span class="lang-ar">English</span>
                        <span class="lang-en">العربية</span>
                    </button>
                    <button onclick="toggleTheme()" class="p-2 rounded-full bg-gray-100 dark:bg-homy-surface hover:bg-gray-200 dark:hover:bg-homy-green/30 transition">
                        <svg class="w-5 h-5 text-homy-green dark:text-homy-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section class="relative pt-20 pb-32 overflow-hidden">
        <div class="absolute inset-0 bg-homy-green dark:bg-homy-surface skew-y-3 transform origin-bottom-right -z-10 h-[120%]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 leading-tight">
                    <span class="lang-ar">حوّل شغفك بالطبخ إلى <span class="text-homy-gold">عمل ناجح</span></span>
                    <span class="lang-en">Turn Your Cooking Passion Into a <span class="text-homy-gold">Thriving Business</span></span>
                </h1>
                <p class="text-lg text-gray-200 mb-10">
                    <span class="lang-ar">انضم إلى شبكة Homy Food، وسّع نطاق عملائك، وتحكم في مبيعاتك من خلال لوحة تحكم متطورة صُممت خصيصاً لك.</span>
                    <span class="lang-en">Join the Homy Food network, expand your customer base, and control your sales through an advanced dashboard designed just for you.</span>
                    </p>
                <a href="#register" class="inline-block bg-homy-gold text-homy-dark font-bold text-lg px-10 py-4 rounded-xl shadow-xl hover:bg-white hover:text-homy-green transition-all transform hover:-translate-y-1">
                    <span class="lang-ar">ابدأ البيع الآن</span>
                    <span class="lang-en">Start Selling Now</span>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 dark:bg-homy-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-homy-green dark:text-homy-gold mb-4">
                    <span class="lang-ar">لماذا تختار Homy Food؟</span>
                    <span class="lang-en">Why Choose Homy Food?</span>
                </h2>
                <p class="text-gray-600 dark:text-gray-400">
                    <span class="lang-ar">نحن نوفر لك كل الأدوات التي تحتاجها للنجاح</span>
                    <span class="lang-en">We provide all the tools you need to succeed</span>
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-homy-surface p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-homy-green/20 hover:border-homy-gold transition-colors">
                    <div class="w-14 h-14 bg-homy-green/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-homy-green dark:text-homy-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800 dark:text-white">
                        <span class="lang-ar">وصول أوسع للعملاء</span>
                        <span class="lang-en">Broader Customer Reach</span>
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        <span class="lang-ar">لا تقتصر على محيطك الصغير، منصتنا تعرض أطباقك لآلاف المستخدمين النشطين يومياً.</span>
                        <span class="lang-en">Don't limit yourself to your local area; our platform showcases your dishes to thousands of daily active users.</span>
                    </p>
                </div>
                <div class="bg-white dark:bg-homy-surface p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-homy-green/20 hover:border-homy-gold transition-colors">
                    <div class="w-14 h-14 bg-homy-green/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-homy-green dark:text-homy-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800 dark:text-white">
                        <span class="lang-ar">لوحة تحكم احترافية</span>
                        <span class="lang-en">Professional Dashboard</span>
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        <span class="lang-ar">إدارة كاملة للمنتجات، تتبع الطلبات في الوقت الفعلي، وتقارير أرباح دقيقة تدعم نمو عملك.</span>
                        <span class="lang-en">Full product management, real-time order tracking, and accurate profit reports to support your business growth.</span>
                        </p>
                </div>
                <div class="bg-white dark:bg-homy-surface p-8 rounded-2xl shadow-sm border border-gray-100 dark:border-homy-green/20 hover:border-homy-gold transition-colors">
                    <div class="w-14 h-14 bg-homy-green/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-homy-green dark:text-homy-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800 dark:text-white">
                        <span class="lang-ar">دفع آمن وعمولات شفافة</span>
                        <span class="lang-en">Secure Payouts & Transparent Fees</span>
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        <span class="lang-ar">نظام مالي موثوق يضمن وصول أرباحك بانتظام، مع هيكل عمولات واضح وبدون رسوم خفية.</span>
                        <span class="lang-en">A reliable financial system ensuring regular payouts, with a clear commission structure and no hidden fees.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white dark:bg-homy-surface">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-homy-green dark:text-homy-gold mb-16">
                <span class="lang-ar">كيف تبدأ رحلتك معنا؟</span>
                <span class="lang-en">How to Start Your Journey?</span>
            </h2>
            <div class="flex flex-col md:flex-row justify-center items-start gap-8 relative">
                <div class="hidden md:block absolute top-12 left-[10%] right-[10%] h-1 bg-gray-200 dark:bg-homy-green/30 z-0"></div>
                
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/4">
                    <div class="w-24 h-24 bg-homy-green text-homy-gold rounded-full flex items-center justify-center text-3xl font-bold border-8 border-white dark:border-homy-surface shadow-lg mb-6">1</div>
                    <h4 class="text-xl font-bold mb-2 dark:text-white">
                        <span class="lang-ar">سجل حسابك</span>
                        <span class="lang-en">Register Account</span>
                    </h4>
                    <p class="text-sm text-gray-500">
                        <span class="lang-ar">قم بإنشاء حساب بائع وارفع مستنداتك لتوثيق متجرك.</span>
                        <span class="lang-en">Create a seller account and upload your documents to verify your store.</span>
                    </p>
                </div>
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/4">
                    <div class="w-24 h-24 bg-homy-green text-homy-gold rounded-full flex items-center justify-center text-3xl font-bold border-8 border-white dark:border-homy-surface shadow-lg mb-6">2</div>
                    <h4 class="text-xl font-bold mb-2 dark:text-white">
                        <span class="lang-ar">أضف أطباقك</span>
                        <span class="lang-en">Add Your Dishes</span>
                    </h4>
                    <p class="text-sm text-gray-500">
                        <span class="lang-ar">ارفع صوراً جذابة لأطباقك وحدد الأسعار والأوقات المتاحة.</span>
                        <span class="lang-en">Upload attractive photos of your dishes and set prices and available times.</span>
                    </p>
                    </div>
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/4">
                    <div class="w-24 h-24 bg-homy-green text-homy-gold rounded-full flex items-center justify-center text-3xl font-bold border-8 border-white dark:border-homy-surface shadow-lg mb-6">3</div>
                    <h4 class="text-xl font-bold mb-2 dark:text-white">
                        <span class="lang-ar">استقبل الطلبات</span>
                        <span class="lang-en">Receive Orders</span>
                    </h4>
                    <p class="text-sm text-gray-500">
                        <span class="lang-ar">سيصلك إشعار فوري عند طلب العميل، قم بتجهيز الطلب بكل حب.</span>
                        <span class="lang-en">Get instant notifications for customer orders, and prepare them with love.</span>
                    </p>
                </div>
                <div class="relative z-10 flex flex-col items-center text-center w-full md:w-1/4">
                    <div class="w-24 h-24 bg-homy-green text-homy-gold rounded-full flex items-center justify-center text-3xl font-bold border-8 border-white dark:border-homy-surface shadow-lg mb-6">4</div>
                    <h4 class="text-xl font-bold mb-2 dark:text-white">
                        <span class="lang-ar">استلم أرباحك</span>
                        <span class="lang-en">Get Paid</span>
                    </h4>
                    <p class="text-sm text-gray-500">
                        <span class="lang-ar">يتم تحويل أرباحك بشكل دوري إلى حسابك البنكي المسجل.</span>
                        <span class="lang-en">Your earnings are periodically transferred to your registered bank account.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 dark:bg-homy-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-homy-green dark:text-homy-gold mb-10">
                <span class="lang-ar">شروط ومتطلبات الانضمام</span>
                <span class="lang-en">Terms & Requirements</span>
            </h2>
            
            <div class="space-y-4">
                <div class="bg-white dark:bg-homy-surface rounded-xl border border-gray-200 dark:border-homy-green/30 overflow-hidden">
                    <button class="w-full px-6 py-4 text-right flex justify-between items-center focus:outline-none" onclick="toggleAccordion('faq1')">
                        <span class="font-bold text-gray-800 dark:text-white lang-ar">معايير الجودة والنظافة</span>
                        <span class="font-bold text-gray-800 dark:text-white lang-en text-left w-full">Quality and Hygiene Standards</span>
                        <svg class="w-5 h-5 text-homy-gold transform transition-transform" id="icon-faq1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div id="faq1" class="hidden px-6 pb-4 text-gray-600 dark:text-gray-400 text-sm">
                        <span class="lang-ar">نلتزم في Homy Food بأعلى معايير سلامة الغذاء. يجب على جميع البائعين الالتزام بنظافة المطبخ والتعبئة الآمنة وفقاً لإرشاداتنا التي سيتم إرسالها بعد القبول.</span>
                        <span class="lang-en">At Homy Food, we adhere to the highest food safety standards. All sellers must comply with kitchen hygiene and safe packaging according to our guidelines provided upon acceptance.</span>
                    </div>
                </div>
                <div class="bg-white dark:bg-homy-surface rounded-xl border border-gray-200 dark:border-homy-green/30 overflow-hidden">
                    <button class="w-full px-6 py-4 text-right flex justify-between items-center focus:outline-none" onclick="toggleAccordion('faq2')">
                        <span class="font-bold text-gray-800 dark:text-white lang-ar">سياسة العمولات والمدفوعات</span>
                        <span class="font-bold text-gray-800 dark:text-white lang-en text-left w-full">Commission & Payments Policy</span>
                        <svg class="w-5 h-5 text-homy-gold transform transition-transform" id="icon-faq2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div id="faq2" class="hidden px-6 pb-4 text-gray-600 dark:text-gray-400 text-sm">
                        <span class="lang-ar">يتم خصم نسبة بسيطة (مثال: 10%) من كل طلب ناجح لصالح المنصة لتغطية تكاليف التسويق والتشغيل. يتم تحويل المبالغ المستحقة لك كل 14 يوماً.</span>
                        <span class="lang-en">A small percentage (e.g., 10%) is deducted from each successful order for the platform to cover marketing and operational costs. Due amounts are transferred to you every 14 days.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="register" class="py-20 relative overflow-hidden bg-homy-green">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl font-bold text-white mb-6">
                <span class="lang-ar">هل أنت مستعد لمشاركة إبداعك؟</span>
                <span class="lang-en">Are You Ready to Share Your Creativity?</span>
            </h2>
            <p class="text-homy-gold mb-10 text-lg">
                <span class="lang-ar">لا تدع الفرصة تفوتك، سجل الآن وكن جزءاً من عائلة Homy Food.</span>
                <span class="lang-en">Don't miss out, register now and be part of the Homy Food family.</span>
            </p>
            
            <form action="{{ route('register') }}" method="GET" class="bg-white dark:bg-homy-surface p-8 rounded-2xl shadow-2xl max-w-md mx-auto">
                <p class="text-gray-500 mb-6 font-bold dark:text-white">
                    <span class="lang-ar">انتقل إلى صفحة إنشاء الحساب</span>
                    <span class="lang-en">Proceed to Account Creation</span>
                </p>
                <button type="button" class="w-full bg-homy-gold hover:bg-yellow-600 text-white font-bold py-3 px-4 rounded-xl transition-colors">
                    <span class="lang-ar">إنشاء حساب بائع</span>
                    <span class="lang-en">Create Seller Account</span>
                </button>
                <p class="text-xs text-gray-400 mt-4">
                    <span class="lang-ar">بضغطك على الزر، أنت توافق على شروط الخدمة.</span>
                    <span class="lang-en">By clicking the button, you agree to the terms of service.</span>
                </p>
            </form>
        </div>
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-white opacity-5"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-homy-gold opacity-10"></div>
    </section>

    <script>
        // التحكم باللغة
        let currentLang = 'ar';
        function toggleLang() {
            currentLang = currentLang === 'ar' ? 'en' : 'ar';
            document.documentElement.lang = currentLang;
            document.documentElement.dir = currentLang === 'ar' ? 'rtl' : 'ltr';
        }

        // التحكم بالوضع الليلي
        function toggleTheme() {
            document.documentElement.classList.toggle('dark');
            // حفظ التفضيل إن أردت:
            // localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
        }
        // تطبيق الوضع الليلي تلقائياً إذا كان مفضلاً
        if (window.matchMedia('(prefers-color-scheme: dark)').matches || localStorage.getItem('tablerTheme') === 'dark') {
            document.documentElement.classList.add('dark');
        }

        // التحكم بالقوائم المنسدلة (Accordion)
        function toggleAccordion(id) {
            const content = document.getElementById(id);
            const icon = document.getElementById('icon-' + id);
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
</body>
</html>