@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Semen Freezing</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Semen Freezing</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h5 class="fw-bold text-dark mb-3">What is Semen Freezing?</h5>
                <p class="text-muted lh-lg mb-4">Sperm freezing or Semen freezing referred as cryopreservation is a process of collecting semen, then analyzing and preserving it for later use.</p>
                
                <h5 class="fw-bold text-dark mb-3">How semen freezing is done?</h5>
                <p class="text-muted lh-lg mb-4">Collected semen is analyzed with the help of high definition microscope and frozen with the help of liquid nitrogen into specialized cylinders.</p>
                
                <h5 class="fw-bold text-dark mb-3">When it is required to freeze semen?</h5>
                <p class="text-muted lh-lg mb-4">Freezing of semen is required if sperm count is low, sometimes required before IVF procedures, its necessary before cancer treatment and necessary after semen donations.</p>
                
                <h5 class="fw-bold text-dark mb-3">Is there any risk of using frozen semen?</h5>
                <p class="text-muted lh-lg mb-4">Yes, freezing process can damage sperms motility. But for IVF and ICSI procedures, best sperms are selected for fertilization.</p>
                
                <h5 class="fw-bold text-dark mb-3">For how long we can store frozen semen?</h5>
                <p class="text-muted lh-lg mb-4">Normally semen is frozen and stored for up to 10 years, but can be stored longer if necessary.</p>
                
                <h5 class="fw-bold text-dark mb-3">What is cost of semen freezing?</h5>
                <p class="text-muted lh-lg mb-4">Cost of semen freezing varies from center to center but it is minimal.</p>
                
                <p class="text-muted lh-lg mb-0">For further queries, please write to us on <a href="mailto:pearlfertilityandivf@gmail.com" class="text-pink text-decoration-none">pearlfertilityandivf@gmail.com</a> or send enquiry on <a href="https://www.pearlfertilityandivf.com" class="text-pink text-decoration-none" target="_blank">www.pearlfertilityandivf.com</a></p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/iui-1.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Semen Freezing">
            </div>
        </div>
    </div>
</section>

<style>
.text-pink {
    color: #e83e8c !important;
}
</style>

@endsection