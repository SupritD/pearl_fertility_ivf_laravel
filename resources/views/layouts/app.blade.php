<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/pearl-logo.png') }}">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @guest
            <main class="py-4">
                @yield('content')
            </main>
        @else
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="min-height: calc(100vh - 56px);">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active fw-bold' : 'text-dark' }}" href="{{ route('admin.dashboard') }}">
                                        <i class="bi bi-speedometer2 me-2"></i> Dashboard
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.sliders.*') ? 'active fw-bold' : 'text-dark' }}" href="{{ route('admin.sliders.index') }}">
                                        <i class="bi bi-images me-2"></i> Sliders
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.reviews.*') ? 'active fw-bold text-primary' : 'text-dark' }}" href="{{ route('admin.reviews.index') }}">
                                        <i class="bi bi-star-half me-2"></i> Reviews
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active fw-bold' : 'text-dark' }}" href="{{ route('admin.blogs.index') }}">
                                        <i class="bi bi-journal-text me-2"></i> Blogs
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active fw-bold' : 'text-dark' }}" href="{{ route('admin.categories.index') }}">
                                        <i class="bi bi-tags me-2"></i> Categories
                                    </a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.tags.*') ? 'active fw-bold' : 'text-dark' }}" href="{{ route('admin.tags.index') }}">
                                        <i class="bi bi-hash me-2"></i> Tags
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('admin.leads.*') ? 'active text-primary' : 'text-dark' }}" href="{{ route('admin.leads.index') }}">
                                        <i class="bi bi-person-lines-fill me-2"></i> Leads
                                    </a>
                                </li>

                                <!-- Reports -->
                                <li class="nav-item mt-3 mb-1">
                                    <span class="text-muted small fw-bold text-uppercase px-3">Analytics</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('admin.reports.*') ? 'active text-primary' : 'text-dark' }}" href="{{ route('admin.reports.index') }}">
                                        <i class="bi bi-file-earmark-spreadsheet me-2"></i> Reports
                                    </a>
                                </li>

                                <hr class="my-3">
                                <li class="nav-item mb-2">
                                    <a class="nav-link {{ request()->routeIs('admin.profile') ? 'active fw-bold' : 'text-dark' }}" href="{{ route('admin.profile') }}">
                                        <i class="bi bi-person-gear me-2"></i> Profile Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        @endguest
    </div>
</body>
</html>
