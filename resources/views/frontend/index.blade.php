@extends('frontend.layouts.master')

@section('content')
<!-- Banner Slider (SwiperJS) -->


<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="{{ asset('assets/images/banners/banner1.jpg') }}" alt="Welcome to Pearl Fertility and IVF">
      <div class="banner-caption">
        <h1 class="display-4 fw-bold mb-3">Where Miracles are Conceived with Care</h1>
        <p class="lead mb-4">-Trust the best for your Life's Biggest Dream.</p>
      </div>
    </div>
    <div class="swiper-slide">
      <img src="{{ asset('assets/images/banners/banner2.jpg') }}" alt="Advanced IVF Laboratory">
      <div class="banner-caption">
        <h1 class="display-4 fw-bold mb-3">Building Families, Creating Futures</h1>
        <p class="lead mb-4">-Guiding You on Your Path to Parenthood.</p>
      </div>
    </div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.mySwiper', {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.mySwiper .swiper-pagination',
        clickable: true,
      },
      effect: 'fade', // Optional smooth fade effect
    });

    var depSwiper = new Swiper('.departmentsSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.departmentsSwiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        }
    });

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
                slidesPerView: 3,
            },
        }
    });

    var gallerySwiper = new Swiper('.gallerySwiper', {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
        }
    });
  });
</script>

<div class="container py-5 mt-4 text-center">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2 class="fw-bold mb-4 text-primary">Welcome To Pearl Fertility And IVF</h2>
            <p class="lead text-muted lh-lg">
                Established in 2017, Pearl Fertility and IVF has been at the forefront of providing comprehensive fertility solutions, offering hope and realizing dreams for couples struggling with infertility. With our state-of-the-art facilities, cutting-edge technology, and a team of highly experienced fertility specialists, we are committed to guiding our patients through every step of their journey towards parenthood.
            </p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row text-center mb-5">
        <div class="col">
            <h2 class="fw-bold text-primary">Our Departments & Services</h2>
            <p class="text-muted">Comprehensive care tailored for you</p>
        </div>
    </div>
    <div class="swiper departmentsSwiper pb-5">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="{{ route('frontend.infertility-work-up') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-blue">
                        <div class="dep-icon"><i class="bi bi-clipboard2-pulse"></i></div>
                        <h4>Infertility Work UP</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.embryo-freezing') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-pink">
                        <div class="dep-icon"><i class="bi bi-snow"></i></div>
                        <h4>Freezing Service</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.hysteroscopy') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-blue">
                        <div class="dep-icon"><i class="bi bi-search"></i></div>
                        <h4>Hysteroscopy</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.laproscopy') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-pink">
                        <div class="dep-icon"><i class="bi bi-file-medical"></i></div>
                        <h4>Laparoscopy</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.best-ivf-center-in-mumbai') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-blue">
                        <div class="dep-icon"><i class="bi bi-hospital"></i></div>
                        <h4>IVF Services</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.iui-treatment-in-mumbai') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-pink">
                        <div class="dep-icon"><i class="bi bi-capsule"></i></div>
                        <h4>IUI Service</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.icsi-treatment-for-infertility') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-blue">
                        <div class="dep-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h4>ICSI service</h4>
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="{{ route('frontend.donor-sperm') }}" class="text-decoration-none">
                    <div class="department-box-1 bg-pink">
                        <div class="dep-icon"><i class="bi bi-person-hearts"></i></div>
                        <h4>Donor service</h4>
                    </div>
                </a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<!-- CTA Section -->
<section class="cta-section mt-5 pt-5 pb-5 pt-lg-0 pb-lg-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 cta-image-col">
                <!-- We place the image here, positioned absolute on desktop to break out of the section -->
                <img src="{{ asset('assets/images/family_cta.png') }}" alt="Happy Family" class="cta-image rounded d-none d-lg-block">
                <img src="{{ asset('assets/images/family_cta.png') }}" alt="Happy Family" class="img-fluid rounded d-block d-lg-none mb-4">
            </div>
            <div class="col-lg-7 py-5">
                <h2 class="fw-bold mb-5">We Offer Wide Range Of Services At Pearl Fertility And IVF</h2>
                
                <div class="cta-list">
                    <div class="cta-list-item">
                        <div class="cta-list-icon">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="fs-5">With You at Every Step.</div>
                    </div>
                    
                    <div class="cta-list-item">
                        <div class="cta-list-icon">
                            <i class="bi bi-emoji-smile"></i>
                        </div>
                        <div class="fs-5">Plan your family with bright future</div>
                    </div>
                    
                    <div class="cta-list-item">
                        <div class="cta-list-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <div class="fs-5">Providing care for future family</div>
                    </div>
                </div>
                
                <a href="{{ route('frontend.book-appointment') }}" class="btn cta-btn mt-4">BOOK APPOINTMENT</a>
            </div>
        </div>
    </div>
</section>

<!-- 1. About Pearl Fertility -->
<section class="py-5 bg-pink-subtle text-center">
    <div class="container py-4">
        <h2 class="section-title">About Pearl Fertility</h2>
        <h3 class="section-subtitle">What You Need To Know About Clinic</h3>
        <div class="title-underline"></div>
        <p class="about-quote">
            "Accessible, <span class="highlight">Compassionate Care,</span><br>
            <span class="highlight">Anytime,</span> Anywhere."
        </p>
        <p class="text-muted mt-3">We offer confidential, non-judgmental reproductive health care for people of any gender, age & nationality.</p>
    </div>
</section>

<!-- 2. Testimonial Notes -->
<section class="py-5">
    <div class="container py-4">
        <h2 class="text-center fw-bold mb-5">Testimonial Notes</h2>
        <div class="title-underline mb-5"></div>
        <div class="swiper testimonialSwiper pb-5">
            <div class="swiper-wrapper">
                <!-- Review 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar" style="background-color: #c95fd9;">S</div>
                            <div>
                                <div class="fw-bold fs-6">SNEHA BHIWANDKAR</div>
                                <div class="text-muted small">2 months ago</div>
                            </div>
                            <i class="bi bi-google ms-auto text-primary"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Dr. Pritimala is incredable. Not only has she taken great care of my health, but also she is lovely to speak with at every appointment thank you doctor"</p>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar" style="background-color: #f6d149;">S</div>
                            <div>
                                <div class="fw-bold fs-6">SHOBA GOSWAMI</div>
                                <div class="text-muted small">6 months ago</div>
                            </div>
                            <i class="bi bi-google ms-auto text-primary"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"It's a great experience to have such a talented doctor like doctor pritimala gangurde kadam to achieve my motherhood journey. Thanks a lot, Ma'am. I am always will be grateful to you"</p>
                    </div>
                </div>
                <!-- Review 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar" style="background-color: #f2623d;">C</div>
                            <div>
                                <div class="fw-bold fs-6">CHANCHALA KAMBLE</div>
                                <div class="text-muted small">6 months ago</div>
                            </div>
                            <i class="bi bi-google ms-auto text-primary"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"A very good IVF center.Dr. Pritimala is very caring and cooperative. In every appointment she is taking proper care of my health. Thank you madam for your kind support."</p>
                    </div>
                </div>
                <!-- Review 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="testimonial-avatar" style="background-color: #6a8c9e;">Y</div>
                            <div>
                                <div class="fw-bold fs-6">Yash Shah</div>
                                <div class="text-muted small">6 months ago</div>
                            </div>
                            <i class="bi bi-google ms-auto text-primary"></i>
                        </div>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p class="testimonial-text">"Thank you pritimala maam for your efforts and guidance. Because of your precise decisions and experience of correct medication our family is completed. Highly recommended."</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- 3. Frequently Asked Questions -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="section-title mb-4 text-start">Frequently Asked Questions</h2>
                
                <div class="accordion accordion-faq" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="faq-icon-circle"><i class="bi bi-question-lg"></i></div>
                                What Is IVF
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                IVF i.e. In vitro fertilization is a procedure where female eggs and male sperm are fertilized outside the body in a petri dish in a controlled environment.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="faq-icon-circle"><i class="bi bi-tree"></i></div>
                                When Is IVF Needed
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Broadly IVF is required for male factor infertility from azoospermia and various female factor infertility conditions like diminished ovarian reserve, defect in fallopian tubes etc.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="faq-icon-circle"><i class="bi bi-droplet"></i></div>
                                Are there any risks to having a baby through IVF?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                As such, there is no risk because of IVF procedures but there are few anecdotal reports of increased birth defect with IVF pregnancy.
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('frontend.faqs') }}" class="btn cta-btn mt-4">READ MORE</a>
            </div>
            <div class="col-lg-6 text-center">
                <!-- Using placeholder for pregnant woman / doctor -->
                <img src="https://via.placeholder.com/600x500/e83e8c/ffffff?text=Doctor+and+Patient" alt="Doctor and Patient" class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>
</section>

<!-- 4. Find Useful Information -->
<section class="py-5 gradient-pink-bg text-center">
    <div class="container py-5">
        <h2 class="fw-bold mb-5">Find Useful Information</h2>
        <div class="title-underline mb-5 bg-white"></div>
        
        <div class="row g-4 mt-4 text-start">
            <div class="col-md-4">
                <div class="info-step-number">01</div>
                <h4 class="info-step-title">Infertility & Evaluation</h4>
                <p class="info-step-text">We give uncommon consideration to the underlying workup for a infertile couple as it permits them to choose the correct sort of fertility treatment dependent on the underlying reports.</p>
            </div>
            <div class="col-md-4">
                <div class="info-step-number">02</div>
                <h4 class="info-step-title">Fertility Advice</h4>
                <p class="info-step-text">Discover the factors influencing fertility, learn about testing procedures, explore treatment choices like IVF and IUI, and find lifestyle tips for optimizing your reproductive health.</p>
            </div>
            <div class="col-md-4">
                <div class="info-step-number">03</div>
                <h4 class="info-step-title">Fertility Awareness Method</h4>
                <p class="info-step-text">Explore the principles of tracking your menstrual cycle, basal body temperature, and cervical mucus to determine your fertile days. This method can be used for both achieving pregnancy. Learn to make informed choices about your reproductive health.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. Image Gallery -->
<section class="py-5">
    <div class="container py-4 text-center">
        <h2 class="section-title mb-2">Image Gallery</h2>
        <div class="title-underline mb-5"></div>
        
        <div class="swiper gallerySwiper pb-5">
            <div class="swiper-wrapper">
                @for ($i = 2; $i <= 29; $i++)
                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/img-gallery/' . $i . '.png') }}" alt="Gallery Image" class="gallery-img">
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<!-- 6. Nutrition And Health Services -->
<section class="py-5 mb-5">
    <div class="container">
        <h2 class="section-title text-center mb-2">Nutrition And Health Services</h2>
        <div class="title-underline mb-5"></div>
        
        <div class="row g-0 rounded overflow-hidden shadow-sm">
            <div class="col-lg-6">
                <!-- Using placeholder for yoga / nutrition -->
                <img src="{{ asset('assets/images/yoga.jpg')}}" alt="Nutrition and Yoga" class="nutrition-img">
            </div>
            <div class="col-lg-6">
                <div class="nutrition-text-box">
                    <h3>Nutrition & Yoga.</h3>
                    <p class="mt-3">Shyft is a health platform that brings all health & well-being needs to one app. From understanding health - what’s good for you and what’s not, finding the right solutions, to having all your medical records & measuring health vitals in one place - find it all on Shyft! We also provide personalized Nutrition, Yoga and Dermatology services.</p>
                    <div>
                        <a href="#" class="btn cta-btn">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
