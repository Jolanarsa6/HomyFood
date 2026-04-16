<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homy Food - عالم الطعام الفاخر</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/assets/css/index.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

<body>

    @error('email')
        <span class="text-red-500">{{ $message }}</span>
    @enderror


    {{-- <div class="overlay" id="overlay"></div> --}}

    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <x-application-logo class="h-9" />
                <span>{{ __('HOMY FOOD') }}</span>
            </div>
            <i class="fas fa-times close-sidebar" id="closeSidebar"></i>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="#" class="active"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li><a href="#"><i class="fas fa-percent"></i>{{ __('Special Offers') }}</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i>{{ __('About Us') }}</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>{{ __('Connect Us') }}</a></li>
                <a href="{{ route('login') }}" class="block lg:hidden py-1"><x-primary-button>{{ __('Log In') }}</x-primary-button></a>
                <a href="{{ route('register') }}" class="block lg:hidden py-1"><x-secondary-button>{{ __('Sign In') }}</x-secondary-button></a>
                <a href="{{ route('sellerRegister') }}" class="block lg:hidden py-[-50px]"><x-primary-button>{{ __('Join Us As Seller') }}</x-primary-button></a>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="top-bar">{{ __('Yearly offer for half value') }}💰</div>
        <div class="main-header">

            <div class="logo-nav-group">
                <i class="fas fa-bars menu-toggle" id="menuToggle"></i>
                <a href="#" class="header-logo">
                    <x-application-logo class="h-9" />
                </a>
            </div>

            {{-- buyer login --}}
            <a href="{{ route('sellerRegister') }}">
                <x-secondary-button class="hidden lg:block">
                    {{ __('Join Us As Seller') }}
                </x-secondary-button>
            </a>


            <div class="search-container">
                <input type="text" placeholder="ابحث عن زعتر، مكدوس، مربى تين...">
                <i class="fas fa-search search-icon"></i>
            </div>

            <div class="user-actions hidden lg:block">
                <!-- log in and sign in buttons -->
                <div class="auth-buttons flex items-center gap-3 auth-buttons mobile:hidden">


                    <nav class="flex items-center justify-end gap-4">



                        <a href="{{ route('login') }}">
                            <x-primary-button class="whitespace-nowrap mb-6">
                                <i class="far fa-user text-lg"></i>
                                {{ __('Log In') }}
                            </x-primary-button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <x-secondary-button>
                                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                    {{ __('Sign In') }}
                                </x-secondary-button>
                            </a>
                        @endif

                    </nav>

                </div>

            </div>
        </div>
    </header>



    <section class="filters-section">
        <div class="filters-container">
            <div class="filter-item active">
                <div class="circle"><i class="fas fa-th-large"></i></div>
                <span>الكل</span>
            </div>
            <div class="filter-item">
                <div class="circle"><i class="fas fa-jar"></i></div>
                <span>المربيات</span>
            </div>
            <div class="filter-item">
                <div class="circle"><i class="fas fa-utensils"></i></div>
                <span>المكدوس</span>
            </div>
            <div class="filter-item">
                <div class="circle"><i class="fas fa-seedling"></i></div>
                <span>الزعتر</span>
            </div>
            <div class="filter-item">
                <div class="circle"><i class="fas fa-oil-can"></i></div>
                <span>السمن</span>
            </div>
            <div class="filter-item">
                <div class="circle"><i class="fas fa-bread-slice"></i></div>
                <span>المخبوزات</span>
            </div>
            <div class="filter-item">
                <div class="circle"><i class="fas fa-pepper-hot"></i></div>
                <span>بهارات</span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <h1>مرحبا بكم في Homy Food - عالم الطعام الفاخر</h1>
    </main>


    <!-- for comparing bettween products -->
    @include('buyer.compareProducts')





    <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const closeSidebar = document.getElementById('closeSidebar');

        // وظيفة لفتح/إغلاق القائمة
        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
            // منع التمرير على الصفحة الرئيسية عند فتح القائمة
            document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : 'auto';
        }

        menuToggle.addEventListener('click', toggleSidebar);
        closeSidebar.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar); // إغلاق عند النقر خارج القائمة

        // تفعيل فلاتر الدوائر (نموذج أساسي)
        const filterItems = document.querySelectorAll('.filter-item');
        filterItems.forEach(item => {
            item.addEventListener('click', () => {
                // إزالة الحالة النشطة من الجميع
                document.querySelector('.filter-item.active').classList.remove('active');
                // إضافة الحالة النشطة للعنصر الذي تم النقر عليه
                item.classList.add('active');
            });
        });



        // for sun and moon button 
        function toggleTheme() {
            const html = document.documentElement;
            const icon = document.getElementById('theme-icon');
            const dot = document.getElementById('theme-dot');

            if (html.classList.contains('dark')) {
                // العودة للوضع الفاتح
                html.classList.remove('dark');
                icon.className = 'fas fa-sun text-yellow-500 text-xs';
                dot.style.transform = 'translateX(0)'; // يعود لليمين (في الـ RTL) أو اليسار (في الـ LTR)
                localStorage.setItem('theme', 'light');
            } else {
                // التحويل للوضع الليلي
                html.classList.add('dark');
                icon.className = 'fas fa-moon text-blue-400 text-xs';
                // تحريك الدائرة بناءً على اتجاه الصفحة
                const isRTL = html.dir === 'rtl';
                dot.style.transform = isRTL ? 'translateX(-32px)' : 'translateX(32px)';
                localStorage.setItem('theme', 'dark');
            }
        }
        // التأكد من الوضع المفضل عند التحميل
        window.onload = () => {
            if (localStorage.getItem('theme') === 'dark') toggleTheme();
        };





        //   <!-- //////////////////// -->

        //  let currentSlot = null;
        //  let selectedProducts = {
        //      1: null,
        //      2: null
        //  };

        //  function openProductModal(slot) {
        //      currentSlot = slot;
        //      document.getElementById('product-modal').classList.remove('hidden');
        //      document.getElementById('product-modal').classList.add('flex');
        //  }

        //  function closeProductModal() {
        //      document.getElementById('product-modal').classList.add('hidden');
        //      document.getElementById('product-modal').classList.remove('flex');
        //  }

        //  function selectProduct(product) {
        //      selectedProducts[currentSlot] = product;

        //      // تحديث الواجهة للمربع
        //      document.getElementById(empty - $ {
        //          currentSlot
        //      }).classList.add('hidden');
        //      document.getElementById(selected - $ {
        //          currentSlot
        //      }).classList.remove('hidden');
        //      document.getElementById(img - $ {
        //          currentSlot
        //      }).src = product.img;
        //      document.getElementById(name - $ {
        //          currentSlot
        //      }).innerText = product.name;

        //      // تحديث الجدول
        //      document.getElementById(table - head - $ {
        //          currentSlot
        //      }).innerText = product.name;
        //      document.getElementById(price - $ {
        //          currentSlot
        //      }).innerText = product.price;
        //      document.getElementById(rating - $ {
        //          currentSlot
        //      }).innerHTML = < span class = "text-homy-gold-500 font-bold" > $ {
        //          product.rating
        //      } < /span> <i class="fas fa-star text-homy-gold-500 text-xs"></i > ;
        //      document.getElementById(package - $ {
        //          currentSlot
        //      }).innerText = product.package;
        //      document.getElementById(ingredients - $ {
        //          currentSlot
        //      }).innerText = product.ingredients;

        //      closeProductModal();
        //      checkComparison();
        //  }

        //  function resetSlot(slot) {
        //      selectedProducts[slot] = null;
        //      document.getElementById(empty - $ {
        //          slot
        //      }).classList.remove('hidden');
        //      document.getElementById(selected - $ {
        //          slot
        //      }).classList.add('hidden');
        //      checkComparison();
        //  }

        //  function checkComparison() {
        //      const table = document.getElementById('comparison-table');
        //      if (selectedProducts[1] && selectedProducts[2]) {
        //          table.classList.remove('hidden');
        //      } else {
        //          table.classList.add('hidden');
        //      }
        //  }
        //   <!-- //////////////////// -->

        // for translation
        tml.style.fontFamily = "'Cairo', sans-serif";

        // لمسة احترافية: حفظ خيار المستخدم في المتصفح
        localStorage.setItem('preferredLang', html.lang);


        // عند تحميل الصفحة، تأكد من اللغة المفضلة
        window.onload = () => {
            const savedLang = localStorage.getItem('preferredLang');
            if (savedLang === 'en') toggleLanguage();
        };
    </script>


 <!-- the product card -->
    {{-- <div
        class="relative flex flex-col bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 group max-w-sm">

        <div class="relative h-48 w-full overflow-hidden bg-gray-100">
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                alt="وجبة صحية"
                class="object-cover w-full h-full group-hover:scale-110 transition-transform duration-500">

            <div
                class="absolute top-3 start-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm z-10">
                15% خصم
            </div>

            <button
                class="absolute top-3 end-3 p-2 bg-white/80 backdrop-blur-sm rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-all shadow-sm z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                    </path>
                </svg>
            </button>
        </div>

        <div class="p-5 flex flex-col flex-grow">

            <div class="flex items-center justify-between mb-3">
                <span class="text-xs font-medium text-gray-500 flex items-center gap-1">
                    <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    مطعم المشويات الفاخرة
                </span>
                <div class="flex items-center gap-1 bg-orange-50 px-2 py-0.5 rounded-md">
                    <span class="text-xs font-bold text-orange-600">4.8</span>
                    <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                </div>
            </div>

            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-1" title="طبق مشاوي مشكل فاخر مع الأرز">طبق مشاوي
                مشكل فاخر مع الأرز</h3>

            <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                تشكيلة من أفضل أنواع اللحوم الطازجة المشوية على الفحم مع التوابل الشرقية الأصيلة والبطاطس المقرمشة، تكفي
                لشخصين.
            </p>

            <div class="mt-auto flex items-center justify-between pt-4 border-t border-gray-100">
                <div class="flex flex-col">
                    <span class="text-xs text-gray-400 line-through mb-0.5">$25.00</span>
                    <span class="text-2xl font-extrabold text-gray-800">$18.<span class="text-sm">50</span></span>
                </div>

                <button
                    class="flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-5 py-2.5 rounded-xl transition-colors font-semibold shadow-sm hover:shadow-md active:scale-95">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span>أضف للسلة</span>
                </button>
            </div>

        </div>
    </div> --}}

</body>

</html>


 {{-- @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif --}}
