<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pearl Fertility and IVF</title>
    
    <!-- Scripts & Styles from Vite -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
