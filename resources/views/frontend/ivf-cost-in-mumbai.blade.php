@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">IVF Cost in Mumbai</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">IVF Cost in Mumbai</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white mb-5">
    <div class="container py-5 mt-3 mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <p class="text-muted lh-lg" style="font-size: 1.1rem;">
                    The cost of IVF (In Vitro Fertilization) in Mumbai can vary depending on various factors such as
                    the clinic, the specific procedures involved, any additional treatments or medications needed,
                    and the individual's medical situation. On average, IVF in Mumbai can range from around INR
                    1,00,000 to INR 2,50,000 per cycle. However, this is a rough estimate and costs can vary widely.
                    whereas at Pearl Fertility And IVF
                    treatment starts at Rs.90,000 to Rs.1,00,000.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://pearlfertilityandivf.com/images/fertility-eveluation.jpg" class="img-fluid w-100" style="object-fit: cover;" alt="IVF Cost Consultation">
            </div>
        </div>
    </div>
</section>

@endsection