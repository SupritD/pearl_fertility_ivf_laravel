@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Fertility Evaluation</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Fertility Evaluation</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white mb-5">
    <div class="container py-4 mt-3 mb-4">
        <!-- Top Row -->
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    Fertility evaluation typically involves a series of assessments and tests aimed at determining
                    an individual or couple's ability to conceive a child. Here's an overview of what's usually
                    involved:
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">1. Medical History:</span> This includes a detailed discussion of
                    personal and family medical histories, past pregnancies (if any), and lifestyle factors that may
                    affect fertility.
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">2. Physical Examination:</span> A thorough physical exam may be
                    conducted to identify any physical issues that could affect fertility, such as abnormalities in
                    the reproductive organs.
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">3. Ovulation Evaluation:</span> For women, assessing ovulation
                    involves tracking menstrual cycles and may include blood tests to measure hormone levels (such
                    as progesterone) at different points in the cycle.
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">4. Semen Analysis:</span> For men, semen analysis is a crucial part
                    of fertility evaluation. It involves examining a sample of semen to assess sperm count, motility
                    (movement), morphology (shape), and other factors that affect sperm health.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://pearlfertilityandivf.com/images/fertility-eveluation.jpg" class="img-fluid w-100" style="object-fit: cover;" alt="Fertility Evaluation">
            </div>
        </div>
        
        <!-- Bottom Row -->
        <div class="row">
            <div class="col-12">
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">5. Hormone Testing:</span> Both men and women may undergo hormone
                    testing to evaluate levels of reproductive hormones such as follicle-stimulating hormone (FSH),
                    luteinizing hormone (LH), estradiol, and testosterone.
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">6. Imaging Tests:</span> These may include ultrasound
                    scans to examine the reproductive organs, such as the uterus and ovaries in women or the testes
                    in men. Other imaging tests, such as hysterosalpingography (HSG) for women or scrotal ultrasound
                    for men, may be performed to assess the structure of the reproductive organs.
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">7. Additional Tests:</span> Depending on individual circumstances,
                    additional tests may be recommended. These could include genetic testing, tests for sexually
                    transmitted infections (STIs), or procedures such as hysteroscopy or laparoscopy to directly
                    visualize the reproductive organs.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">8. Specialized Evaluation:</span> If initial evaluations do not
                    identify a cause of infertility, further specialized testing or consultation with specialists
                    such as reproductive endocrinologists or urologists may be necessary.
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    Fertility evaluation is a personalized process, and the specific tests conducted may vary based
                    on individual circumstances and any underlying factors that may be contributing to infertility.
                    It's typically recommended for couples who have been trying to conceive for a year without
                    success (or six months if the woman is over 35) or for individuals with known fertility issues.
                    Consulting with a reproductive specialist or fertility clinic is often the first step in the
                    evaluation process.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection