<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}"
    class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homy Food | {{ $title ?? config('app.name') }}</title>
    <meta name="description" content="Homy Food premium homemade food marketplace">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">


    <link rel="stylesheet" href="{{ asset('templates/assets/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Prevent Flicker: Apply theme before body renders -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="text-slate-800 dark:text-slate-100">
    <div id="sidebarOverlay" class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm lg:hidden"></div>

        <aside id="sidebar" class="offcanvas-sidebar fixed top-0 right-0 z-50 h-full w-80 max-w-[88vw] overflow-y-auto custom-scrollbar border-s border-homy-gold-200/60 bg-white/95 p-6 shadow-2xl shadow-black/25 backdrop-blur-xl dark:border-homy-gold-600/40 dark:bg-[#12211B]/95">
          @include('buyer.layouts.sidebar')
        </aside>
    <!-- Page Heading -->
    @include('buyer.layouts.header');

    <!-- Page Content -->
        @yield('content')

        <!-- footer -->
       <x-footer/>
    

    <script src="../assets/app.js"></script>
</body>
</html>