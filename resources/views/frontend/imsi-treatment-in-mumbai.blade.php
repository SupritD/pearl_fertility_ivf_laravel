@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">IMSI Treatment In Mumbai</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">IMSI Treatment In Mumbai</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-pink-subtle mb-5">
    <div class="container py-5 mb-4">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <h2 class="fw-bold text-dark mb-4">What Is IMSI?</h2>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    IMSI is intracytoplasmic morphological selected sperm injection. This is the
                    procedure where the sperm is magnified 6600 times & then selected for injection. So the
                    magnification is 16 times higher than the magnification in ICSI. This helps in selecting a best
                    normal sperm for injection which prevents abortion to a large extent,
                    The couples who are going to get the benefit are the ones with
                </p>
                <ul class="list-unstyled text-muted lh-lg" style="font-size: 1.05rem;">
                    <li class="mb-2">1. Issue of teratospermia [ morphologically abnormal sperms ]</li>
                    <li class="mb-2">2. Couples with bad obstetric history or multiple abortions</li>
                    <li class="mb-2">3. Fertilisation failure because of sperm factor</li>
                </ul>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/IMSI.png') }}" class="img-fluid rounded shadow-sm w-75" alt="IMSI Treatment">
            </div>
        </div>
    </div>
</section>

<style>
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
</style>
@endsection