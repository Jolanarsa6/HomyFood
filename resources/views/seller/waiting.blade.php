<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <title>قيد المعالجة - Homy Food</title>
    
    <link href="{{ asset('admin/assets/dist/css/tabler.min.css') }}" rel="stylesheet" />
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

        :root {
            --homy-green: #1A472A;
            --homy-gold: #C4A462;
            --homy-bg: #f9f9f9;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background-color: var(--homy-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* حاوية التصميم */
        .waiting-container {
            text-align: center;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
        }

        /* شعار متحرك (Loader) بشكل فاخر */
        .loader-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 2rem;
        }

        .loader-circle {
            width: 100%;
            height: 100%;
            border: 4px solid #EAD5AC;
            border-top: 4px solid var(--homy-green);
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
        }

        .loader-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--homy-gold);
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* النصوص */
        .waiting-title {
            color: var(--homy-green);
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .waiting-text {
            color: #555;
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
        }

        /* الزر الاحترافي */
        .btn-home {
            background-color: var(--homy-green);
            color: white !important;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid var(--homy-green);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-home:hover {
            background-color: transparent;
            color: var(--homy-green) !important;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(26, 71, 42, 0.2);
        }

        /* دعم الوضع الليلي */
        [data-bs-theme="dark"] body {
            background-color: #0A1411;
        }
        [data-bs-theme="dark"] .waiting-title {
            color: var(--homy-gold);
        }
        [data-bs-theme="dark"] .waiting-text {
            color: #b0b0b0;
        }
        [data-bs-theme="dark"] .loader-circle {
            border-color: #1c4d2e;
            border-top-color: var(--homy-gold);
        }
    </style>
</head>
<body data-bs-theme="light"> <div class="waiting-container">
        <div class="loader-wrapper">
            <div class="loader-circle"></div>
            <div class="loader-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
            </div>
        </div>

        <h1 class="waiting-title">طلبك قيد المراجعة</h1>
        <p class="waiting-text">الرجاء الانتظار بضعة أيام لحين التأكد من المعلومات و قبول طلبك ، ستصلك رسالة بريد الكتروني تؤكد نجاح العملية..  يمكنك تصفح الموقع و تسجيل حساب مشتري لحين ذلك .  😉</p>
        <a href="{{ url('/') }}" class="btn-home">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            العودة للرئيسية
        </a>
    </div>

    <script>
        if (localStorage.getItem('tablerTheme') === 'dark') {
            document.body.setAttribute('data-bs-theme', 'dark');
        }
    </script>
</body>
</html>