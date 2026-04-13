<!DOCTYPE html>
<html lang="ar" dir="rtl">

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
    {{-- @if (Route::has('login') && ) --}}
        @auth
        @if(Auth::user()->status == 'pending')
        {{-- <h1>please wait!</h1> --}}
 <div class="overlay" id="overlay"></div>

            <nav class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-logo">
                        <x-application-logo class="h-9" />
                        <span>عالم الطعام</span>
                    </div>
                    <i class="fas fa-times close-sidebar" id="closeSidebar"></i>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="#" class="active"><i class="fas fa-home"></i>الرئيسية</a></li>
                        <li><a href="#"><i class="fas fa-percent"></i>العروض الخاصة</a></li>
                        <li><a href="#"><i class="fas fa-info-circle"></i>من نحن</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>اتصل بنا</a></li>
                        <x-secondary-button>{{ __('Log In') }}</x-secondary-button>
                    </ul>
                </div>
            </nav>

            <header class="header">
                <div class="top-bar">شحن مجاني لأول طلب فوق 200 ريال! استخدم الكود: HOMY100</div>
                <div class="main-header">

                    <div class="logo-nav-group">
                        <i class="fas fa-bars menu-toggle" id="menuToggle"></i>
                        <a href="#" class="header-logo">
                            <x-application-logo class="h-9" />
                        </a>
                    </div>



                    <div class="search-container">
                        <input type="text" placeholder="ابحث عن زعتر، مكدوس، مربى تين...">
                        <i class="fas fa-search search-icon"></i>
                    </div>

                    <div class="user-actions">
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

        




@else
            <h1>you are logged in</h1>
            @endif
            @endauth
       @guest
            <div class="overlay" id="overlay"></div>

            <nav class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <div class="sidebar-logo">
                        <x-application-logo class="h-9" />
                        <span>عالم الطعام</span>
                    </div>
                    <i class="fas fa-times close-sidebar" id="closeSidebar"></i>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="#" class="active"><i class="fas fa-home"></i>الرئيسية</a></li>
                        <li><a href="#"><i class="fas fa-percent"></i>العروض الخاصة</a></li>
                        <li><a href="#"><i class="fas fa-info-circle"></i>من نحن</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>اتصل بنا</a></li>
                        <x-secondary-button>{{ __('Log In') }}</x-secondary-button>
                    </ul>
                </div>
            </nav>

            <header class="header">
                <div class="top-bar">شحن مجاني لأول طلب فوق 200 ريال! استخدم الكود: HOMY100</div>
                <div class="main-header">

                    <div class="logo-nav-group">
                        <i class="fas fa-bars menu-toggle" id="menuToggle"></i>
                        <a href="#" class="header-logo">
                            <x-application-logo class="h-9" />
                        </a>
                    </div>

                    {{-- buyer login --}}
                        <a href="{{ route('sellerRegister') }}">
                            <x-secondary-button>
                                {{ __('Join Us As Seller') }}
                            </x-secondary-button>
                        </a>


                    <div class="search-container">
                        <input type="text" placeholder="ابحث عن زعتر، مكدوس، مربى تين...">
                        <i class="fas fa-search search-icon"></i>
                    </div>

                    <div class="user-actions">
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

        @endguest

</body>

</html>
