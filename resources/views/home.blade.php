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

</body>
</html>

