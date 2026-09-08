@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Donor Sperm</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Donor Sperm</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <p class="text-muted lh-lg mb-4">Donor Sperms or donated sperms are required in female or couple who couldn't conceive because of male factor infertility. Usually these males have azoospermia that is absence of sperms in husbands semen. Males who donates sperms are called as sperm donors. After recent Bollywood movie named Vicky Donor, there is widespread understanding of this subject.</p>
                
                <h5 class="fw-bold text-dark mb-3">Donor Sperm Requirements</h5>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Males between 18yrs-35 years of age</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Those without any genetic/hereditary abnormalities</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Well Educated</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> One without any genetic abnormalities</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> One without family history of medical illness</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> One without diseases which can be transferred through donated semen</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> One who is physically and Psychologically fit to donate semen</li>
                </ul>
                
                <h5 class="fw-bold text-dark mb-3">What are disadvantages or side effects of sperm (Semen) donation?</h5>
                <p class="text-muted lh-lg mb-4">As such semen donation will not have any health hazards or side effects. Donors cant file any lawsuit to claim baby lateron.</p>
                
                <h5 class="fw-bold text-dark mb-3">How much I get paid for semen donation?</h5>
                <p class="text-muted lh-lg mb-0">You will be paid only your travelling and stay expenses. You don't get any payment for donation as such.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/laproscopy-2.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Donor Sperm">
            </div>
        </div>
    </div>
</section>

<!-- What Tests Are Done Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 text-center">
                <img src="{{ asset('_images/donor.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Sperm Donor Tests">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Tests Are Done On Sperm Donor?</h3>
                <p class="text-muted lh-lg mb-3">Following tests are done on all sperms donors:</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> History of any substance abuse, sexual history etc.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Family history of any medical illness.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Psychological analysis is part of initial analysis.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Physical examination to rule out physical co-morbidities.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Blood test- For HIV, HbsAg, Blood group etc.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Semen analysis.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Genetic testing.</li>
                </ul>
                
                <h5 class="fw-bold text-dark mb-3">Can a friend donate sperms?</h5>
                <p class="text-muted lh-lg mb-4">Ideally identity of any donors is not revealed to its recipient. All the donated semen samples are acquired from government approved semen laboratories. Friend donating semen can have long term repercussion in your life. <strong>So answer is NO.</strong></p>
                
                <h5 class="fw-bold text-dark mb-3">How many times donors can donate sperms?</h5>
                <p class="text-muted lh-lg mb-4">Qualified donors can donate sperms once a week, maximum twice a week they can donate.</p>
                
                <p class="text-muted lh-lg mb-0">For further queries, kindly write to us at <a href="mailto:pearlfertilitynivf@gmail.com" class="text-pink text-decoration-none">pearlfertilitynivf@gmail.com</a> or connect with us on <a href="tel:+918779580308" class="text-dark text-decoration-none fw-bold">+91 87795 80308</a>.</p>
            </div>
        </div>
    </div>
</section>

<style>
.text-pink {
    color: #e83e8c !important;
}
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
</style>

@endsection