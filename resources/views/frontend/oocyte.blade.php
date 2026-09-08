@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Oocyte Freezing</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Oocyte Freezing</li>
            </ol>
        </nav>
    </div>
</section>

<!-- What is Oocyte Freezing Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">Oocyte Freezing</h3>
                <p class="text-muted lh-lg mb-4">Oocyte or egg freezing is the process where eggs from female are extracted, frozen and stored with liquid nitrogen for later reproductive potential for in women of reproductive age. It is an established science now and no more an experimental procedure. Thousands of healthy babies are born in last decade with frozen eggs. Overall it is an established fact that it doesn't increase rate of complications.</p>
                
                <h5 class="fw-bold text-dark mb-3">When one can freeze eggs?</h5>
                <p class="text-muted lh-lg mb-4">All the young women who wants to continue climbing their career ladder and plan pregnancy once they are established in their career, are planning oocyte freezing. Typical examples are many Bollywood celebrities, who freeze their eggs when they are young and later on they plan pregnancy. Many corporates offer help to their female employees for egg freezing. Even this is option for females with some malignancy undergoing radiotherapy or chemotherapy.</p>
                
                <h5 class="fw-bold text-dark mb-3">So who needs egg freezing?</h5>
                <ul class="list-unstyled mb-0 text-muted">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Women undergoing chemotherapy or radiotherapy for cancer care</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Fertility preservation for later pregnancy</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Surgeries that may cause damage to ovaries</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Females at risk for premature ovarian failure</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Severe Ovarian disease</li>
                </ul>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('web-page-images/oocyte-freezing-img.jpg') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Oocyte Freezing">
            </div>
        </div>
    </div>
</section>

<!-- How Long We Can Keep Frozen Eggs Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <h3 class="fw-bold text-dark mb-4">How Long We Can Keep Frozen Eggs?</h3>
                <p class="text-muted lh-lg mb-4">One can freeze eggs even for 10 years without any side effects. Thousands are babies born with frozen eggs. There is no established study which shows increased incidence of congenital defect in babies with frozen eggs.</p>
                
                <h3 class="fw-bold text-dark mb-4">How do you freeze and store eggs?</h3>
                <p class="text-muted lh-lg mb-4">Oocyte retrieval and oocyte freezing is safe and established procedure in field of IVF now. It involves following steps:</p>
                
                <ul class="list-unstyled mb-0 text-muted lh-lg">
                    <li class="mb-2"><strong class="text-dark">Step-1:</strong> Assessment of ovarian reserve and feasibility. This includes history taking, physical examination, ultrasound and various blood tests.</li>
                    <li class="mb-2"><strong class="text-dark">Step-2:</strong> Ovarian stimulation with the help of hormonal injection.</li>
                    <li class="mb-2"><strong class="text-dark">Step-3:</strong> Oocyte retrieval under anesthesia or deep sedation per vaginally.</li>
                    <li class="mb-2"><strong class="text-dark">Step-4:</strong> Assessment of maturity under high definition microscope.</li>
                    <li class="mb-2"><strong class="text-dark">Step-5:</strong> Cryopreservation of mature eggs is done mostly by vitrification method and with the help of rapid cooling using liquid nitrogen.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <h4 class="fw-bold mb-4 fst-italic text-dark">About-Pearl IVF center</h4>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="oocyteTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                    What are the chances of pregnancy with frozen eggs?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                    What are expenses for Oocyte freezing?
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="oocyteTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p class="text-muted mb-4">Successful pregnancy rate is in the range of 5-15% per frozen and thawed oocyte. We need more studies to come to conclusion.</p>
                
                <h5 class="fw-bold text-dark mb-3">What are the side effects of egg freezing?</h5>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Ovarian stimulation can cause bloating of abdomen, pain in abdomen and sometimes you can develop ovarian hyper stimulation syndrome, though it is rare.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Nausea and vomiting.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Pain at injection site.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Bleeding.</li>
                </ul>
                <p class="text-muted">Except in cases of full tubal blockage, IVF is never the initial step in the treatment of infertility. It’s only used in circumstances where other treatments have failed, such as fertility medicines, or surgery.</p>
            </div>
            
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <p class="text-muted mb-4">Expenses for freezing are varied from center to center. It depends upon number of eggs, duration for which it needs to be stored etc. Please talk to us for charges at our center.</p>
                <p class="text-muted">Is there any risk of increased defects or pregnancy complications with frozen eggs? So far, established studies doesn't show any increased incidence of birth defect with frozen eggs compared to fresh eggs. Though long term follow-up is required. For further information, kindly contact us on pearlfertilityandivf@gmail.com.</p>
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