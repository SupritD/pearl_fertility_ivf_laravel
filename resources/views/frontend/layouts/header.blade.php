<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('frontend.index') }}">
            <img src="{{ asset('assets/images/logo/pearl-logo.png') }}" alt="Pearl Fertility and IVF" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#frontendNavbar" aria-controls="frontendNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="frontendNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-medium">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}" aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.about-us') ? 'active' : '' }}" href="{{ route('frontend.about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.doctor') ? 'active' : '' }}" href="{{ route('frontend.doctor') }}">OUR DOCTORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.blogs.*') ? 'active' : '' }}" href="{{ route('frontend.blogs.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.faqs') ? 'active' : '' }}" href="{{ route('frontend.faqs') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.contacts') ? 'active' : '' }}" href="{{ route('frontend.contacts') }}">Contact</a>
                </li>
            </ul>
            <div class="d-flex ms-3">
                <a href="{{ route('frontend.book-appointment') }}" class="btn btn-primary rounded-pill px-4 py-2">Book Appointment</a>
            </div>
        </div>
    </div>
</nav>
