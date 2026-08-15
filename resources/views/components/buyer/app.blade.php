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
    <div class="bg-homy-green-700 px-4 py-2 text-center text-xs font-bold tracking-wide text-white">
        <span class="lang-ar">شحن مجاني لأول طلب</span>
        <span class="lang-en">Free shipping on first order over 200 SYP - Code HOMY100</span>
    </div>
    <x-buyer.aside />

    <x-buyer.header />

    {{ $slot }}



    <x-buyer.footer />
    <script src="{{ asset('templates/assets/app.js') }}"></script>
</body>
