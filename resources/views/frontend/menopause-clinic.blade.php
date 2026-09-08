@extends('frontend.layouts.master')

@section('content')

    <!-- Page Banner -->
    <section class="page-banner"
        style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);">
        </div>
        <div class="container position-relative text-white">
            <h1 class="fw-bold display-5 mb-2">Menopause Clinic</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Menopause Clinic</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 bg-white">
        <div class="container py-4 mt-3 mb-4">
            <!-- Top Row -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        A Menopause Clinic is a specialized medical facility or department dedicated to
                        addressing the unique health needs and concerns of women as they transition through menopause
                        and beyond. Menopause typically occurs around the age of 45 to 55 when a woman's menstrual
                        cycles cease, marking the end of her reproductive years. However, the hormonal changes
                        associated with menopause can lead to various symptoms and health issues that may require
                        medical attention.
                    </p>
                    <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                        Menopause clinics typically offer a range of services tailored to help women
                        manage symptoms and maintain their overall health during this stage of life. Some common
                        services and areas of focus may include:
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://pearlfertilityandivf.com/web-page-images/menoapause-img.jpeg" class="img-fluid w-100"
                        style="object-fit: cover;" alt="Menopause Clinic">
                </div>
            </div>

            <!-- Bottom Row -->
            <div class="row">
                <div class="col-12 px-lg-4">
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        <span class="fw-bold text-dark">1. Symptom Management:</span> Menopause can cause a
                        variety of symptoms such as hot flashes, night sweats, vaginal dryness, mood changes, and sleep
                        disturbances. Menopause clinics may provide guidance and treatment options to help alleviate
                        these symptoms, including hormone replacement therapy (HRT), non-hormonal medications, lifestyle
                        modifications, and complementary therapies.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        <span class="fw-bold text-dark">2. Bone Health:</span> The decline in estrogen levels
                        during menopause can increase the risk of osteoporosis and bone fractures. Menopause clinics may
                        offer bone density testing, nutritional counseling, exercise programs, and medications to help
                        prevent or manage osteoporosis.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        <span class="fw-bold text-dark">3. Heart Health:</span> Estrogen also plays a role in
                        maintaining cardiovascular health, and the risk of heart disease may increase after menopause.
                        Menopause clinics may provide cardiovascular risk assessments, lifestyle recommendations, and
                        preventive measures to promote heart health.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        <span class="fw-bold text-dark">4. Sexual Health:</span> Changes in hormone levels
                        during menopause can affect sexual function and libido. Menopause clinics may offer counseling,
                        education, and treatments to address issues such as vaginal dryness, painful intercourse, and
                        loss of sexual desire.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        <span class="fw-bold text-dark">5. Cancer Screening:</span> Menopause clinics may offer
                        cervical cancer screening, breast cancer screening, and other preventive health services
                        tailored to the needs of menopausal women.
                    </p>
                    <p class="text-muted lh-lg mb-5" style="font-size: 1.05rem;">
                        <span class="fw-bold text-dark">6. Hormone Replacement Therapy (HRT):</span> For women
                        experiencing severe menopausal symptoms, HRT may be recommended to alleviate symptoms and reduce
                        the risk of certain health conditions. Menopause clinics can provide information, counseling,
                        and monitoring for women considering or undergoing HRT.
                    </p>
                    <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                        Overall, menopause clinics provide comprehensive care and support to help women
                        navigate the physical, emotional, and hormonal changes associated with menopause, promoting optimal
                        health and quality of life during this stage of life.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection