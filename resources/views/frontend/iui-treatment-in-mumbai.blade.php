@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">IUI Treatment In Mumbai</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">IUI Treatment In Mumbai</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Success Rate Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5 mb-4 mb-lg-0">
                <h3 class="fw-bold text-dark mb-4">What Is Success Rate Of IUI?</h3>
                <p class="text-muted lh-lg mb-4">How is the IUI processed?</p>
                <p class="text-muted lh-lg mb-0">Men should have 3-4 days of the abstinence from sexual intercourse. Usually men’s are put on vitamin supplementations few days before IUI. Semen sample has to be given in a sterile bottle after coming to Centre. Sometimes males are asked to express out sample at home and then asked to reach to IVF centre. This expressed out semen sample is washed and processed with various high technology equipment. After processing semen sample, it is examined under microscope for quality and quantity assessment. This procedure takes approximately 45-60 minutes. Processed semen is inserted into uterus with the help of special cannulae. Once IUI is done, patient will be monitored for some time and allowed to go home.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/images/iui-1.png') }}" class="img-fluid rounded shadow-sm" alt="IUI Success Rate">
            </div>
        </div>
    </div>
</section>

<!-- Things To Consider Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-stretch">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/iui-2.jpg') }}" class="img-fluid rounded shadow-sm w-100 h-100" style="object-fit: cover; min-height: 350px;" alt="Consider before IUI">
            </div>
            <div class="col-lg-7 d-flex">
                <div class="p-5 bg-pink-subtle rounded w-100 d-flex flex-column justify-content-center shadow-sm">
                    <h3 class="fw-bold text-dark mb-4">Things To Consider Before Performing IUI</h3>
                    <p class="text-muted lh-lg mb-3">Detailed History and Physical Examination.</p>
                    <p class="text-muted lh-lg mb-3">TVS (Trans-Vaginal Sonography)- With TVS, your doctor will see the number, quality, and growth of follicles(eggs) from your ovaries. Even growth and quality of the endometrium, meaning the lining of the uterus is monitored with the help of TVS. The fallopian tubes of the uterus can be seen with help of TVS. For doing IUI, at least one patent fallopian tube is required.</p>
                    <p class="text-muted lh-lg mb-3">HSG (hysterosalpingogram) – is done by putting a dye in the uterus and then taking x-ray of abdomen. HSG can give us idea abot fallopian tube patency and its movement. It is usually done just after menstrual periods are over.</p>
                    <p class="text-muted lh-lg mb-3">Semen Analysis- Is done to see sperm count, to see its motility and to do functional analysis of sperms. Usually IUI is not done if sperm count is very low or if sperms are absent. In these conditions IVF with ICSI give better results than IUI.</p>
                    <p class="text-muted lh-lg mb-0">Blood Investigations- to see hormonal levels</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <h4 class="fw-bold mb-4 fst-italic text-dark">IUI Center</h4>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="iuiTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                    How is the IUI processed?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                    How to increase chances of pregnancy after IUI?
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="iuiTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p class="text-muted lh-lg mb-4">Men should have 3-4 days of the abstinence from sexual intercourse. Usually men’s are put on after coming to Centre. Sometimes males are asked to express out sample at home and then asked to reach to IVF centre. This expressed out semen sample is washed and processed with various high technology equipment. After processing semen sample, it is examined under microscope for quality and quantity assessment. This procedure takes approximately 45-60 minutes. Processed semen is inserted into uterus with the help of special cannulae. Once IUI is done, patient will be monitored for some time and allowed to go home.</p>
                <p class="text-muted lh-lg mb-2">What is the most appropriate time to do an IUI?</p>
                <p class="text-muted lh-lg mb-4">IUI is usually done before or after 6 hours of ovulation. If IUI is decided according to HCG injection, then it is done 24-48 hrs after CG injection. Double IUI is done 24 hrs apart and it gives better results. All these timings are based upon survival of the eggs and sperms.</p>
                <p class="text-muted lh-lg mb-2">Does bleeding occurs after IUI?</p>
                <p class="text-muted lh-lg mb-4">Bleeding is not usually caused by IUI, but due to ovulation, there can be slight bleeding.</p>
                <p class="text-muted lh-lg mb-2">Does IUI hurts? Can we go to work?</p>
                <p class="text-muted lh-lg">IUI is a painless procedure, but due to ovulation, there may be a slight abdominal pain for which you may have to take some rest. Yes, you can go to office after IUI, but generally bike ride is not recommended</p>
            </div>
            
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <p class="text-muted mb-2">1. Avoid excessive stress or anxiety during IUI cycles</p>
                <p class="text-muted mb-2">2. Regular exercise</p>
                <p class="text-muted mb-2">3. Abstinence from sexual intercourse or ejaculation for 3 days</p>
                <p class="text-muted mb-2">4. Vitamin supplements to male partner to improve sperm quality</p>
                <p class="text-muted mb-2">5. Quit smoking, stop alcohol use</p>
                <p class="text-muted mb-2">6. Ask for sperm wash during IUI treatment</p>
                <p class="text-muted mb-4">7. Ask for hormonal supplements if they are not started</p>
                <p class="text-muted lh-lg mb-4">When to consider IUI even after repeated failures? Ideally one should not try more than 3 IUI after optimizing everything. Should move to other treatment options which offer better success rates.</p>
                <p class="text-muted lh-lg mb-4">How many days after IUI conception takes place?<br>After 10-12 days of IUI, implantation of embryo takes place.</p>
                <p class="text-muted lh-lg mb-4">How many times IUI can be done?<br>Generally 3-4 times IUI is tried before going for IVF. It does depend upon various factors like sperm count, sperm quality, your age, time since marriage etc.</p>
                <p class="text-muted lh-lg">What is the success rate of IUI?<br>Success rate of IUI per cycle is 15-20% and it increses with increase in number of IUI cycles.</p>
            </div>
        </div>
    </div>
</section>

<!-- Most Searched Keywords Section -->
<section class="py-5 text-white" style="background-color: #ff007f;">
    <div class="container py-4">
        <h5 class="fw-bold text-center mb-5">Most Searched Keyword For IUI Treatment</h5>
        <div class="row justify-content-center px-lg-5">
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best IUI Treatment Centre in Mumbai</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best IUI Treatment Centre in Goregaon</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best IUI Treatment Centre in Malad</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best IUI Treatment Centre in Kandivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-end">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best IUI Treatment Centre in Borivali</span>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-center justify-content-lg-start">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.85rem;">Best IUI Treatment Centre in Dahisar</span>
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