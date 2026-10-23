@extends('frontend.layouts.master')

@section('meta_title', 'Best IUI Treatment Centre in Mumbai - Pearl Fertility And IVF')
@section('meta_description', 'Pearl Fertility & IVF is one of the Best IUI treatment centre in Mumbai. A very simple fertility treatment which can be done with or without fertility enhancing medicines by Pearl Fertility And IVF')
@section('meta_keywords', 'Best IUI treatment centre in Mumbai, Best IUI treatment centre in goregaon, Best IUI treatment centre in malad, Best IUI treatment centre in kandivali, Best IUI treatment centre in borivali, Best IUI treatment centre in dahisar')

@section('content')

    <!-- Page Banner -->
    <section class="page-banner"
        style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);">
        </div>
        <div class="container position-relative text-white">
            <h1 class="fw-bold display-5 mb-2">IUI Treatment In Mumbai</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">IUI Treatment In Mumbai</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- What Is IUI Treatment Section -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5 mb-4 mb-lg-0">
                    <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">
                        Overview</h6>
                    <h2 class="fw-bold text-dark mb-3">What Is IUI Treatment?</h2>
                    <div class="title-underline mb-4"></div>
                    <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                        Intrauterine insemination (IUI) is an assisted fertility treatment that places processed semen
                        directly inside the uterus around ovulation period. This reduces the distance sperm must travel to
                        reach the fallopian tubes, where fertilisation usually occurs.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        Before recommending IUI, a fertility specialist evaluates both partners to determine whether the
                        procedure is appropriate. Depending on the diagnosis, IUI may be performed during a natural
                        ovulation cycle or alongside prescribed fertility medication and monitoring.
                    </p>
                    <div class="p-3 bg-pink-subtle rounded border-start border-4 border-pink">
                        <p class="text-dark mb-0 fw-medium" style="font-size: 0.95rem;">
                            <i class="bi bi-info-circle-fill text-pink me-2"></i>IUI is less invasive than IVF, but it is
                            not suitable for every fertility condition. A specialist can help determine which option suits
                            the best.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('assets/images/infertility.jpg') }}" class="img-fluid rounded-3 shadow-sm w-100"
                        style="object-fit: cover; max-height: 380px;" alt="What Is IUI Treatment"
                        title="What Is IUI Treatment">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Consider IUI Treatment Section -->
    <section class="py-5 bg-pink-subtle border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Care
                    &amp; Guidance</h6>
                <h2 class="fw-bold text-dark mb-3">Why Consider IUI Treatment in Mumbai?</h2>
                <div class="title-underline mx-auto mb-4"></div>
                <p class="text-muted mx-auto" style="max-width: 850px; font-size: 1.05rem;">
                    When comparing various fertility centres, patients should look beyond the treatment comfort and it’s
                    cost. Important considerations include:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white feature-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon-box rounded-circle bg-pink-subtle text-pink d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px; min-width: 50px;">
                                <i class="bi bi-person-check-fill fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-0">Individual fertility assessment</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            Treatment recommendations are based on the medical evaluation of both partners.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white feature-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon-box rounded-circle bg-pink-subtle text-pink d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px; min-width: 50px;">
                                <i class="bi bi-calendar2-heart-fill fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-0">Ovulation monitoring</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            Appropriate monitoring helps the clinical team plan the timing of insemination.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white feature-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon-box rounded-circle bg-pink-subtle text-pink d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px; min-width: 50px;">
                                <i class="bi bi-shield-check fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-0">Sperm preparation</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            The laboratory should follow appropriate guidelines for preparing and handling semen samples.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white feature-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon-box rounded-circle bg-pink-subtle text-pink d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px; min-width: 50px;">
                                <i class="bi bi-receipt fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-0">Transparent pricing</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            Ask for a breakdown of consultation, investigations, medication, monitoring, and insemination
                            charges.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white feature-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="feature-icon-box rounded-circle bg-pink-subtle text-pink d-flex align-items-center justify-content-center me-3"
                                style="width: 50px; height: 50px; min-width: 50px;">
                                <i class="bi bi-chat-heart-fill fs-4"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-0">Clear treatment counselling</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            Patients should understand the potential benefits, limitations, risks, and alternatives before
                            starting treatment.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Note Box -->
            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-3 p-4 bg-white border-start border-4 border-pink">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-patch-check-fill text-pink fs-3 me-3 flex-shrink-0"></i>
                            <p class="text-dark mb-0 fw-medium" style="font-size: 1rem;">
                                The best treatment option is the one that is medically appropriate for your circumstances,
                                rather than any unscientific, unsupported guarantees about pregnancy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How Does the IUI Procedure Work Section -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">
                    Step-By-Step Guide</h6>
                <h2 class="fw-bold text-dark mb-3">How Does the IUI Procedure Work?</h2>
                <div class="title-underline mx-auto mb-4"></div>
                <p class="text-muted mx-auto" style="max-width: 800px; font-size: 1.05rem;">
                    A comprehensive walk-through of the intrauterine insemination procedure from initial diagnosis to
                    confirmation:
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 step-card"
                        style="background-color: #fafbfc; border-top: 3px solid #e83e8c !important;">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-pink text-white fw-bold px-3 py-2 me-2"
                                style="font-size: 0.85rem;">1</span>
                            <h5 class="fw-bold text-dark mb-0">Initial fertility consultation</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            The fertility specialist reviews the couple's medical history, previous investigations,
                            menstrual cycle, and any earlier fertility treatments.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 step-card"
                        style="background-color: #fafbfc; border-top: 3px solid #e83e8c !important;">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-pink text-white fw-bold px-3 py-2 me-2"
                                style="font-size: 0.85rem;">2</span>
                            <h5 class="fw-bold text-dark mb-0">Fertility tests and ovulation monitoring</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            Tests are selected according to the patient's needs. Ultrasound scans and, where appropriate,
                            blood tests or ovulation-inducing medication may help determine the timing of insemination.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 step-card"
                        style="background-color: #fafbfc; border-top: 3px solid #e83e8c !important;">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-pink text-white fw-bold px-3 py-2 me-2"
                                style="font-size: 0.85rem;">3</span>
                            <h5 class="fw-bold text-dark mb-0">Sperm collection and preparation</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            A semen sample is collected and processed in the laboratory to prepare sperm for insemination.
                            The clinic provides instructions about sample collection and any recommended abstinence period.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 step-card"
                        style="background-color: #fafbfc; border-top: 3px solid #e83e8c !important;">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-pink text-white fw-bold px-3 py-2 me-2"
                                style="font-size: 0.85rem;">4</span>
                            <h5 class="fw-bold text-dark mb-0">Insemination</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            A clinician uses a thin catheter to place the prepared sperm into the uterus. The procedure is
                            generally brief, although some patients may experience temporary discomfort or mild cramping.
                        </p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-sm rounded-3 p-4 step-card"
                        style="background-color: #fafbfc; border-top: 3px solid #e83e8c !important;">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill bg-pink text-white fw-bold px-3 py-2 me-2"
                                style="font-size: 0.85rem;">5</span>
                            <h5 class="fw-bold text-dark mb-0">Follow-up and pregnancy testing</h5>
                        </div>
                        <p class="text-muted lh-lg mb-0" style="font-size: 0.95rem;">
                            The fertility team advises the patient about follow-up and the appropriate time for a pregnancy
                            test, commonly around two weeks after insemination. Individual instructions may vary depending
                            on the treatment protocol.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Rate Section -->
    <section class="py-5 bg-pink-subtle border-top">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5 mb-4 mb-lg-0">
                    <h2 class="fw-bold text-dark mb-4">What Is Success Rate Of IUI?</h2>
                    <p class="text-muted lh-lg mb-4">How is the IUI processed?</p>
                    <p class="text-muted lh-lg mb-0">Men should have 3-4 days of the abstinence from sexual intercourse.
                        Usually men’s are put on vitamin supplementations few days before IUI. Semen sample has to be given
                        in a sterile bottle after coming to Centre. Sometimes males are asked to express out sample at home
                        and then asked to reach to IVF centre. This expressed out semen sample is washed and processed with
                        various high technology equipment. After processing semen sample, it is examined under microscope
                        for quality and quantity assessment. This procedure takes approximately 45-60 minutes. Processed
                        semen is inserted into uterus with the help of special cannulae. Once IUI is done, patient will be
                        monitored for some time and allowed to go home.</p>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('assets/images/iui-1.png') }}" class="img-fluid rounded shadow-sm"
                        alt="IUI Success Rate" title="IUI Success Rate">
                </div>
            </div>
        </div>
    </section>

    <!-- Things To Consider Section -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <div class="row align-items-stretch">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/iui-2.jpg') }}" class="img-fluid rounded shadow-sm w-100 h-100"
                        style="object-fit: cover; min-height: 350px;" alt="Things To Consider Before Performing IUI"
                        title="Things To Consider Before Performing IUI">
                </div>
                <div class="col-lg-7 d-flex">
                    <div class="p-5 bg-pink-subtle rounded w-100 d-flex flex-column justify-content-center shadow-sm">
                        <h2 class="fw-bold text-dark mb-4">Things To Consider Before Performing IUI</h2>
                        <p class="text-muted lh-lg mb-3">Detailed History and Physical Examination.</p>
                        <p class="text-muted lh-lg mb-3">TVS (Trans-Vaginal Sonography)- With TVS, your doctor will see the
                            number, quality, and growth of follicles(eggs) from your ovaries. Even growth and quality of the
                            endometrium, meaning the lining of the uterus is monitored with the help of TVS. The fallopian
                            tubes of the uterus can be seen with help of TVS. For doing IUI, at least one patent fallopian
                            tube is required.</p>
                        <p class="text-muted lh-lg mb-3">HSG (hysterosalpingogram) – is done by putting a dye in the uterus
                            and then taking x-ray of abdomen. HSG can give us idea abot fallopian tube patency and its
                            movement. It is usually done just after menstrual periods are over.</p>
                        <p class="text-muted lh-lg mb-3">Semen Analysis- Is done to see sperm count, to see its motility and
                            to do functional analysis of sperms. Usually IUI is not done if sperm count is very low or if
                            sperms are absent. In these conditions IVF with ICSI give better results than IUI.</p>
                        <p class="text-muted lh-lg mb-0">Blood Investigations- to see hormonal levels</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs Section -->
    <section class="py-5 bg-white border-top">
        <div class="container py-4">
            <h3 class="fw-bold mb-4 fst-italic text-dark">IUI Center</h3>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs mb-4 border-bottom-0" id="iuiTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button"
                        role="tab" aria-controls="tab1" aria-selected="true">
                        How is the IUI processed?
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                        role="tab" aria-controls="tab2" aria-selected="false">
                        How to increase chances of pregnancy after IUI?
                    </button>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" id="iuiTabsContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <p class="text-muted lh-lg mb-4">Men should have 3-4 days of the abstinence from sexual intercourse.
                        Usually men’s are put on after coming to Centre. Sometimes males are asked to express out sample at
                        home and then asked to reach to IVF centre. This expressed out semen sample is washed and processed
                        with various high technology equipment. After processing semen sample, it is examined under
                        microscope for quality and quantity assessment. This procedure takes approximately 45-60 minutes.
                        Processed semen is inserted into uterus with the help of special cannulae. Once IUI is done, patient
                        will be monitored for some time and allowed to go home.</p>
                    <p class="text-muted lh-lg mb-2">What is the most appropriate time to do an IUI?</p>
                    <p class="text-muted lh-lg mb-4">IUI is usually done before or after 6 hours of ovulation. If IUI is
                        decided according to HCG injection, then it is done 24-48 hrs after CG injection. Double IUI is done
                        24 hrs apart and it gives better results. All these timings are based upon survival of the eggs and
                        sperms.</p>
                    <p class="text-muted lh-lg mb-2">Does bleeding occurs after IUI?</p>
                    <p class="text-muted lh-lg mb-4">Bleeding is not usually caused by IUI, but due to ovulation, there can
                        be slight bleeding.</p>
                    <p class="text-muted lh-lg mb-2">Does IUI hurts? Can we go to work?</p>
                    <p class="text-muted lh-lg">IUI is a painless procedure, but due to ovulation, there may be a slight
                        abdominal pain for which you may have to take some rest. Yes, you can go to office after IUI, but
                        generally bike ride is not recommended</p>
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
                    <p class="text-muted lh-lg mb-4">When to consider IUI even after repeated failures? Ideally one should
                        not try more than 3 IUI after optimizing everything. Should move to other treatment options which
                        offer better success rates.</p>
                    <p class="text-muted lh-lg mb-4">How many days after IUI conception takes place?<br>After 10-12 days of
                        IUI, implantation of embryo takes place.</p>
                    <p class="text-muted lh-lg mb-4">How many times IUI can be done?<br>Generally 3-4 times IUI is tried
                        before going for IVF. It does depend upon various factors like sperm count, sperm quality, your age,
                        time since marriage etc.</p>
                    <p class="text-muted lh-lg">What is the success rate of IUI?<br>Success rate of IUI per cycle is 15-20%
                        and it increses with increase in number of IUI cycles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions (FAQs) Section -->
    <section class="py-5 bg-pink-subtle border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Got
                    Questions?</h6>
                <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions About IUI Treatment in Mumbai</h2>
                <div class="title-underline mx-auto mb-4"></div>
                <p class="text-muted mx-auto mb-0" style="max-width: 800px; font-size: 1.05rem;">
                    Find clear, expert answers to the most common questions about Intrauterine Insemination (IUI) treatment
                    at Pearl Fertility &amp; IVF in Mumbai.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion custom-faq-accordion" id="iuiFaqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1"
                                    aria-expanded="true" aria-controls="faqCollapse1">
                                    What is the success rate of IUI treatment?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Success rates depend on age, fertility diagnosis, sperm parameters, ovulation, and other
                                    clinical factors. Ask your specialist for figures relevant to your circumstances and
                                    clarify whether they refer to pregnancy or live birth.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2"
                                    aria-expanded="false" aria-controls="faqCollapse2">
                                    Is IUI treatment painful?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    IUI is generally a brief procedure. Some patients experience mild discomfort or cramping
                                    during or after insemination, but experiences vary.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3"
                                    aria-expanded="false" aria-controls="faqCollapse3">
                                    Who performs IUI treatment at Pearl Fertility &amp; IVF in Mumbai?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    At Pearl Fertility &amp; IVF, IUI (Intrauterine Insemination) treatment is performed by
                                    Dr. Pritimala Kadam, a <a href="{{ url('/best-lady-gynecologist-in-mumbai') }}"
                                        class="text-pink fw-semibold text-decoration-none">lady gynecologist</a>.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4"
                                    aria-expanded="false" aria-controls="faqCollapse4">
                                    How long does the IUI procedure take?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    The insemination itself usually takes only a few minutes. Consultation, sperm
                                    preparation, and monitoring may take additional time.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5"
                                    aria-expanded="false" aria-controls="faqCollapse5">
                                    When should I take a pregnancy test after IUI?
                                </button>
                            </h3>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    A pregnancy test is commonly advised around 14 days after insemination, following your
                                    clinic's instructions.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading6">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6"
                                    aria-expanded="false" aria-controls="faqCollapse6">
                                    How many IUI cycles should I try?
                                </button>
                            </h3>
                            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    The recommended number depends on age, diagnosis, previous outcomes, and other
                                    individual factors. Your specialist can advise when to repeat IUI or discuss
                                    alternatives such as IVF.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading7">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7"
                                    aria-expanded="false" aria-controls="faqCollapse7">
                                    Is IUI better than IVF?
                                </button>
                            </h3>
                            <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Neither treatment is best for everyone. The appropriate option depends on the cause of
                                    infertility, medical findings, expected outcomes, and personal circumstances.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading8">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8"
                                    aria-expanded="false" aria-controls="faqCollapse8">
                                    What tests are needed before IUI?
                                </button>
                            </h3>
                            <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Investigations may include semen analysis, ovulation assessment, ultrasound, and tests
                                    to check fallopian tube patency. The exact tests depend on the patient's medical
                                    history.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading9">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9"
                                    aria-expanded="false" aria-controls="faqCollapse9">
                                    Can I return to normal activities after IUI?
                                </button>
                            </h3>
                            <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9"
                                data-bs-parent="#iuiFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Yes, many patients can resume their usual daily activities soon after the procedure.
                                    Follow your treating team's advice, especially if fertility medication or additional
                                    monitoring is involved.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Searched Keywords Section -->
    <section class="py-5 text-white" style="background-color: #ff007f;">
        <div class="container py-4">
            <h4 class="fw-bold text-center mb-5">Most Searched Keyword For IUI Treatment</h4>
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

        .bg-pink {
            background-color: #e83e8c !important;
        }

        .border-pink {
            border-color: #e83e8c !important;
        }

        .bg-pink-subtle {
            background-color: #fdf5f8 !important;
        }

        .title-underline {
            width: 50px;
            height: 3px;
            background-color: #e83e8c;
        }

        .feature-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(232, 62, 140, 0.12) !important;
        }

        .step-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .step-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
        }

        .custom-faq-accordion .accordion-button:not(.collapsed) {
            color: #e83e8c !important;
            background-color: #fdf5f8 !important;
        }

        .custom-faq-accordion .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(232, 62, 140, 0.25);
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