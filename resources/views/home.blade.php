<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('global.title') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/assets/css/index.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            scroll-behavior: smooth;
        }

        body.sidebar-open {
            overflow: hidden;
        }
    </style>


</head>

<body>
    <div id="overlay"></div>
  
{{-- <div id="waiting-modal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 overflow-x-hidden overflow-y-auto">
    
    <div class="fixed inset-0 bg-black/40 dark:bg-homy-dark/60 backdrop-blur-md transition-opacity"></div>

    <div class="relative bg-white dark:bg-[#12211B] w-full max-w-md rounded-[2.5rem] shadow-2xl border border-homy-gold/20 overflow-hidden transform transition-all">
        
        <div class="h-2 w-full bg-gradient-to-r from-homy-green via-homy-gold to-homy-green"></div>

        <div class="p-8 text-center">
            <div class="relative w-24 h-24 mx-auto mb-6 flex items-center justify-center">
                <div class="absolute inset-0 bg-homy-gold/10 rounded-full animate-ping"></div>
                <div class="relative bg-white dark:bg-homy-dark border-2 border-homy-gold w-20 h-20 rounded-full flex items-center justify-center shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-homy-green dark:text-homy-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v10l4.5 4.5"/>
                        <circle cx="12" cy="12" r="10"/>
                    </svg>
                </div>
            </div>

            <div class="space-y-3 mb-8" dir="rtl">
                <h3 class="text-2xl font-bold text-homy-green dark:text-homy-gold">طلبك قيد المراجعة</h3>
                <p class="text-gray-600 dark:text-gray-400 font-medium">
                    الرجاء الانتظار حتى يتم قبول طلبك من قبل الإدارة. نحن نعمل على التأكد من جودة بياناتك لنضمن لك أفضل تجربة.
                </p>
            </div>

            <div class="space-y-2 mb-8 border-t border-gray-100 dark:border-white/5 pt-4" dir="ltr">
                <h4 class="text-lg font-bold text-homy-green dark:text-homy-gold/80">Under Review</h4>
                <p class="text-sm text-gray-500 dark:text-gray-500">
                    Please wait until your request is accepted by the administration.
                </p>
            </div>

            <div class="flex flex-col gap-3">
                <button onclick="closeModal()" class="w-full py-4 bg-homy-green hover:bg-homy-dark text-white font-bold rounded-2xl transition-all duration-300 shadow-lg shadow-homy-green/20">
                    حسناً، سأنتظر
                </button>
        
            </div>
        </div>

        <div class="absolute -bottom-6 -right-6 opacity-5 dark:opacity-10 pointer-events-none">
            <svg width="150" height="150" viewBox="0 0 24 24" fill="currentColor" class="text-homy-gold">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
        </div>
    </div>
</div> --}}


    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <x-application-logo class="h-9" />
                <span>{{ __('Homy Food') }}</span>
            </div>
            <i class="fas fa-times close-sidebar" id="closeSidebar"></i>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="#" class="active"><i class="fas fa-home"></i>{{ __('Home') }}</a></li>
                <li><a href="#"><i class="fas fa-percent"></i>{{ __('Special Offers') }}</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i>{{ __('About Us') }}</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>{{ __('Connect Us') }}</a></li>
                <a href="{{ route('login') }}"
                    class="block lg:hidden py-1"><x-primary-button>{{ __('Log In') }}</x-primary-button></a>
                <a href="{{ route('register') }}"
                    class="block lg:hidden py-1"><x-secondary-button>{{ __('Sign In') }}</x-secondary-button></a>
                <a href="{{ route('sellerRegister') }}"
                    class="block lg:hidden py-[-50px]"><x-primary-button>{{ __('Join Us As Seller') }}</x-primary-button></a>
            </ul>
        </div>
    </nav>

    <header class="header">
        <div class="top-bar">{{ __('global.top_bar') }}💰</div>
        <div class="main-header">
            <div class="logo-nav-group">
                <i class="fas fa-bars menu-toggle" id="menuToggle"></i>
                <a href="#" class="header-logo">
                    <x-application-logo class="h-9" />
                </a>
            </div>

            <!-- translation button -->
            <div>
                <a href="{{ route('langSwitch', 'en') }}">
                    <span id="langText" class="text-xs font-black text-homy-green-700 tracking-widest">ENGLISH</span>

                    <div
                        class="w-10 h-10 rounded-full bg-homy-gold-500 text-white flex items-center justify-center shadow-lg group-hover:rotate-[360deg] transition-transform duration-700">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                </a>
                <a href="{{ route('langSwitch', 'ar') }}">
                    <span id="langText" class="text-xs font-black text-homy-green-700 tracking-widest">ARABIC</span>

                    <div
                        class="w-10 h-10 rounded-full bg-homy-gold-500 text-white flex items-center justify-center shadow-lg group-hover:rotate-[360deg] transition-transform duration-700">
                        <i class="fas fa-globe-americas"></i>
                    </div>
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
      


     
    // دالة لإغلاق المودال (يمكنك ربطها برمجياً)
    function closeModal() {
        const modal = document.getElementById('waiting-modal');
        modal.classList.add('opacity-0', 'invisible');
        modal.style.transition = "all 0.5s ease";
    }

  
    </script>

</body>
</html>

