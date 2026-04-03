{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/"> --}}
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            {{-- </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html> --}}



{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Log in') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="antialiased bg-gray-50 text-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center p-4 sm:p-6">
        
        <div class="mb-8 transition-transform duration-500 hover:scale-105">
            <a href="/" class="flex flex-col items-center gap-2">
                  <x-application-logo />
                <h1 class="text-2xl font-black text-gray-800 tracking-tight">{{ __('HOMY') }} <span class="text-orange-500">{{ __('FOOD') }}</span></h1>
            </a>
        </div>

        <div class="w-full max-w-md bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
            <div class="p-8 sm:p-10">
                {{ $slot }}
            </div>
        </div>

        <p class="mt-8 text-sm text-gray-400">
            &copy; {{ date('Y') }} {{ __('all reserved') }} <span class="font-bold text-orange-400">{{ __('HOMY FOOD') }}</span>
        </p>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ ('Log in') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style> body { font-family: 'Cairo', sans-serif; } </style>
</head>
<body class="antialiased bg-gray-50 text-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center p-4 sm:p-6">
        
        <div class="mb-8 transition-transform duration-500 hover:scale-105">
            <a href="/" class="flex flex-col items-center gap-2">
                <x-application-logo />
                <h1 class="text-2xl font-black text-homy-green-700 tracking-tight">{{ __('HOMY') }} <span class="text-homy-gold-500">{{ __('FOOD') }}</span></h1>
            </a>
        </div>

        <div class="w-full max-w-md bg-white rounded-3xl shadow-xl shadow-homy-green-100/40 border border-homy-gold-100/50 overflow-hidden">
            <div class="p-8 sm:p-10">
                {{ $slot }}
            </div>
        </div>

        <p class="mt-8 text-sm text-gray-400">
            &copy; {{ date('Y') }} {{ __('all reserved') }} 
            <span class="font-bold text-homy-gold-500">{{ __('HOMY FOOD') }}</span>
        </p>
    </div>
</body>
</html>
