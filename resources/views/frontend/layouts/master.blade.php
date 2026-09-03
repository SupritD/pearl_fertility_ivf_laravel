<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pearl Fertility and IVF</title>
    
    <!-- Scripts & Styles from Vite -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <style>
        .dev-sticky-btn {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px 0 0 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }
        .dev-sticky-btn a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            padding: 5px 15px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            text-align: center;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
        }
        .dev-sticky-btn a:hover {
            background: #fff;
            color: #000;
            border-color: #fff;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    @include('frontend.layouts.header')

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- Sticky Dev Button -->
    <div class="dev-sticky-btn">
        <span class="text-white small text-center mb-1 fw-bold">Dev Auth</span>
        @auth
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</body>
</html>
