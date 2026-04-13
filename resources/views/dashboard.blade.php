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
                <li><a href="#"><i class="fas fa-utensils"></i>جميع المنتجات</a></li>
                <li><a href="#"><i class="fas fa-bread-slice"></i>المخبوزات والطازج</a></li>
                <li><a href="#"><i class="fas fa-jar"></i>المربيات والمكدوس</a></li>
                <li><a href="#"><i class="fas fa-percent"></i>العروض الخاصة</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i>من نحن</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>اتصل بنا</a></li>
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

            <!-- sun and moon button -->
            {{-- <div class=" bottom-6 ">
                <button onclick="toggleTheme()" id="theme-btn"
                    class="group relative w-16 h-8 flex items-center bg-gray-200 dark:bg-homy-green-800 rounded-full p-1 transition-all duration-500 shadow-inner">
                    <div id="theme-dot"
                        class="w-6 h-6 bg-white rounded-full shadow-md transform transition-transform duration-500 flex items-center justify-center">
                        <i id="theme-icon" class="fas fa-sun text-yellow-500 text-xs"></i>
                    </div>
                </button>
            </div> --}}

              <!-- the new way to make a sun and moon button -->
            {{-- <button x-data="{
                darkMode: document.documentElement.classList.contains('dark'),
                toggle() {
                    this.darkMode = !this.darkMode;
                    if (this.darkMode) {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }
                }
            }" @click="toggle()"
                class="p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                <svg x-show="darkMode" style="display: none;" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                    </path>
                </svg>

                <svg x-show="!darkMode" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
            </button> --}}

            <!-- the new way to make a sun and moon button -->


            <div class="d-none d-md-flex">
                 <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                     data-bs-toggle="tooltip" data-bs-placement="bottom">
                     <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                         <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                     </svg>
                 </a>
                 <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                     data-bs-toggle="tooltip" data-bs-placement="bottom">
                     <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                         <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                         <path
                             d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                     </svg>
                 </a>
                 {{-- <div class="nav-item dropdown d-none d-md-flex me-3">
                     <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                         aria-label="Show notifications">
                         <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                         <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                             <path
                                 d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                             <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                         </svg>
                         <span class="badge bg-red"></span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                         <div class="card">
                             <div class="card-header">
                                 <h3 class="card-title">Last updates</h3>
                             </div>
                             <div class="list-group list-group-flush list-group-hoverable">
                                 <div class="list-group-item">
                                     <div class="row align-items-center">
                                         <div class="col-auto"><span
                                                 class="status-dot status-dot-animated bg-red d-block"></span>
                                         </div>
                                         <div class="col text-truncate">
                                             <a href="#" class="text-body d-block">Example 1</a>
                                             <div class="d-block text-secondary text-truncate mt-n1">
                                                 Change deprecated html tags to text decoration classes (#29604)
                                             </div>
                                         </div>
                                         <div class="col-auto">
                                             <a href="#" class="list-group-item-actions">
                                                 <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                     stroke="currentColor" fill="none" stroke-linecap="round"
                                                     stroke-linejoin="round">
                                                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                     <path
                                                         d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                 </svg>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="list-group-item">
                                     <div class="row align-items-center">
                                         <div class="col-auto"><span class="status-dot d-block"></span></div>
                                         <div class="col text-truncate">
                                             <a href="#" class="text-body d-block">Example 2</a>
                                             <div class="d-block text-secondary text-truncate mt-n1">
                                                 justify-content:between ⇒ justify-content:space-between (#29734)
                                             </div>
                                         </div>
                                         <div class="col-auto">
                                             <a href="#" class="list-group-item-actions show">
                                                 <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow"
                                                     width="24" height="24" viewBox="0 0 24 24"
                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                     <path
                                                         d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                 </svg>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="list-group-item">
                                     <div class="row align-items-center">
                                         <div class="col-auto"><span class="status-dot d-block"></span></div>
                                         <div class="col text-truncate">
                                             <a href="#" class="text-body d-block">Example 3</a>
                                             <div class="d-block text-secondary text-truncate mt-n1">
                                                 Update change-version.js (#29736)
                                             </div>
                                         </div>
                                         <div class="col-auto">
                                             <a href="#" class="list-group-item-actions">
                                                 <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                     width="24" height="24" viewBox="0 0 24 24"
                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                     <path
                                                         d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                 </svg>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="list-group-item">
                                     <div class="row align-items-center">
                                         <div class="col-auto"><span
                                                 class="status-dot status-dot-animated bg-green d-block"></span>
                                         </div>
                                         <div class="col text-truncate">
                                             <a href="#" class="text-body d-block">Example 4</a>
                                             <div class="d-block text-secondary text-truncate mt-n1">
                                                 Regenerate package-lock.json (#29730)
                                             </div>
                                         </div>
                                         <div class="col-auto">
                                             <a href="#" class="list-group-item-actions">
                                                 <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                     width="24" height="24" viewBox="0 0 24 24"
                                                     stroke-width="2" stroke="currentColor" fill="none"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                     <path
                                                         d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                 </svg>
                                             </a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div> --}}
            </div> 


            <!-- translation button -->
            <div>
                <button onclick="toggleLanguage()" id="langSwitcher"
                    class="group flex items-center gap-3 bg-white border border-gray-100 p-2 pr-5 rounded-full  hover:shadow-homy-gold-100 transition-all duration-500">
                    <span id="langText" class="text-xs font-black text-homy-green-700 tracking-widest">ENGLISH</span>

                    <div
                        class="w-10 h-10 rounded-full bg-homy-gold-500 text-white flex items-center justify-center shadow-lg group-hover:rotate-[360deg] transition-transform duration-700">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                </button>
            </div>

            <div class="search-container">
                <input type="text" placeholder="ابحث عن زعتر، مكدوس، مربى تين...">
                <i class="fas fa-search search-icon"></i>
            </div>

            <div class="user-actions">
                <a href="#" class="action-item">
                    <i class="far fa-heart"></i>
                    <span class="badge">3</span>
                </a>
                <a href="#" class="action-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge">5</span>
                </a>

                <!-- log out button -->
                <x-logout/>

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
</body>

</html>
