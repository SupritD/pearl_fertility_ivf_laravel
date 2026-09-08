@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Cervical Cancer Screening</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Cervical Cancer Screening</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Is Cervical cancer screening?</h3>
                <p class="text-muted lh-lg mb-4">Cervical cancer screening is a vital component of preventive healthcare for women. The primary aim of screening is to detect precancerous changes or early-stage cervical cancer before symptoms develop, allowing for timely intervention and treatment. The most common screening methods include:</p>
                
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">1. Pap Smear (Pap Test):</span> This test involves collecting cells from the cervix and examining them under a microscope to detect any abnormalities. It can identify changes in cervical cells that may indicate the presence of precancerous or cancerous lesions.
                </p>
                
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">2. HPV Test:</span> Human papillomavirus (HPV) is a common sexually transmitted infection linked to cervical cancer. HPV testing involves checking for the presence of high-risk HPV strains that can cause cervical cancer. It is often used in conjunction with Pap smear as part of cervical cancer screening
                </p>
                
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">3. HPV/Pap Co-Testing:</span> This approach combines both Pap smear and HPV testing. It's recommended for women aged 30 and older, as it provides a more comprehensive assessment of cervical health and can help identify those at higher risk of developing cervical cancer.
                </p>
                
                <p class="text-muted lh-lg mb-4">
                    Screening guidelines may vary depending on factors such as age, risk factors, and previous screening results. It's essential for women to discuss with their healthcare providers to determine the most appropriate screening schedule for them.
                </p>
                
                <p class="text-muted lh-lg mb-0">
                    Early detection through regular screening has significantly reduced the incidence and mortality rates associated with cervical cancer. Additionally, vaccination against HPV, particularly before the onset of sexual activity, is another important preventive measure against cervical cancer.
                </p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/laproscopy.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Cervical Cancer Screening">
            </div>
        </div>
    </div>
</section>

@endsection