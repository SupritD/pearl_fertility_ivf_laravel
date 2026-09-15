@extends('frontend.layouts.master')

@section('content')
<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('storage/banners/page_header.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Book Appointment</h1>
    </div>
</section>

<!-- Main Appointment Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-start">
            
            <!-- Appointment Form -->
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="fw-bold mb-4">Online Appointment Form</h2>
                <p class="text-muted lh-lg mb-4">Please fill out the form below to request an appointment. Our team will get back to you shortly.</p>
                
                <form action="#" method="post" class="contact-form">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="text" name="first_name" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" name="last_name" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Last Name" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8 mb-4">
                            <input type="text" name="address" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Full Address">
                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="text" name="city" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="City">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="number" name="phone" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="email" name="email" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <input type="date" name="dob" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent text-muted" placeholder="Date of Birth">
                        </div>
                        <div class="col-md-6 mb-4">
                            <select name="slot" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent text-muted">
                                <option value="">Select Preferred Slot</option>
                                <option>9:00 a.m. - 12:00 p.m.</option>
                                <option>12:00 p.m. - 4:00 p.m.</option>
                                <option>4:00 p.m. - 8:00 p.m.</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <textarea name="message" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" rows="5" placeholder="Any specific details you want us to know..."></textarea>
                    </div>
                    <button type="submit" class="btn text-white px-5 py-2 fw-bold" style="background-color: #d12c75; border-radius: 3px;">Book Appointment</button>
                </form>
            </div>

            <!-- Sidebar Info -->
            <div class="col-lg-5 ps-lg-5">
                
                <!-- Need Help -->
                <div class="mb-5">
                    <h4 class="fw-bold mb-4">Need Help?</h4>
                    <p class="text-muted mb-4">In case of problems in filling out the form, please do let us know.</p>
                    
                    <div class="d-flex mb-3">
                        <i class="bi bi-envelope fs-5 text-pink me-3"></i>
                        <a href="mailto:pearlfertilitynivf@gmail.com" class="text-dark text-decoration-none text-muted">pearlfertilitynivf@gmail.com</a>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-telephone fs-5 text-pink me-3"></i>
                        <a href="tel:+919022920663" class="text-dark text-decoration-none text-muted">+91 90229 20663</a>
                    </div>
                </div>

                <!-- Departments -->
                <div class="mb-5">
                    <h4 class="fw-bold mb-4">Departments</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <a href="{{ route('frontend.best-ivf-center-in-mumbai') ?? '#' }}" class="text-decoration-none text-muted d-flex align-items-center hover-pink">
                                <i class="bi bi-hospital me-3 text-pink fs-5"></i> IVF Services
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ route('frontend.iui-treatment-in-mumbai') ?? '#' }}" class="text-decoration-none text-muted d-flex align-items-center hover-pink">
                                <i class="bi bi-capsule me-3 text-pink fs-5"></i> IUI Services
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ route('frontend.icsi-treatment-for-infertility') ?? '#' }}" class="text-decoration-none text-muted d-flex align-items-center hover-pink">
                                <i class="bi bi-activity me-3 text-pink fs-5"></i> ICSI service
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ route('frontend.donor-sperm') ?? '#' }}" class="text-decoration-none text-muted d-flex align-items-center hover-pink">
                                <i class="bi bi-person-hearts me-3 text-pink fs-5"></i> Donor service
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="{{ route('frontend.best-lady-gynecologist-in-mumbai') ?? '#' }}" class="text-decoration-none text-muted d-flex align-items-center hover-pink">
                                <i class="bi bi-gender-female me-3 text-pink fs-5"></i> Infertility Work UP
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social -->
                <div>
                    <h4 class="fw-bold mb-4">We're Social</h4>
                    <p class="text-muted mb-4 small">Care for your loved ones by sharing our blogs with your friends & family</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background-color: #d12c75;"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background-color: #d12c75;"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background-color: #d12c75;"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; border-radius: 50%; background-color: #d12c75;"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
.text-pink {
    color: #e83e8c !important;
}
.contact-form .form-control {
    border-radius: 3px !important;
}
.contact-form .form-control:focus {
    border-color: #e83e8c !important;
    box-shadow: none !important;
}
.hover-pink {
    transition: color 0.3s ease;
}
.hover-pink:hover {
    color: #e83e8c !important;
}
</style>
@endsection