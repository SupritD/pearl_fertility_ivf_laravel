<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-1 sticky-top z-3">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('frontend.index') }}">
            <img src="{{ asset('assets/images/logo/pearl-logo.png') }}" alt="Pearl Fertility and IVF" height="90">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#frontendNavbar"
            aria-controls="frontendNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="frontendNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-medium">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.index') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('frontend.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.about-us') ? 'active' : '' }}"
                        href="{{ route('frontend.about-us') }}">About Us</a>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link dropdown-toggle" href="#" id="facilitiesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Facilities
                    </a>
                    <div class="dropdown-menu mega-menu-content" aria-labelledby="facilitiesDropdown">
                        <div class="container">
                            <div class="row">
                                <!-- IVF TREATMENTS -->
                                <div class="col-md-2 mega-menu-column">
                                    <h6>IVF TREATMENTS</h6>
                                    <ul>
                                        <li><a href="{{ route('frontend.best-ivf-center-in-mumbai') }}">IVF Center In
                                                Mumbai</a></li>
                                        <li><a href="{{ route('frontend.ivf-cost-in-mumbai') }}">IVF Cost In Mumbai</a>
                                        </li>
                                        <li><a href="{{ route('frontend.iui-treatment-in-mumbai') }}">IUI Treatment In
                                                Mumbai</a></li>
                                        <li><a href="{{ route('frontend.imsi-treatment-in-mumbai') }}">IMSI Treatment In
                                                Mumbai</a></li>
                                        <li><a href="{{ route('frontend.icsi-treatment-for-infertility') }}">ICSI
                                                Treatment For Infertility</a></li>
                                        <li><a href="{{ route('frontend.fertility-evaluation') }}">Fertility
                                                Evaluation</a></li>
                                        <li><a href="{{ route('frontend.infertility-work-up') }}">Infertility Work
                                                Up</a></li>
                                        <li><a href="{{ route('frontend.blastocyst') }}">Blastocyst Transfer</a></li>
                                    </ul>
                                </div>
                                <!-- GYNEC SERVICES -->
                                <div class="col-md-3 mega-menu-column">
                                    <h6>GYNEC SERVICES</h6>
                                    <ul>
                                        <li><a href="{{ route('frontend.gynecologist-obstetrics-doctors-in-mumbai') }}">Best
                                                Gynecologist In Mumbai</a></li>
                                        <li><a href="{{ route('frontend.best-lady-gynecologist-in-mumbai') }}">Best Lady
                                                Gynecologist In Mumbai</a></li>
                                        <li><a href="{{ route('frontend.menopause-clinic') }}">Menopause Clinic</a></li>
                                        <li><a href="{{ route('frontend.contraception-counseling') }}">Contraception
                                                counseling</a></li>
                                        <li><a href="{{ route('frontend.pcos-treatment-in-mumbai') }}">PCOS Treatment In
                                                Mumbai</a></li>
                                    </ul>
                                </div>
                                <!-- FREEZING SERVICES -->
                                <div class="col-md-2 mega-menu-column">
                                    <h6>FREEZING SERVICES</h6>
                                    <ul>
                                        <li><a href="{{ route('frontend.oocyte') }}">Oocyte Freezing</a></li>
                                        <li><a href="{{ route('frontend.embryo-freezing') }}">Embryo Freezing</a></li>
                                        <li><a href="{{ route('frontend.semen-freezing') }}">Semen Freezing</a></li>
                                    </ul>
                                    <h6 class="mt-4">DONOR SERVICE</h6>
                                    <ul>
                                        <li><a href="{{ route('frontend.donor-sperm') }}">Donor Sperm</a></li>
                                        <li><a href="{{ route('frontend.egg-donation') }}">Egg Donation</a></li>
                                        <li><a href="{{ route('frontend.donor-embryo') }}">Donor Embryo</a></li>
                                    </ul>
                                </div>
                                <!-- OTHER SERVICES -->
                                <div class="col-md-3 mega-menu-column">
                                    <h6>OTHER SERVICES</h6>
                                    <ul>
                                        <li><a href="{{ route('frontend.automated-semen-analyser') }}">Automated Semen
                                                Analyser</a></li>
                                        <li><a href="{{ route('frontend.sonography') }}">Comprehensive Sonography</a>
                                        </li>
                                        <li><a href="{{ route('frontend.laproscopy') }}">Laparoscopy</a></li>
                                        <li><a href="{{ route('frontend.cervical-cancer') }}">Cervical Cancer
                                                Screening</a></li>
                                        <li><a href="{{ route('frontend.hysteroscopy') }}">Hysteroscopy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.doctor') ? 'active' : '' }}"
                        href="{{ route('frontend.doctor') }}">OUR DOCTORS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.blogs.*') ? 'active' : '' }}"
                        href="{{ route('frontend.blogs.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.faqs') ? 'active' : '' }}"
                        href="{{ route('frontend.faqs') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('frontend.contacts') ? 'active' : '' }}"
                        href="{{ route('frontend.contacts') }}">Contact</a>
                </li>
            </ul>
            <div class="d-flex ms-3">
                <a href="{{ route('frontend.book-appointment') }}" class="btn btn-primary rounded-pill px-4 py-2">Book
                    Appointment</a>
            </div>
        </div>
    </div>
</nav>