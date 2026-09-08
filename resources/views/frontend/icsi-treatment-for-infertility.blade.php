@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">ICSI Treatment For Infertility</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">ICSI Treatment For Infertility</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Intro Section -->
<section class="py-5 bg-white">
    <div class="container py-4 text-center">
        <h3 class="fw-bold text-pink mb-3">ICSI Treatment For Infertility</h3>
        <div class="title-underline mx-auto mb-4"></div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-muted lh-lg mb-4">If you’re looking for the ICSI Treatment For Infertility, Pearl Fertility is the place to go. Pearl Fertility operates two IVF center in Mumbai, one in Borivali and the other in Kandivali. Many ICSI Treatment have been successfully done here.</p>
                <p class="text-muted lh-lg mb-0">Most couples who experience infertility are suffering from sperm-related problems. Infertility in males is most commonly treated with ICSI, which has a high success rate., we provide the most cost-effective treatment options, as well as some simple payment options.</p>
            </div>
        </div>
    </div>
</section>

<!-- What is ICSI Treatment Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-stretch">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/1-ivf.jpg') }}" class="img-fluid rounded shadow-sm w-100 h-100" style="object-fit: cover; min-height: 350px;" alt="What is ICSI">
            </div>
            <div class="col-lg-7 d-flex">
                <div class="p-5 bg-pink-subtle rounded w-100 d-flex flex-column justify-content-center shadow-sm">
                    <h3 class="fw-bold text-dark mb-4">What is ICSI Treatment For Infertility?</h3>
                    <p class="text-muted lh-lg mb-4">ICSI treatment for infertility is a non-surgical method of assisted reproductive technology.</p>
                    <p class="text-muted lh-lg mb-4">ICSI involves injecting a single sperm into an egg that has been removed from the ovary.</p>
                    <p class="text-muted lh-lg mb-0">After a few weeks, when the egg has matured, it is placed back into the womb.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Happens In The ICSI Treatment Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Happens In The ICSI Treatment For Infertility Process?</h3>
                <p class="text-muted lh-lg mb-4">In vitro fertilization (IVF) with ICSI is used to produce healthy pregnancies when conventional IVF fails to do so.</p>
                <p class="text-muted lh-lg mb-4">Fertilization of an egg is performed through ICSI Treatments for infertility with sperm.</p>
                <p class="text-muted lh-lg mb-4">The ICSI treatment may be an option for a woman who has not achieved pregnancy after several rounds of IVF treatment because of unexplained infertility.</p>
                <p class="text-muted lh-lg mb-4">ICSI Treatment for infertility will benefit women suffering from severe male factor infertility or other infertility problems.</p>
                <p class="text-muted lh-lg mb-4">It is recommended to pursue clinical trials or ICSI treatment for infertility instead of IVF treatment if you have been told that your chances of success are very low. Your partner may have problems conceiving by himself or may be having difficulty conceiving due to his age or other medical issues if you can’t conceive naturally.</p>
                <p class="text-muted lh-lg mb-0">As part of the process, your partner’s egg is removed from the uterus and placed in a container that protects it from any sperm that might be present.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/images/icsi.jpg') }}" class="img-fluid rounded shadow-sm" alt="ICSI Process">
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <h4 class="fw-bold mb-4 fst-italic text-dark">About-Pearl IVF center</h4>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="icsiTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                    What types of infertility can be treated with IVF in our Pearl IVF center?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                    What to Look for When Choosing an Infertility Clinic/IVF center
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="icsiTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p class="text-muted mb-4">If you or your partner has been diagnosed with one of the following conditions, IVF may be a possibility for you.</p>
                <ul class="list-unstyled mb-4 text-muted">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Endometriosis</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Sperm counts are low.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Mother’s or father’s genetic sickness</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Obstacles to the uterus or the fallopian tubes</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Obstacles to ovulation</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Problems with antibodies that destroy sperm or eggs</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Sperm are unable to enter or survive in cervical mucous.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Eggs of poor quality</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Unexplained infertility</li>
                </ul>
                <p class="text-muted">Except in cases of full tubal blockage, IVF is never the initial step in the treatment of infertility. It’s only used in circumstances where other treatments have failed, such as fertility medicines, or surgery.</p>
            </div>
            
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <p class="text-muted mb-4">You may have questions about fertility programs, clinics, and costs. Take the time to investigate the fertility clinics you’re considering to pick the best one for you.</p>
                <p class="text-muted mb-4">Investigate the clinic using the following methods:</p>
                <ul class="list-unstyled mb-4 text-muted">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Looking up information on the clinic’s website.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Call a customer service agent.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Seek advice from a local infertility support organization.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Find out what the clinic’s success rate is.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Schedule a consultation appointment.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Problems with antibodies that destroy sperm or eggs</li>
                </ul>
                <p class="text-muted">Except in cases of full tubal blockage, IVF is never the initial step in the treatment of infertility. It’s only used in circumstances where other treatments have failed, such as fertility medicines, or surgery.</p>
            </div>
        </div>
    </div>
</section>

<!-- Most Searched Keywords Section -->
<section class="py-5 text-white" style="background-color: #ff007f;">
    <div class="container py-4">
        <h5 class="fw-bold text-center mb-5">Most Searched Keyword For ICSI Treatment For Infertility</h5>
        <div class="row justify-content-center px-lg-5">
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">ICSI treatment in Mumbai</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">ICSI treatment in Goregaon</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">ICSI treatment in Malad</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-end">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">ICSI treatment in Kandivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-end">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">ICSI treatment in Borivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-start">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">ICSI treatment in Dahisar</span>
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
.title-underline {
    width: 50px;
    height: 3px;
    background-color: #e83e8c;
}
.nav-tabs .nav-link {
    border: none;
    border-bottom: 3px solid transparent;
    color: #6c757d;
    background: transparent;
    font-weight: bold;
    border-radius: 0;
    padding: 1rem 1.5rem;
}
.nav-tabs .nav-link:hover {
    border-color: transparent;
}
.nav-tabs .nav-link.active {
    color: #212529 !important;
    border-bottom: 3px solid #e83e8c !important;
    background: transparent;
}
</style>
@endsection