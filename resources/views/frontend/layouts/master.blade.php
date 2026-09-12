<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Primary Meta Tags -->
    <title>@yield('meta_title', 'Pearl Fertility and IVF')</title>
    <meta name="title" content="@yield('meta_title', 'Pearl Fertility and IVF')">
    <meta name="description" content="@yield('meta_description', 'Default description for Pearl Fertility and IVF.')">
    <meta name="keywords" content="@yield('meta_keywords', 'IVF, fertility, clinic, mumbai')">
    <link rel="canonical" href="@yield('canonical_url', url()->current())">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/pearl-logo.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:title" content="@yield('og_title', View::getSection('meta_title', 'Pearl Fertility and IVF'))">
    <meta property="og:description"
        content="@yield('og_description', View::getSection('meta_description', 'Default description for Pearl Fertility and IVF.'))">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo/pearl-logo.png'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="@yield('og_url', url()->current())">
    <meta property="twitter:title"
        content="@yield('og_title', View::getSection('meta_title', 'Pearl Fertility and IVF'))">
    <meta property="twitter:description"
        content="@yield('og_description', View::getSection('meta_description', 'Default description for Pearl Fertility and IVF.'))">
    <meta property="twitter:image" content="@yield('og_image', asset('assets/images/logo/pearl-logo.png'))">

    <!-- Schema Markup -->
    @yield('schema_markup')
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

    @if(config('app.show_dev_auth'))
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
    @endif
</body>

</html>