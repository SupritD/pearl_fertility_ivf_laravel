@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Contraception Counseling</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Contraception Counseling</li>
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
                    Contraception counseling is a critical aspect of reproductive healthcare
                    provided by healthcare professionals, typically gynecologists, primary care physicians, or
                    family planning specialists. The goal of contraception counseling is to educate individuals or
                    couples about their options for preventing unintended pregnancies and to help them make informed
                    decisions based on their preferences, medical history, and lifestyle.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    During contraception counseling, healthcare providers typically discuss the
                    following:
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">1. Contraceptive Options:</span> Providers will explain
                    the various contraceptive methods available, including hormonal methods such as birth control
                    pills, patches, injections, and implants, as well as non-hormonal methods such as condoms,
                    diaphragms, cervical caps, and intrauterine devices (IUDs). They will discuss the effectiveness,
                    benefits, side effects, and usage instructions for each method.
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://pearlfertilityandivf.com/web-page-images/contraception-counseling-img.jpg" class="img-fluid w-100" style="object-fit: cover;" alt="Contraception Counseling">
            </div>
        </div>
        
        <!-- Bottom Row -->
        <div class="row">
            <div class="col-12 px-lg-4">
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">2. Effectiveness:</span> Providers will discuss the
                    efficacy rates of different contraceptive methods and help individuals understand the importance
                    of consistent and correct use in preventing pregnancy.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">3. Health Considerations:</span> Providers will assess
                    the individual's medical history, current health status, and any underlying health conditions to
                    determine which contraceptive methods are safe and appropriate. Certain health conditions or
                    medications may influence the choice of contraception.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">4. Side Effects and Risks:</span> Providers will explain
                    potential side effects and risks associated with each contraceptive method, including changes in
                    menstrual patterns, hormonal fluctuations, and rare but serious complications such as blood
                    clots or ectopic pregnancy.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">5. Non-Contraceptive Benefits:</span> Some contraceptive
                    methods offer additional benefits beyond pregnancy prevention, such as reducing menstrual
                    cramps, regulating menstrual cycles, improving acne, or reducing the risk of certain cancers.
                    Providers will discuss these potential benefits with individuals during counseling.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">6. Emergency Contraception:</span> Providers may also
                    provide information about emergency contraception options for use after unprotected intercourse
                    or contraceptive failure and discuss how and when to use them.
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">7. Contraceptive Counseling for Special
                    Populations:</span> Providers may offer specialized counseling for adolescents, women with
                    disabilities, survivors of sexual assault, transgender individuals, and others with unique
                    contraceptive needs or concerns.
                </p>
                <p class="text-muted lh-lg mb-5" style="font-size: 1.05rem;">
                    <span class="fw-bold text-dark">8. Long-Term Planning:</span> Providers may discuss
                    future reproductive goals and help individuals or couples choose contraceptive methods that
                    align with their family planning intentions.
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    Contraception counseling empowers individuals to make informed choices about their
                    reproductive health, promotes contraceptive adherence and effectiveness, and supports overall
                    well-being by preventing unintended pregnancies. It's important for individuals to engage in open
                    and honest discussions with their healthcare providers to find the contraceptive method that best
                    meets their needs and preferences.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection