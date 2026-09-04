@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Blastocyst Transfer</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Blastocyst Transfer</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-pink-subtle mb-5">
    <div class="container py-5 mb-4">
        <div class="row align-items-stretch">
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <h2 class="fw-bold text-dark mb-4">What Is Blastocyst?</h2>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    Blastocyst is a stage of embryo that reaches after 5-6 days after fertilization.
                    Its stage with multiple hollow balls just before implantation.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    What is difference between embryo and blastocyst?<br>
                    These are different stages of embryo formation. By day three of embryo formation, we see 4-8
                    celled structure which is referred as embryo and by fifth day, we see 80 to 100 cell structure
                    referred as Blastocyst.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    How blastocyst is formed?<br>
                    Eight cell structure divide multiple times and become 100 cell structure by fifth day, this is
                    blastocyst.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    What are advantages of Blastocyst Transfer?<br>
                    Blastocyst transfer offer improved embryo-endometrium synchrony resulting in better success rate
                    after transfer compared to embryo transfer. It mimics natural conception.
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    What is success rate of Blastocyst transfer?<br>
                    Blastocyst transfers success rate depends upon multiple factors of which age is very important.
                    Up to 30 years of female’s age, success rate is between 45-50% And between 30 years and 39 years
                    of age, success rate is close to 35-40%
                </p>
            </div>
            <div class="col-lg-6 text-center d-flex">
                <img src="https://pearlfertilityandivf.com/_images/balsto-1.jpg" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Blastocyst Transfer">
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