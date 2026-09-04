@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/contact.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Contact Us</h1>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-start">
            <!-- Visit Our Center -->
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="fw-bold mb-4">Visit Our Center</h2>
                <p class="text-muted lh-lg mb-4">Pearl fertility & ivf is a State of art fertility set up in western suburb. It’s a group of highly qualified & experienced Doctors, embryologists & technicians. Each team member is expert & dedicated to their speciality.</p>
                <div class="d-flex align-items-center mt-2">
                    <i class="bi bi-telephone-fill fs-4 text-pink me-3"></i>
                    <a href="tel:+919022920663" class="text-pink fw-bold text-decoration-none fs-5">Helpline : +91 902-292-0663</a>
                </div>
            </div>
            
            <!-- Enquiry Form -->
            <div class="col-lg-6 ps-lg-5">
                <h2 class="fw-bold mb-4">Enquiry Form</h2>
                <form action="#" method="post" class="contact-form">
                    <div class="mb-4">
                        <input type="text" name="name" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Full Name" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" name="email" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Email" required>
                    </div>
                    <div class="mb-4">
                        <input type="number" name="phone" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" placeholder="Phone" required>
                    </div>
                    <div class="mb-4">
                        <textarea name="message" class="form-control border-secondary border-opacity-25 py-3 shadow-none bg-transparent" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn text-white w-25 py-2 fw-bold" style="background-color: #d12c75; border-radius: 3px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Addresses Section -->
<section class="py-5 border-top bg-white">
    <div class="container py-4">
        <div class="row">
            <!-- Kandivali Centre -->
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5 position-relative">
                <h4 class="fw-bold mb-4">Kandivali Centre</h4>
                <div class="d-flex mb-3">
                    <i class="bi bi-geo-alt fs-5 text-muted me-3 mt-1"></i>
                    <p class="text-muted mb-0">First Floor, Kanyakumari Heights, Bandar Pakhadi Rd, off New Link Road, Kandivali, Maharashtra Nagar,<br>Kandivali West, Mumbai, Maharashtra 400067</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="bi bi-telephone fs-5 text-muted me-3"></i>
                    <a href="tel:+918779580308" class="text-dark text-decoration-none">+91 8779580308</a>
                </div>
                <div class="d-flex mb-4">
                    <i class="bi bi-envelope fs-5 text-muted me-3"></i>
                    <a href="mailto:pearlfertilitynivf@gmail.com" class="text-dark text-decoration-none">pearlfertilitynivf@gmail.com</a>
                </div>
                <img src="https://pearlfertilityandivf.com/address-images/KandivaliCenterAddress.png" alt="Kandivali QR Code" style="width: 100px;">
                
                <!-- Divider for desktop view -->
                <div class="d-none d-lg-block" style="position: absolute; right: 0; top: 0; bottom: 0; width: 1px; background-color: #dee2e6;"></div>
            </div>
            
            <!-- Borivali Centre -->
            <div class="col-lg-6 ps-lg-5 mt-5 mt-lg-0">
                <h4 class="fw-bold mb-4">Borivali Centre</h4>
                <div class="d-flex mb-3">
                    <i class="bi bi-geo-alt fs-5 text-muted me-3 mt-1"></i>
                    <p class="text-muted mb-0">Our Borivali Centre Location:<br>1st Floor, Gorai Matru Ashish Society, B-Wing, Opp.Azra Bank,<br>RSC Rd Number 52, Gorai 2,<br>Borivali West, Mumbai, Maharashtra 400092</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="bi bi-telephone fs-5 text-muted me-3"></i>
                    <a href="tel:+919022920663" class="text-dark text-decoration-none">+919022920663</a>
                </div>
                <div class="d-flex mb-4">
                    <i class="bi bi-envelope fs-5 text-muted me-3"></i>
                    <a href="mailto:pearlfertilitynivf@gmail.com" class="text-dark text-decoration-none">pearlfertilitynivf@gmail.com</a>
                </div>
                <img src="https://pearlfertilityandivf.com/address-images/BorivaliCenterAddress.png" alt="Borivali QR Code" style="width: 100px;">
            </div>
        </div>
    </div>
</section>

<!-- Most Searched Keywords Section -->
<section class="py-5 text-white" style="background-color: #ff007f;">
    <div class="container py-4">
        <h5 class="fw-bold text-center mb-5">Most Searched Keyword of Website</h5>
        <div class="row justify-content-center px-lg-5">
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best Gynecologist Hospital in Mumbai</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best Gynecologist Hospital in Goregaon</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best Gynecologist Hospital in Malad</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best Gynecologist Hospital in Kandivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best Gynecologist Hospital in Borivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best Gynecologist Hospital in Dahisar</span>
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
</style>
@endsection