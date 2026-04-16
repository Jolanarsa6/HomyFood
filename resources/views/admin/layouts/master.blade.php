<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Dashboard - Homy Food</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link href="{{ asset('admin/assets/dist/css/tabler.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/dist/css/demo.min.css?1692870487') }}" rel="stylesheet" />

    <link href="{{ asset('admin/assets/dist/css/homy-them.css') }}" rel="stylesheet" />


</head>

<body>
    <script src="{{ asset('admin/assets/dist/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page">
        
        <!-- Header -->
        @include('admin.layouts.header')


        <!-- Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Contents -->
        <div class="page-wrapper">

            @yield('content')

        </div>

        <!-- footer -->
        @include('admin.layouts.footer')
    </div>
    </div>


    <script src="{{ asset('admin/assets/dist/js/tabler.min.js?1692870487') }}" defer></script>
    <script src="{{ asset('admin/assets/dist/js/demo.min.js?1692870487') }}" defer></script>

</body>

</html>
