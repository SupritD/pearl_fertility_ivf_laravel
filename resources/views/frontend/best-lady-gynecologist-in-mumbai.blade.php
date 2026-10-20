@extends('frontend.layouts.master')

@section('meta_title', 'Best Lady Gynecologist in Mumbai | Dr. Pritimala Kadam')
@section('meta_description', 'Consult Dr. Pritimala Kadam, one of the best lady gynecologists in Mumbai. Expert care for pregnancy, PCOS, infertility, IVF & women’s health. Book appointment.')
@section('meta_keywords', 'Best lady gynecologist in Mumbai, Best lady gynecologist in goregaon, Best lady gynecologist in malad, Best lady gynecologist in kandivali, Best lady gynecologist in borivali, Best lady gynecologist in dahisar')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('https://pearlfertilityandivf.com/_images/our-doctor.jpeg'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Best Lady Gynecologist In Mumbai</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Best Lady Gynecologist In Mumbai</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Doctors Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-4">
        
        <!-- Doctor 1 -->
        <div class="row align-items-center mb-5 pb-5 border-bottom border-white">
            <div class="col-lg-3 text-center mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/Dr-Pritimala-Gangurde-Kadam.jpg') }}" class="img-fluid rounded-circle border border-5 border-white shadow-sm" style="max-width: 250px;" alt="Dr. Pritimala Gangurde Kadam" title="Dr. Pritimala Gangurde Kadam">
            </div>
            <div class="col-lg-6 ps-lg-4 mb-4 mb-lg-0">
                <h3 class="fw-bold text-dark mb-1">Dr.Pritimala Gangurde Kadam</h3>
                <p class="text-muted mb-3">Gynecologist</p>
                <div class="mb-3">
                    <span class="badge border border-secondary text-secondary me-1 rounded-0 fw-normal">M.B.B.S.</span>
                    <span class="badge border border-secondary text-secondary me-1 rounded-0 fw-normal">D.N.B</span>
                    <span class="badge border border-secondary text-secondary rounded-0 fw-normal">INFERTILITY SPECIALIST</span>
                </div>
                <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                    MBBS DNB ( Obst & Gyn ) masters in reproductive medicine & IVF (London), PG reproductive medicine(ACOG), Diploma in Ivf & Rep medicine( Germany ). Work experience of 6 yrs at well reputed Dept of IVF, Lilavati hospital & research centre, Bandra West. Mumbai
                </p>
            </div>
            <div class="col-lg-3 border-start ps-lg-4">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-envelope text-pink me-2 fs-5"></i>
                    <a href="mailto:pearlfertilitynivf@gmail.com" class="text-dark text-decoration-none" style="font-size: 0.9rem;">pearlfertilitynivf@gmail.com</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-telephone text-pink me-2 fs-5"></i>
                    <a href="tel:+919022920663" class="text-dark text-decoration-none" style="font-size: 0.9rem;">+919022920663</a>
                </div>
                <a href="#" class="btn btn-pink rounded-pill px-4 py-2 fw-bold" style="font-size: 0.9rem;">BOOK APPOINTMENT <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>

        <!-- Doctor 2 -->
        <div class="row align-items-center">
            <div class="col-lg-3 text-center mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/Dr-Rupali-Gangurde.jpg') }}" class="img-fluid rounded-circle border border-5 border-white shadow-sm" style="max-width: 250px;" alt="Dr. Rupali Gangurde" title="Dr. Rupali Gangurde">
            </div>
            <div class="col-lg-6 ps-lg-4 mb-4 mb-lg-0">
                <h3 class="fw-bold text-dark mb-1">Dr.Rupali Gangurde</h3>
                <p class="text-muted mb-3">Gynecologist</p>
                <div class="mb-3">
                    <span class="badge border border-secondary text-secondary me-1 rounded-0 fw-normal">M.B.B.S</span>
                    <span class="badge border border-secondary text-secondary me-1 rounded-0 fw-normal">MD</span>
                    <span class="badge border border-secondary text-secondary me-1 rounded-0 fw-normal">(PATHOLOGY)</span>
                    <span class="badge border border-secondary text-secondary rounded-0 fw-normal">(GMC MIRAJ)</span>
                </div>
                <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                    Dr Rupali Gangurde performs all routine blood test, specialized investigation (hormone assay, semen analysis, allergy panel), Body Profile, Special interest in F.N.A.C., Cytology, Histopathology.
                </p>
            </div>
            <div class="col-lg-3 border-start ps-lg-4">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-envelope text-pink me-2 fs-5"></i>
                    <a href="mailto:pearlfertilitynivf@gmail.com" class="text-dark text-decoration-none" style="font-size: 0.9rem;">pearlfertilitynivf@gmail.com</a>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-telephone text-pink me-2 fs-5"></i>
                    <a href="tel:+919022920663" class="text-dark text-decoration-none" style="font-size: 0.9rem;">+919022920663</a>
                </div>
                <a href="#" class="btn btn-pink rounded-pill px-4 py-2 fw-bold" style="font-size: 0.9rem;">BOOK APPOINTMENT <i class="bi bi-arrow-right ms-1"></i></a>
            </div>
        </div>

    </div>
</section>

<!-- Who Are We Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Who Are We</h6>
            <h3 class="fw-bold text-dark mb-3">Best lady gynecologist in Mumbai</h3>
            <div class="title-underline mx-auto"></div>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5 mb-4 mb-lg-0">
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    Pearl Fertility and IVF also think about elderly couples who desire to get our services; for them, we own an in-house multidisciplinary team of doctors, technicians, dietitian and counsellors.
                </p>
            </div>
            <div class="col-lg-6">
                <!-- Progress Bars -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-dark" style="font-size: 0.9rem;">Embryologists</span>
                        <span class="fw-bold text-dark" style="font-size: 0.9rem;">80%</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar custom-progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-dark" style="font-size: 0.9rem;">ICSI Specialist</span>
                        <span class="fw-bold text-dark" style="font-size: 0.9rem;">92%</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar custom-progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="text-dark" style="font-size: 0.9rem;">Obstetrician</span>
                        <span class="fw-bold text-dark" style="font-size: 0.9rem;">67%</span>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar custom-progress-bar" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is Gynecology Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <!-- Section Header -->
        <div class="text-center mb-0">
            <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Information</h6>
            <h2 class="fw-bold text-dark mb-3">What is Gynecology?</h2>
            <div class="title-underline mx-auto mb-4"></div>
            <p class="text-muted lh-lg mx-auto" style="max-width: 900px; font-size: 1.05rem;">
                A gynecologist and an obstetrician almost seem to be twins. Women’s reproductive systems are the focus of gynaecology. Unlike obstetrics, which treats pregnant women and their complications, gynaecology treats females who are not pregnant. Gynecology focuses mainly on treating hormonal, urinary tract, uterine, and vaginal ailments in non-pregnant women. It depends on the individual’s condition whether they need surgery.
            </p>
        </div>
    </div>
</section>

<!-- Meet Our Specialist Section -->
<section class="py-5 bg-pink-subtle border-top">
    <div class="container py-4">
        <!-- Doctor Photo in Center -->
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/dr-pritimala-gangurde-kadam (2).jpg') }}" class="img-fluid rounded-circle border border-5 border-white shadow" style="max-width: 220px; width: 100%; aspect-ratio: 1/1; object-fit: cover; object-position: top;" alt="Dr. Pritimala Gangurde Kadam - Best Lady Gynecologist in Mumbai" title="Dr. Pritimala Gangurde Kadam - Best Lady Gynecologist in Mumbai">
            <h2 class="fw-bold text-dark mt-4 mb-2">Meet Our Specialist: Dr. Pritimala Gangurde Kadam</h2>
            <p class="text-pink fw-semibold text-uppercase mb-3" style="letter-spacing: 1px; font-size: 0.95rem;">Gynecologist &amp; Infertility Specialist</p>
            <div class="title-underline mx-auto mb-4"></div>
        </div>

        <!-- Introductory Paragraphs -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10 text-center">
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    Dr. Pritimala Gangurde Kadam is a gynecologist &amp; infertility specialist at Pearl Fertility &amp; IVF in Mumbai, with 15 years of professional experience. Her qualifications include MBBS &amp; DNB in Obstetrics &amp; Gynaecology, along with additional training in reproductive medicine &amp; IVF.
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    She provides guidance on women's reproductive health, infertility evaluation &amp; fertility treatment options based on each patient's individual needs &amp; medical history.
                </p>
            </div>
        </div>

        <!-- Qualifications & Experience Grid -->
        <div class="row g-4 mb-4">
            <!-- Qualifications & Specialist Training -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-pink-subtle rounded-circle p-2 me-3 text-pink d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-mortarboard-fill fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-0">Qualifications &amp; Specialist Training</h4>
                    </div>
                    <p class="text-muted mb-3">Dr. Pritimala Gangurde Kadam's qualifications &amp; additional training include:</p>
                    <ul class="list-unstyled mb-0 text-muted lh-lg">
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                            <span>MBBS</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                            <span>DNB in Obstetrics &amp; Gynaecology</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                            <span>Master's training in Reproductive Medicine &amp; IVF, London</span>
                        </li>
                        <li class="mb-2 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                            <span>Postgraduate training in Reproductive Medicine (ACOG), as listed in her existing profile</span>
                        </li>
                        <li class="mb-0 d-flex align-items-start">
                            <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                            <span>Diploma in IVF &amp; Reproductive Medicine, Germany</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Professional Experience -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-pink-subtle rounded-circle p-2 me-3 text-pink d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-briefcase-fill fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-0">Professional Experience</h4>
                    </div>
                    <p class="text-muted lh-lg mb-3">
                        Lady gynaecologist in Mumbai with 15 years of professional experience, Dr. Pritimala Gangurde Kadam has a background in gynecology &amp; reproductive medicine. Her professional profile includes experience in the IVF department at Lilavati Hospital &amp; Research Centre, Bandra West, Mumbai.
                    </p>
                    <p class="text-muted lh-lg mb-3">
                        Her clinical interests include infertility evaluation, <a href="{{ url('/ivf-cost-in-mumbai') }}" class="text-pink fw-bold text-decoration-none">IVF</a>, IUI, PCOS-related reproductive concerns &amp; other aspects of women's reproductive health.
                    </p>
                    <p class="text-muted lh-lg mb-0">
                        Patients seeking a lady gynecologist in Mumbai can learn about her qualifications, professional experience &amp; the fertility services available at Pearl Fertility &amp; IVF before deciding on their care.
                    </p>
                </div>
            </div>
        </div>

        <!-- Areas of Clinical Interest -->
        <div class="row g-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-3 p-4 bg-white">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-pink-subtle rounded-circle p-2 me-3 text-pink d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="bi bi-heart-pulse-fill fs-4"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-0">Areas of Clinical Interest</h4>
                    </div>
                    <p class="text-muted mb-4">Depending on the patient's diagnosis &amp; treatment needs, gynecological &amp; fertility care may include:</p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 rounded-2 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-check2-circle text-pink me-2"></i>Infertility evaluation</h6>
                                <p class="text-muted small mb-0 ps-4">Investigating potential factors affecting conception.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 rounded-2 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-check2-circle text-pink me-2"></i>IVF treatment</h6>
                                <p class="text-muted small mb-0 ps-4">Understanding when in vitro fertilization may be an appropriate option.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 rounded-2 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-check2-circle text-pink me-2"></i>IUI treatment</h6>
                                <p class="text-muted small mb-0 ps-4">Exploring intrauterine insemination for suitable patients.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 rounded-2 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-check2-circle text-pink me-2"></i>PCOS &amp; reproductive health</h6>
                                <p class="text-muted small mb-0 ps-4">Assessing menstrual irregularities, ovulation concerns &amp; associated fertility issues.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 rounded-2 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-check2-circle text-pink me-2"></i>Reproductive medicine</h6>
                                <p class="text-muted small mb-0 ps-4">Reviewing fertility investigations &amp; discussing suitable treatment pathways.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="p-3 rounded-2 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-check2-circle text-pink me-2"></i>Fertility preservation</h6>
                                <p class="text-muted small mb-0 ps-4">Understanding available options for preserving reproductive potential when medically appropriate.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 rounded-2 bg-pink-subtle text-center">
                        <p class="text-muted mb-0 fst-italic">
                            <i class="bi bi-info-circle text-pink me-1"></i> The recommended treatment depends on the patient's age, diagnosis, test results, medical history &amp; personal preferences.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appointment Call To Action -->
        <div class="text-center mt-5">
            <a href="{{ route('frontend.book-appointment') }}" class="btn btn-pink rounded-pill px-5 py-3 fw-bold shadow-sm" style="font-size: 1rem;">
                BOOK APPOINTMENT WITH DR. PRITIMALA GANGURDE KADAM <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- When should you consult a gynecologist Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <!-- Consultation & Guidance Card -->
        <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 bg-pink-subtle mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('assets/images/infertility.jpg') }}" class="img-fluid rounded-4 shadow-sm w-100" style="max-height: 320px; object-fit: cover;" alt="Gynecologist Consultation at Pearl Fertility &amp; IVF" title="Gynecologist Consultation">
                </div>
                <div class="col-lg-7 ps-lg-4">
                    <h3 class="fw-bold text-dark mb-3">When should you consult a gynecologist?</h3>
                    <p class="text-muted lh-lg mb-3" style="font-size: 1rem;">
                        Gynecologists specialize in female reproductive health. Including breasts, ovaries, uteruses, and fallopian tubes, they can treat all female reproductive health issues.
                    </p>
                    <p class="text-muted lh-lg mb-0" style="font-size: 1rem;">
                        Best lady Gynecologist in Mumbai recommend annual screenings. Gynecologists who are reputable can provide you with the best treatment. When suffering from any of the following gynaecological issues, Pearl Fertility should be consulted:
                    </p>
                </div>
            </div>
        </div>

        <!-- All 13 Issues - 2 Column Clean Grid with Exact Original Text -->
        <div class="row g-3 mb-5">
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Problems related to bisexuality or same-sex relationships</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Intense cramps or abnormal or irregular cycles are symptoms of menstrual problems.</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Infections caused by sexual contact</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Termination, sterilization, and contraception of pregnancy</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">An ovarian disorder caused by polycystic ovaries</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Reproductive system cancer, cervix cancer, or breast cancer</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Continence problems with urine</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Anomalies arising from birth</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Dysfunction in sexuality</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Issues related to menopause</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Endometriosis is a condition mainly affecting the reproductive system</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">Breast-related problems such as fibroids, vaginal ulcers, vulval cysts, and ovarian cysts</span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="p-3 rounded-3 bg-light h-100 border-start border-3 border-pink" style="border-color: #e83e8c !important;">
                    <div class="d-flex align-items-start">
                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1 fs-6"></i>
                        <span class="text-muted">A lack of support for the pelvic organs due to ligaments, tissues, and muscles</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Closing Note - Exact Original Text -->
        <div class="p-4 rounded-3 bg-white border border-pink shadow-sm text-center" style="border-color: rgba(232, 62, 140, 0.3) !important;">
            <p class="text-dark fw-medium mb-0" style="font-size: 1.05rem;">
                <i class="bi bi-chat-heart text-pink me-2 fs-5"></i>
                It’s easy to ask questions about sexuality, menstruation, and other stuff once they feel comfortable with the gynaecologist.
            </p>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQs) Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Got Questions?</h6>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions (FAQs)</h2>
            <div class="title-underline mx-auto"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion custom-faq-accordion" id="faqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                1. Who is the best lady gynecologist in Mumbai?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Choosing the best lady gynecologist in Mumbai depends on the doctor's qualifications, clinical experience &amp; communication style. Dr. Pritimala Gangurde Kadam at Pearl Fertility &amp; IVF has over 15 years of experience in gynecology &amp; fertility care.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                2. How can I find an experienced lady gynecologist in Mumbai?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Look for a qualified gynecologist with relevant clinical experience, appropriate medical registration &amp; expertise in your specific concern. You can also consider the clinic's location, available services &amp; how comfortably the doctor addresses your questions.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                3. What conditions does a lady gynecologist treat?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                A lady gynecologist can evaluate &amp; manage various women's health concerns, including irregular periods, PCOS, menstrual pain, hormonal concerns, reproductive health issues &amp; menopause-related symptoms.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                4. Can Dr. Pritimala Gangurde Kadam help with infertility &amp; IVF treatment?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Dr. Pritimala Gangurde Kadam is an experienced gynecologist &amp; fertility expert. At Pearl Fertility &amp; IVF, patients can explore infertility evaluation &amp; assisted reproductive treatment options, including IVF.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                                5. Does a lady gynecologist in Mumbai provide PCOS treatment?
                            </button>
                        </h2>
                        <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Yes. Gynecologists can assess PCOS-related concerns, such as irregular menstrual cycles, hormonal changes &amp; ovulation difficulties. Treatment may include lifestyle guidance, medication or fertility support, depending on the patient's symptoms &amp; reproductive goals.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading6">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                                6. When should I visit a lady gynecologist?
                            </button>
                        </h2>
                        <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Consider consulting a gynecologist if you experience persistent irregular periods, unusually heavy menstrual bleeding, pelvic pain, unusual vaginal discharge or difficulty conceiving. Severe pain or heavy bleeding accompanied by dizziness requires urgent medical assessment.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading7">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                                7. Can I consult a lady gynecologist for pregnancy planning?
                            </button>
                        </h2>
                        <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Yes. A gynecologist can provide preconception guidance, review relevant medical history, discuss recommended investigations &amp; advise on steps that may support a healthy pregnancy. Women with known reproductive health concerns may benefit from an earlier consultation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading8">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                                8. What is the difference between a gynecologist &amp; a fertility specialist?
                            </button>
                        </h2>
                        <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                A gynecologist focuses on women's reproductive &amp; reproductive-organ health, including menstrual &amp; hormonal concerns. A fertility specialist focuses specifically on evaluating &amp; managing difficulties with conception. Dr Pritimala Gangurde Kadam at Pearl fertility &amp; IVF expertise in both areas.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading9">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                                9. Does Pearl Fertility &amp; IVF offer fertility treatment in Mumbai?
                            </button>
                        </h2>
                        <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Pearl Fertility &amp; IVF provides fertility-related services in Mumbai. Patients can explore the clinic's available treatment options, including IVF &amp; IUI, &amp; discuss their suitability with the treating medical team.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                        <h2 class="accordion-header" id="faqHeading10">
                            <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                                10. Where is Pearl Fertility &amp; IVF located in Mumbai?
                            </button>
                        </h2>
                        <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#faqAccordion">
                            <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                Pearl Fertility &amp; IVF is located in Kandivali West, Mumbai. Patients looking for a lady gynecologist in Mumbai can review the clinic's website for its current address, directions &amp; service information.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Most Searched Keywords Section -->
<section class="py-5 text-white" style="background-color: #ff007f;">
    <div class="container py-4">
        <h5 class="fw-bold text-center mb-5">Most Searched Keyword For Best Gynecologist</h5>
        <div class="row justify-content-center px-lg-5">
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start">
                <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                <span style="font-size: 0.85rem; line-height: 1.4;">Best Lady Gynecologist in Mumbai</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-center">
                <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                <span style="font-size: 0.85rem; line-height: 1.4;">Best Lady Gynecologist in Goregaon</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-center">
                <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                <span style="font-size: 0.85rem; line-height: 1.4;">Best Lady Gynecologist in Malad</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-end">
                <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                <span style="font-size: 0.85rem; line-height: 1.4;">Best Lady Gynecologist in Kandivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-end pe-lg-4">
                <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                <span style="font-size: 0.85rem; line-height: 1.4;">Best Lady Gynecologist in Borivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start ps-lg-4">
                <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                <span style="font-size: 0.85rem; line-height: 1.4;">Best Lady Gynecologist in Dahisar</span>
            </div>
        </div>
    </div>
</section>

<style>
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
.text-pink {
    color: #e83e8c !important;
}
.border-pink {
    border-color: #e83e8c !important;
}
.btn-pink {
    background-color: #e83e8c;
    color: white;
    border: none;
}
.btn-pink:hover {
    background-color: #d82c7a;
    color: white;
}
.title-underline {
    width: 50px;
    height: 3px;
    background-color: #e83e8c;
}
.custom-progress-bar {
    background-color: #1a4971; /* Dark blue as seen in screenshot */
}
/* Accordion arrow styling */
.custom-accordion .accordion-button::after {
    background-image: none;
    font-family: "bootstrap-icons";
    content: "\F282"; /* bi-chevron-down */
    font-size: 1rem;
    color: #007bff; /* Primary blue color for icon */
    transform: none;
    transition: transform 0.2s ease-in-out;
}
.custom-accordion .accordion-button:not(.collapsed)::after {
    content: "\F286"; /* bi-chevron-up */
    color: #007bff;
    transform: none;
}
/* FAQ Accordion Styling */
.custom-faq-accordion .accordion-button:not(.collapsed) {
    color: #e83e8c !important;
    background-color: #fdf5f8 !important;
}
.custom-faq-accordion .accordion-button:focus {
    box-shadow: none;
    border-color: rgba(232, 62, 140, 0.25);
}
.hover-elevate {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.hover-elevate:hover {
    transform: translateY(-4px);
    box-shadow: 0 0.5rem 1.25rem rgba(232, 62, 140, 0.12) !important;
}
</style>
@endsection