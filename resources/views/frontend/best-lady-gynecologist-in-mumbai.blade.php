@extends('frontend.layouts.master')

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
                <img src="https://pearlfertilityandivf.com/_images/ab3.webp" class="img-fluid rounded-circle border border-5 border-white shadow-sm" style="max-width: 250px;" alt="Dr. Pritimala Gangurde Kadam">
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
                <img src="https://pearlfertilityandivf.com/_images/dr.rupali.webp" class="img-fluid rounded-circle border border-5 border-white shadow-sm" style="max-width: 250px;" alt="Dr.Rupali Gangurde">
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
<section class="py-5 bg-white pt-2 mb-4">
    <div class="container pb-4">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-dark mb-3">What is Gynecology?</h3>
            <div class="title-underline mx-auto"></div>
        </div>
        
        <p class="text-muted lh-lg mb-5 text-center px-lg-5" style="font-size: 1.05rem;">
            A gynecologist and an obstetrician almost seem to be twins. Women’s reproductive systems are the focus of gynaecology. Unlike obstetrics, which treats pregnant women and their complications, anaesthesiology treats females who are not pregnant. Gynecology focuses mainly on treating hormonal, urinary tract, uterine, and vaginal ailments in non-pregnant women. It depends on the individual’s condition whether they need surgery.
        </p>

        <!-- Accordion -->
        <div class="accordion custom-accordion" id="gynecologyAccordion">
            <div class="accordion-item border-0 border-bottom rounded-0 mb-3">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold text-dark px-0 py-3 shadow-none bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        When should you consult a gynecologist?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#gynecologyAccordion">
                    <div class="accordion-body px-0 pt-3 pb-4 text-muted lh-lg">
                        <p class="mb-4">Gynecologists specialize in female reproductive health. Including breasts, ovaries, uteruses, and fallopian tubes, they can treat all female reproductive health issues.</p>
                        <p class="mb-4">Best lady Gynecologist in Mumbai recommend annual screenings. Gynecologists who are reputable can provide you with the best treatment. When suffering from any of the following gynaecological issues, Pearl Fertility should be consulted:</p>
                        <ul class="mb-4 ps-4">
                            <li class="mb-2">Problems related to bisexuality or same-sex relationships</li>
                            <li class="mb-2">Intense cramps or abnormal or irregular cycles are symptoms of menstrual problems.</li>
                            <li class="mb-2">Infections caused by sexual contact</li>
                            <li class="mb-2">Termination, sterilization, and contraception of pregnancy</li>
                            <li class="mb-2">An ovarian disorder caused by polycystic ovaries</li>
                            <li class="mb-2">Reproductive system cancer, cervix cancer, or breast cancer</li>
                            <li class="mb-2">Continence problems with urine</li>
                            <li class="mb-2">Anomalies arising from birth</li>
                            <li class="mb-2">Dysfunction in sexuality</li>
                            <li class="mb-2">Issues related to menopause</li>
                            <li class="mb-2">Endometriosis is a condition mainly affecting the reproductive system</li>
                            <li class="mb-2">Breast-related problems such as fibroids, vaginal ulcers, vulval cysts, and ovarian cysts</li>
                            <li class="mb-2">A lack of support for the pelvic organs due to ligaments, tissues, and muscles</li>
                        </ul>
                        <p class="mb-0">It’s easy to ask questions about sexuality, menstruation, and other stuff once they feel comfortable with the gynaecologist.</p>
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
</style>
@endsection