@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/about-banner.jpg') }}'); background-size: cover; background-position: center; padding: 100px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,34,85,0.6);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-4">About Us</h1>
    </div>
</section>

<!-- Who Are We -->
<section class="py-5">
    <div class="container py-4 text-center">
        <h2 class="section-title mb-2">Who Are We</h2>
        <div class="title-underline mx-auto mb-4"></div>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <p class="lead text-muted">Pearl fertility & ivf is a State of art fertility set up in western suburb. It’s a group of highly qualified & experienced Doctors, embryologists & technicians. Each team member is expert & dedicated to their speciality.</p>
            </div>
        </div>

        <div class="row position-relative mt-5">
            <!-- connecting line -->
            <div class="d-none d-md-block" style="position: absolute; top: 30px; left: 10%; width: 80%; height: 1px; border-top: 1px dashed #ccc; z-index: 0;"></div>
            
            <div class="col-md-3 mb-4 mb-md-0 position-relative z-1">
                <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px; border: 2px solid #fff;">
                    <i class="bi bi-award fs-3 text-pink"></i>
                </div>
                <h6 class="fw-bold px-3">Highly Qualified Fertility & IVF Expert</h6>
            </div>
            <div class="col-md-3 mb-4 mb-md-0 position-relative z-1">
                <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px; border: 2px solid #fff;">
                    <i class="bi bi-cpu fs-3 text-pink"></i>
                </div>
                <h6 class="fw-bold px-3">High-Tech Equipment</h6>
            </div>
            <div class="col-md-3 mb-4 mb-md-0 position-relative z-1">
                <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px; border: 2px solid #fff;">
                    <i class="bi bi-hospital fs-3 text-pink"></i>
                </div>
                <h6 class="fw-bold px-3">All The Facilities Available Under One Roof</h6>
            </div>
            <div class="col-md-3 mb-4 mb-md-0 position-relative z-1">
                <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px; border: 2px solid #fff;">
                    <i class="bi bi-headset fs-3 text-pink"></i>
                </div>
                <h6 class="fw-bold px-3">Comprehensive Support Services</h6>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 text-center">
                <img src="{{ asset('assets/images/our-doctor.jpeg') }}" alt="Dr. Pritimala" class="img-fluid rounded-circle shadow-lg" style="max-width: 400px; border: 10px solid white;">
            </div>
            <div class="col-lg-7">
                <h2 class="fw-bold">Best Lady Gynecologist</h2>
                <h5 class="text-pink mb-4">M.B.B.S., D.N.B.- INFERTILITY SPECIALIST</h5>
                <p class="text-muted mb-4 lh-lg">MBBS DNB ( Obst & Gyn ) masters in reproductive medicine & IVF (London), PG reproductive medicine(ACOG), Diploma in Ivf & Rep medicine( Germany ). Work experience of 6 yrs at well reputed Dept of IVF, Lilavati hospital & research centre, Bandra West. Mumbai</p>
                <div class="p-4 bg-white rounded shadow-sm border-start border-4 border-pink" style="border-color: #e83e8c !important;">
                    <i class="bi bi-quote fs-1 text-pink opacity-50"></i>
                    <p class="fst-italic mb-2 text-muted">Pearl Fertility and IVF also think about elderly couples who desire to get our services; for them.</p>
                    <p class="fw-bold mb-0 text-dark">- Dr.Pritimala Gangurde Kadam</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Pearl 1 -->
<section class="py-5">
    <div class="container py-4">
        <h2 class="section-title text-center mb-2">Why Choose Pearl Fertility and IVF for Your Fertility Journey?</h2>
        <div class="title-underline mx-auto mb-5"></div>
        
        <ol class="list-group list-group-numbered list-group-flush mb-4">
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">Expertise and Experience:</span> Established in 2017, <a href="{{ url('/') }}" class="text-pink text-decoration-none fw-bold">Pearl Fertility and IVF</a> brings years of collective experience in fertility treatment. Our team of fertility specialists comprises some of the most experienced and respected professionals in the field, dedicated to providing the highest standard of care.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">Personalized Approach:</span> We understand that every patient's journey is unique. That's why we take a personalized approach to fertility treatment, tailoring our services to meet the specific needs, preferences, and goals of each individual or couple. From initial consultations to ongoing support, we're committed to guiding you every step of the way.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">State-of-the-Art Facilities:</span> Our IVF Centre is equipped with the latest advancements in reproductive technology, ensuring that our patients have access to the most innovative and effective treatments available. Our modern facilities provide a comfortable and supportive environment for patients undergoing fertility treatment.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">Comprehensive Services:</span> At Pearl Fertility and IVF, we offer a comprehensive range of fertility services, including in vitro fertilization (IVF), intrauterine insemination (IUI), egg freezing, donor egg/sperm programs, preimplantation genetic testing (PGT), and more. Whatever your needs may be, we have the expertise and resources to help you achieve your dream of parenthood.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">High Success Rates:</span> Our success rates speak for themselves. Through our dedication to excellence, advanced technology, and personalized care, we have helped countless individuals and couples realize their dreams of starting a family.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">Compassionate Support:</span> We understand that the journey to parenthood can be emotionally challenging. That's why we offer a range of support services to our patients, including counseling, support groups, financial assistance, and fertility preservation options. Our team is here to provide compassionate support every step of the way.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">Continued Research and Innovation:</span> As leaders in the field of reproductive medicine, we are committed to ongoing research and innovation. We continually strive to improve our techniques and outcomes, ensuring that our patients receive the best possible care.</li>
            <li class="list-group-item border-0 pb-3"><span class="fw-bold">Positive Patient Experiences:</span> Our patients are at the center of everything we do. We take great pride in the positive feedback and testimonials we receive from those we've helped along their fertility journey. Your satisfaction and success are our greatest rewards.</li>
        </ol>
        
        <p class="text-muted">When you choose Pearl Fertility and IVF, you're choosing a trusted partner who is dedicated to helping you achieve your dream of parenthood. <a href="{{ route('frontend.contacts') }}" class="text-pink fw-bold text-decoration-none">Contact us</a> today to schedule your consultation and take the first step towards building your family.</p>
    </div>
</section>

<!-- Features Grid -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <h2 class="section-title text-center mb-2">Why Choose Pearl Fertility & IVF</h2>
        <div class="title-underline mx-auto mb-5"></div>
        
        <div class="row g-4 text-center mt-3">
            <div class="col-md-4 mb-4">
                <i class="bi bi-heart-pulse fs-1 text-pink mb-3 d-block"></i>
                <h5 class="fw-bold">Family Like Care</h5>
                <p class="text-muted small">To assure the best & genuine fertility solutions to all needy couples.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-person-heart fs-1 text-pink mb-3 d-block"></i>
                <h5 class="fw-bold">Excellent Support Staff</h5>
                <p class="text-muted small">Personal attention throughout the treatment.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-ambulance fs-1 text-pink mb-3 d-block"></i>
                <h5 class="fw-bold">Emergency Services</h5>
                <p class="text-muted small">24/7 support for any emergency.</p>
            </div>
            
            <!-- divider line for grid aesthetics -->
            <div class="col-12 d-none d-md-block"><hr class="text-muted opacity-25 my-0"></div>

            <div class="col-md-4 mb-4 mt-md-4">
                <i class="bi bi-file-medical fs-1 text-pink mb-3 d-block"></i>
                <h5 class="fw-bold">Qualified Doctors</h5>
                <p class="text-muted small">Highly Qualified Fertility & IVF Expert.</p>
            </div>
            <div class="col-md-4 mb-4 mt-md-4">
                <i class="bi bi-award fs-1 text-pink mb-3 d-block"></i>
                <h5 class="fw-bold">Experienced</h5>
                <p class="text-muted small">Excellent care at affordable cost.</p>
            </div>
            <div class="col-md-4 mb-4 mt-md-4">
                <i class="bi bi-cpu fs-1 text-pink mb-3 d-block"></i>
                <h5 class="fw-bold">Advanced Machines</h5>
                <p class="text-muted small">Assuring world’s best advanced technology & protocols.</p>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Info Sections -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-4">
        <p class="text-muted mb-5">Established in 2017, Pearl Fertility and IVF has been at the forefront of providing comprehensive fertility solutions, offering hope and realizing dreams for couples struggling with infertility. With our state-of-the-art facilities, cutting-edge technology, and a team of highly experienced fertility specialists, we are committed to guiding our patients through every step of their journey towards parenthood.</p>
        
        <h5 class="fw-bold mb-3 text-dark">Our Mission</h5>
        <p class="text-muted mb-5">At Pearl Fertility and IVF, our mission is to provide compassionate, personalized care to every individual or couple who walks through our doors. We understand the emotional and physical challenges that accompany infertility, and our dedicated team is here to provide unwavering support, guidance, and expertise throughout the entire fertility treatment process.</p>
        
        <h5 class="fw-bold mb-3 text-dark">Our Approach</h5>
        <p class="text-muted mb-5">We believe in a personalized approach to fertility treatment, recognizing that every individual or couple's journey is unique. Our team of fertility specialists works closely with each patient to develop customized treatment plans tailored to their specific needs, preferences, and goals. From initial consultations and diagnostic testing to advanced reproductive technologies such as in vitro fertilization (IVF), intrauterine insemination (IUI), and egg freezing, we offer a comprehensive range of fertility services designed to maximize success while minimizing stress.</p>
        
        <h5 class="fw-bold mb-3 text-dark">Experienced and Compassionate Team</h5>
        <p class="text-muted mb-5">At Pearl Fertility and IVF, our team of fertility specialists is comprised of highly trained and experienced professionals who are dedicated to helping our patients achieve their dreams of parenthood. With expertise in reproductive endocrinology, embryology, andrology, and fertility nursing, our team works collaboratively to deliver the highest standard of care with compassion and empathy.</p>
        
        <h5 class="fw-bold mb-3 text-dark">Schedule Your Consultation Today</h5>
        <p class="text-muted mb-0">If you're struggling with infertility and exploring your options for fertility treatment, we invite you to schedule a consultation with our team at Pearl Fertility and IVF. Together, we can explore your options, address your concerns, and develop a personalized treatment plan that brings you one step closer to realizing your dreams of parenthood. Contact us today to take the first step on your journey towards a brighter future.</p>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5 text-white" style="background: url('{{ asset('assets/images/bg2.jpg') }}') center/cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85);"></div>
    <div class="container py-5 position-relative z-1 text-center">
        <h2 class="fw-bold mb-5">Our Happy Parents</h2>
        
        <div class="swiper testimonialSwiper pb-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="p-4 bg-white text-dark text-start rounded h-100 mx-2 shadow">
                        <p class="fst-italic text-muted">"A very good IVF center.Dr. Pritimala is very caring and cooperative. In every appointment she is taking proper care of my health. Thank you madam for your kind support. "</p>
                        <div class="d-flex align-items-center mt-4 pt-3 border-top">
                            <div class="bg-pink text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-weight: bold; background-color: #f2623d;">C</div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">CHANCHALA KAMBLE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-4 bg-white text-dark text-start rounded h-100 mx-2 shadow">
                        <p class="fst-italic text-muted">"Dr. Pritimala is incredable. Not only has she taken great care of my health, but also she is lovely to speak with at every appointment thank you doctor"</p>
                        <div class="d-flex align-items-center mt-4 pt-3 border-top">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-weight: bold; background-color: #c95fd9;">S</div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">SNEHA BHIWANDKAR</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="p-4 bg-white text-dark text-start rounded h-100 mx-2 shadow">
                        <p class="fst-italic text-muted">"It's a great experience to have such a talented doctor like doctor pritimala gangurde kadam to achieve my motherhood journey. Thanks a lot, Ma'am. I am always will be grateful to you"</p>
                        <div class="d-flex align-items-center mt-4 pt-3 border-top">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-weight: bold; background-color: #f6d149;">S</div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">SHOBA GOSWAMI</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- Custom Styles specifically for this page -->
<style>
.text-pink {
    color: #e83e8c !important;
}
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    if(typeof Swiper !== 'undefined') {
        var testimonialSwiper = new Swiper('.testimonialSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonialSwiper .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 2,
                }
            }
        });
    }
  });
</script>

@endsection