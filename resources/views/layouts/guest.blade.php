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
