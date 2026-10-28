@extends('frontend.layouts.master')

@section('meta_title', 'PCOS Treatment in Mumbai by Pearl Fertility And IVF')
@section('meta_description', 'Get the Best PCOS Treatment in Mumbai. Consult with our expert doctors and get genuine and reliable solution at one visit.')
@section('meta_keywords', 'PCOS treatment in Mumbai, PCOS treatment in goregaon, PCOS treatment in malad, PCOS treatment in kandivali, PCOS treatment in borivali, PCOS treatment in dahisar')

@section('schema_markup')
    <script type="application/ld+json">
                    {!! json_encode([
        '@' . 'context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => [
            [
                '@type' => 'Question',
                'name' => 'What is PCOS & how is it treated?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => "PCOS is a hormonal & metabolic condition that can affect menstrual cycles, ovulation, androgen levels & fertility. Treatment depends on the woman's symptoms & reproductive goals."
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Is PCOS treatment possible without surgery?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes. Most women with PCOS are managed without surgery. Treatment may include lifestyle changes, medications for menstrual or hormonal symptoms, metabolic management & fertility treatment when required.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Is surgery necessary for PCOS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. Surgery is not routinely required for PCOS. Laparoscopic ovarian surgery may be considered for selected women with PCOS-related anovulatory infertility when appropriate medical treatment has not worked.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'What is laparoscopic ovarian drilling for PCOS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Laparoscopic ovarian drilling is a minimally invasive ovarian procedure that may be considered as a second-line fertility treatment for selected women with PCOS & anovulatory infertility.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Is laparoscopic ovarian drilling a permanent cure for PCOS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. Laparoscopic ovarian drilling is not a permanent cure for PCOS. It is a fertility treatment that may help restore ovulation in selected women.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'What is the first-line fertility treatment for PCOS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'For women with PCOS-related anovulatory infertility and no other infertility factors, letrozole is recommended as first-line pharmacological ovulation induction in the international PCOS guideline.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Can PCOS be treated with lifestyle changes alone?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Lifestyle management is an important component of PCOS care, but whether additional treatment is needed depends on symptoms, metabolic health & reproductive goals.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Can PCOS cause infertility?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'PCOS can cause irregular or absent ovulation, which may make conception more difficult. However, pregnancy can often be achieved naturally or with fertility treatment.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Do all women with PCOS need IVF?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'No. IVF is not automatically required for women with PCOS. Many women conceive naturally or with ovulation-induction treatment. IVF may be considered when other treatments have failed or when another indication for IVF exists.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Can PCOS cause irregular periods?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes. Irregular or absent ovulation associated with PCOS can result in irregular, delayed or absent periods.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Can PCOS be cured permanently?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'PCOS is generally considered a long-term condition rather than something that has a guaranteed permanent cure. However, its symptoms and associated health risks can often be managed effectively with appropriate treatment and follow-up.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Which doctor should I consult for PCOS treatment in Mumbai?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'A gynaecologist can evaluate PCOS symptoms and menstrual irregularities. If you are experiencing difficulty conceiving, a reproductive medicine or fertility specialist can assess ovulation and other fertility factors and discuss appropriate treatment options.'
                ]
            ],
            [
                '@type' => 'Question',
                'name' => 'Can I get pregnant naturally with PCOS?',
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => 'Yes. Many women with PCOS become pregnant naturally. Some women may require treatment to improve or induce ovulation.'
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
                    </script>
@endsection

@section('content')

    <!-- Page Banner -->
    <section class="page-banner"
        style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);">
        </div>
        <div class="container position-relative text-white">
            <h1 class="fw-bold display-5 mb-2">PCOS Treatment In Mumbai</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">PCOS Treatment In Mumbai</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- What is PCOD Section -->
    <section class="py-5 bg-pink-subtle">
        <div class="container py-4">
            <!-- Row 1 -->
            <div class="row align-items-stretch mb-5 pb-4">
                <!-- Mobile Heading -->
                <div class="col-12 d-lg-none mb-3 order-0">
                    <h2 class="fw-bold text-dark mb-0">What Is PCOD?</h2>
                </div>

                <!-- Image Column (Under heading on mobile, right column on desktop) -->
                <div class="col-lg-6 order-1 order-lg-2 text-center d-flex mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/PCOD-img.jpg') }}" class="img-fluid w-100 shadow-sm"
                        style="object-fit: cover;" alt="What is PCOD" title="What is PCOD">
                </div>

                <!-- Content Column (Under image on mobile, left column on desktop) -->
                <div class="col-lg-6 order-2 order-lg-1 pe-lg-5 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold text-dark mb-4 d-none d-lg-block">What Is PCOD?</h2>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        Polycystic Ovarian disease (PCOD) or polycystic ovarian syndrome (PCOS) is a
                        common hormonal imbalance affecting 5-10% of women between 15-45 years of age. PCOD usually
                        leads to irregular menstrual period, abnormal weight gain, no ovulation, hirsuitism, acne and
                        ultimately leading to infertility.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        Most of the symptoms are due to increase in male hormone levels in women
                        leading to all above symptoms. Effect of PCOD are interrelated on your body, hormonal changes
                        leads to various changes in body including mood swings, anxiety and depression.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        In modern times, females have to do look after responsibilities at home as well as
                        office. This puts them at added stress and increased symptoms of PCOD. Eventually because of
                        immense stress, work pressure, increased expectation at home leads to health deterioration
                        leading to more psychological trauma.
                    </p>
                    <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                        Sometimes physical inactivity adds to various problems of PCOD / PCOS. This
                        disease is endemic in many parts of world affecting many women’s and girls in modern world
                        today.
                    </p>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row align-items-stretch pt-2">
                <div class="col-lg-6 text-center d-flex mb-5 mb-lg-0">
                    <img src="{{ asset('assets/images/PCOD-img2.jpg') }}" class="img-fluid w-100 shadow-sm"
                        style="object-fit: cover;" alt="pcos treatment in mumbai" title="pcos treatment in mumbai">
                </div>
                <div class="col-lg-6 ps-lg-5 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold text-dark mb-4">What Is Cause Of PCOD / PCOS?</h2>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        Let me tell you that many school going girls even with moderate obesity, have
                        this Polycystic Ovarian Disease (PCOD). If PCOD is detected early at a young age, then it can
                        be treated very effectively with very few basic measures like diet, lifestyle modification and
                        sometimes few pills.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        So PCOD / PCOS is ‘polycystic ovary disease; polycystic ovary syndrome and in
                        it, the malehormone, “androgen” levels are increased in a woman’s body due to the vesicles or
                        cysts formation in the ovaries.
                    </p>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        It is not known exactly what causes PCOD but inflammation, genetic factors or
                        insulin resistance is probable reason for increased androgen levels. This high androgen levels
                        prevent follicle formation or follicle maturation. Lot of research is being done in this matter.
                        Many doctors believe that incidence of PCOD is very high with stress, anxiety, early onset
                        menarche and obesity in women.
                    </p>
                    <div class="card border-0 shadow-sm rounded-3 p-3 p-md-4 bg-white mb-4 border-start border-3"
                        style="border-left: 3px solid #e83e8c !important;">
                        <h6 class="fw-bold text-dark mb-3" style="font-size: 1rem;">
                            Research suggests that several factors may contribute to its development, including:
                        </h6>
                        <ul class="list-unstyled mb-0 text-muted" style="font-size: 0.95rem; line-height: 1.6;">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                <span><strong class="text-dark">1. Hormonal imbalance:</strong> Higher androgen levels can
                                    interfere with normal ovarian function &amp; ovulation.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                <span><strong class="text-dark">2. Insulin resistance:</strong> Some women with PCOS have
                                    insulin resistance, where the body does not respond effectively to insulin. This may
                                    contribute to increased insulin levels &amp; hormonal changes.</span>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                <span><strong class="text-dark">3. Genetic factors:</strong> PCOS can run in families,
                                    suggesting a genetic contribution.</span>
                            </li>
                            <li class="mb-0 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                <span><strong class="text-dark">4. Metabolic factors:</strong> Weight &amp; metabolic health
                                    can influence PCOS symptoms, although PCOS can also occur in women who are not
                                    overweight.</span>
                            </li>
                        </ul>
                    </div>
                    <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                        Now a days, incidence is so high that one in ten women of childbearing age
                        suffer from PCOD.
                    </p>
                    <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                        Few years back, this problem was prevalent in women aged 30-35, but now a days
                        it is more seen in school going adolescent girls.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Common Symptoms of PCOS Section -->
    <section class="py-5 bg-pink-subtle border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Symptoms
                    &amp; Early Signs</h6>
                <h2 class="fw-bold text-dark mb-3">What Are the Common Symptoms of PCOS?</h2>
                <div class="title-underline mx-auto mb-4"></div>
                <p class="text-muted mx-auto mb-0" style="max-width: 820px; font-size: 1.05rem;">
                    PCOS symptoms can vary from woman to woman. Some experience only mild symptoms, while others may have
                    multiple hormonal and reproductive concerns.
                </p>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5 bg-white">
                        <h4 class="fw-bold text-dark mb-4 d-flex align-items-center">
                            <i class="bi bi-card-checklist text-pink me-2 fs-3"></i>
                            Common PCOS symptoms include:
                        </h4>
                        <div class="row g-3">
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Irregular, delayed or absent menstrual periods</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Difficulty with ovulation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Acne &amp; persistent skin breakouts</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Excess facial or body hair (hirsutism)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Hair thinning or hair loss from the scalp</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Weight gain or difficulty managing weight</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Darkened skin around the neck, armpits or skin folds</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Difficulty getting pregnant</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="p-3 rounded-2 bg-light h-100 border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <div class="d-flex align-items-start">
                                        <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                        <span class="text-muted">Signs of insulin resistance</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-light border-0 shadow-sm mt-4 mb-0 d-flex align-items-center"
                            style="background-color: #fdf5f8;">
                            <i class="bi bi-info-circle-fill text-pink fs-4 me-3"></i>
                            <span class="text-muted" style="font-size: 0.98rem;">
                                If you notice persistent menstrual irregularities or other concerning changes, consult a
                                gynaecologist.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PCOS Treatment Options Section -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <!-- Treatment Overview Header -->
            <div class="text-center mb-5">
                <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">
                    Personalized Care</h6>
                <h2 class="fw-bold text-dark mb-3">PCOS Treatment in Mumbai: What Are the Available Treatment Options?</h2>
                <div class="title-underline mx-auto mb-4"></div>
                <p class="text-muted mx-auto mb-3" style="max-width: 850px; font-size: 1.05rem;">
                    There is no single treatment that works for every woman with PCOS. The treatment plan depends on
                    symptoms, age, medical history, metabolic health &amp; whether pregnancy is desired.
                </p>
                <p class="text-muted mx-auto mb-0" style="max-width: 850px; font-size: 1rem;">
                    At Pearl Fertility &amp; IVF, the appropriate treatment pathway should be discussed with the treating
                    doctor after an individual assessment.
                </p>
            </div>

            <!-- Surgical & Non-Surgical Treatment Title -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center">
                    <h3 class="fw-bold text-dark mb-2">PCOS Treatment Options: Surgical &amp; Non-Surgical</h3>
                    <p class="text-muted" style="font-size: 1rem;">Explore the non-invasive medical management strategies
                        and specialized surgical fertility options available.</p>
                </div>
            </div>

            <!-- Non-Surgical Treatment for PCOS -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-pink-subtle rounded-circle p-2 me-3 text-pink d-flex align-items-center justify-content-center"
                            style="width: 48px; height: 48px;">
                            <i class="bi bi-capsule fs-4"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold text-dark mb-1">Non-Surgical Treatment for PCOS</h4>
                            <p class="text-muted mb-0 small">Most women with PCOS can be managed without surgery. The
                                treatment depends on symptoms, metabolic health, menstrual pattern and whether pregnancy is
                                desired.</p>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Option 1 -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">1</span>
                                    Lifestyle &amp; Dietary Management
                                </h5>
                                <p class="text-muted small mb-2 fw-semibold">It may include:</p>
                                <ul class="list-unstyled text-muted small lh-lg mb-3">
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Regular physical activity</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>A balanced, nutrient-rich diet</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Adequate protein &amp; fibre intake</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Healthy weight management</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Good sleep &amp; stress management</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Reducing prolonged periods of inactivity
                                    </li>
                                </ul>
                                <p class="text-muted small mb-0 pt-2 border-top">
                                    Lifestyle intervention can support metabolic health &amp; overall wellbeing improving
                                    some PCOS symptoms.
                                </p>
                            </div>
                        </div>

                        <!-- Option 2 -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">2</span>
                                    Medication for Irregular Periods
                                </h5>
                                <p class="text-muted small mb-2">
                                    Women with irregular or absent periods may be prescribed medication to help regulate
                                    menstrual cycles &amp; provide protection to the uterine lining.
                                </p>
                                <p class="text-muted small mb-2 fw-semibold">Depending on the individual situation,
                                    treatment may include:</p>
                                <ul class="list-unstyled text-muted small lh-lg mb-3">
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Combined oral contraceptive pills</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Progestogen therapy</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Other hormonal treatment when clinically
                                        appropriate</li>
                                </ul>
                                <p class="text-muted small mb-0 pt-2 border-top">
                                    Combined oral contraceptives are among the recommended options for managing irregular
                                    menstrual cycles &amp; hirsutism in appropriate reproductive-age women with PCOS.
                                </p>
                            </div>
                        </div>

                        <!-- Option 3 -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">3</span>
                                    Treatment for Insulin Resistance
                                </h5>
                                <p class="text-muted small mb-3">
                                    Some women with PCOS have insulin resistance or increased metabolic risk.
                                </p>
                                <p class="text-muted small mb-3">
                                    After assessment, a doctor may recommend lifestyle management and, when appropriate,
                                    medicines such as metformin.
                                </p>
                                <div class="p-2 rounded bg-white border-start border-3"
                                    style="border-left: 3px solid #e83e8c !important;">
                                    <p class="text-muted small mb-0">
                                        Metformin is not required for every woman with PCOS, so treatment should be
                                        individualised.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Option 4 -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">4</span>
                                    Treatment for Acne &amp; Excess Hair
                                </h5>
                                <p class="text-muted small mb-2">
                                    Increased androgen activity can contribute to:
                                </p>
                                <ul class="list-unstyled text-muted small lh-lg mb-3">
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Acne</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Excess facial or body hair</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Scalp hair thinning</li>
                                </ul>
                                <p class="text-muted small mb-0 pt-2 border-top">
                                    Treatment may include hormonal medication, anti-androgen therapy in selected patients,
                                    dermatological treatment depending on the individual case.
                                </p>
                            </div>
                        </div>

                        <!-- Option 5 -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">5</span>
                                    Ovulation Induction for PCOS-Related Infertility
                                </h5>
                                <p class="text-muted small mb-3">
                                    For women who are trying to conceive &amp; have infertility due to anovulation
                                    associated with PCOS, letrozole is recommended as first-line pharmacological ovulation
                                    induction when there are no other infertility factors, according to the international
                                    evidence-based guideline.
                                </p>
                                <p class="text-muted small mb-0 pt-2 border-top">
                                    Other treatments may be considered depending on the response and individual
                                    circumstances.
                                </p>
                            </div>
                        </div>

                        <!-- Option 6 -->
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">6</span>
                                    IUI Treatment
                                </h5>
                                <p class="text-muted small mb-2">
                                    Intrauterine insemination (IUI) may be considered in selected women when appropriate.
                                </p>
                                <p class="text-muted small mb-2">
                                    Before <a href="{{ route('frontend.iui-treatment-in-mumbai') }}"
                                        class="text-pink fw-bold text-decoration-none">IUI Treatment</a>, the fertility
                                    specialist may assess factors such as:
                                </p>
                                <ul class="list-unstyled text-muted small lh-lg mb-3">
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Ovulation</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Fallopian tube patency</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Age</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Duration of infertility</li>
                                    <li><i class="bi bi-check2 text-pink me-2"></i>Previous fertility treatment</li>
                                </ul>
                                <p class="text-muted small mb-0 pt-2 border-top">
                                    IUI is not automatically required simply because a woman has PCOS.
                                </p>
                            </div>
                        </div>

                        <!-- Option 7 -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm rounded-3 p-4 bg-light">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center">
                                    <span class="badge rounded-circle bg-pink text-white me-2 p-2"
                                        style="font-size: 0.85rem; width: 28px; height: 28px; display: inline-flex; align-items: center; justify-content: center;">7</span>
                                    IVF Treatment
                                </h5>
                                <p class="text-muted small mb-2">
                                    IVF may be considered when:
                                </p>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled text-muted small lh-lg mb-0">
                                            <li><i class="bi bi-check-circle-fill text-pink me-2"></i>Ovulation-induction
                                                treatments have failed</li>
                                            <li><i class="bi bi-check-circle-fill text-pink me-2"></i>Other infertility
                                                factors are present</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled text-muted small lh-lg mb-0">
                                            <li><i class="bi bi-check-circle-fill text-pink me-2"></i>There is another
                                                clinical indication for IVF</li>
                                            <li><i class="bi bi-check-circle-fill text-pink me-2"></i>The fertility
                                                specialist determines that IVF is appropriate</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Surgical Treatment for PCOS -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-3 p-4 p-md-5" style="background-color: #fdf5f8;">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-white rounded-circle p-2 me-3 text-pink shadow-sm d-flex align-items-center justify-content-center"
                                style="width: 48px; height: 48px;">
                                <i class="bi bi-hospital fs-4"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold text-dark mb-1">Surgical Treatment for PCOS</h4>
                                <p class="text-muted mb-0 small">Surgery is not the routine treatment for PCOS itself.
                                    However, a surgical procedure called laparoscopic ovarian surgery, commonly known as
                                    laparoscopic ovarian drilling (LOD), may be considered for selected women with PCOS
                                    related infertility.</p>
                            </div>
                        </div>

                        <!-- LOD Card -->
                        <div class="bg-white rounded-3 p-4 shadow-sm mb-4">
                            <h5 class="fw-bold text-dark mb-3">Laparoscopic Ovarian Drilling</h5>
                            <p class="text-muted small mb-3">
                                Laparoscopic ovarian drilling is a minimally invasive procedure performed using laparoscopy.
                                During the procedure, the surgeon uses laparoscopic techniques to make controlled punctures
                                in the ovarian tissue.
                            </p>
                            <p class="text-muted small mb-2 fw-semibold">It may be considered in selected women with:</p>
                            <ul class="list-unstyled text-muted small lh-lg mb-0">
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                    <span>PCOS</span>
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                    <span>Anovulatory infertility</span>
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                    <span>Failure or resistance to oral ovulation-induction treatment</span>
                                </li>
                                <li class="d-flex align-items-start mb-0">
                                    <i class="bi bi-check-circle-fill text-pink me-2 mt-1"></i>
                                    <span>No other significant infertility factors</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Is it suitable for everyone? -->
                        <div class="bg-white rounded-3 p-4 shadow-sm">
                            <h5 class="fw-bold text-dark mb-3">Is Laparoscopic Ovarian Drilling Suitable for Everyone?</h5>
                            <p class="text-muted small mb-2">
                                No. The decision depends on factors such as:
                            </p>
                            <div class="row g-2 mb-3">
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-muted small lh-lg mb-0">
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Previous response to
                                            fertility medication</li>
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Age</li>
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Duration of infertility
                                        </li>
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Other fertility factors
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-muted small lh-lg mb-0">
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Ovarian and reproductive
                                            history</li>
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Surgical risks</li>
                                        <li><i class="bi bi-arrow-right-circle text-pink me-2"></i>Alternative fertility
                                            treatments</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alert alert-light border mb-0 p-3" style="background-color: #fafafa;">
                                <p class="text-muted small mb-0">
                                    <i class="bi bi-exclamation-circle text-pink me-1"></i> A fertility specialist should
                                    discuss the potential benefits, risks &amp; alternatives before the procedure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Table Section -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-3 overflow-hidden bg-white">
                        <div class="p-4 bg-light border-bottom">
                            <h4 class="fw-bold text-dark mb-1">PCOS Surgery vs Medication</h4>
                            <p class="text-muted small mb-0">Summary of when each treatment modality may be considered for
                                PCOS management.</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead style="background-color: #ff007f; color: #fff;">
                                    <tr>
                                        <th scope="col" class="py-3 px-4 text-white" style="width: 40%; font-weight: 600;">
                                            Treatment</th>
                                        <th scope="col" class="py-3 px-4 text-white" style="width: 60%; font-weight: 600;">
                                            When it may be considered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">Lifestyle management</td>
                                        <td class="py-3 px-4 text-muted">Part of long-term PCOS care</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">Hormonal medication</td>
                                        <td class="py-3 px-4 text-muted">Irregular periods/hormonal symptoms</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">Metformin</td>
                                        <td class="py-3 px-4 text-muted">Selected women with metabolic indications</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">Ovulation induction</td>
                                        <td class="py-3 px-4 text-muted">PCOS-related anovulatory infertility</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">IUI</td>
                                        <td class="py-3 px-4 text-muted">Selected fertility cases</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">IVF</td>
                                        <td class="py-3 px-4 text-muted">When indicated or when other treatments fail</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 fw-bold text-dark">Laparoscopic ovarian drilling</td>
                                        <td class="py-3 px-4 text-muted">Selected second-line infertility cases</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Tabs Section -->
    <section class="py-5 bg-white mb-3">
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs mb-4 border-bottom-0" id="pcodTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="diagnose-tab" data-bs-toggle="tab"
                                data-bs-target="#diagnose" type="button" role="tab" aria-controls="diagnose"
                                aria-selected="true">
                                How will you diagnose polycystic ovarian syndrome?
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nature-tab" data-bs-toggle="tab" data-bs-target="#nature"
                                type="button" role="tab" aria-controls="nature" aria-selected="false">
                                Nature helps in controlling your PCOD to great extent
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content border-top" id="pcodTabsContent">
                        <div class="tab-pane fade show active py-4" id="diagnose" role="tabpanel"
                            aria-labelledby="diagnose-tab">
                            <p class="text-muted lh-lg mb-4">Patient with PCOD will have following symptoms,</p>
                            <p class="text-muted lh-lg mb-4">
                                1. Irregular periods- Irregular menstrual periods is the most important sign at a young
                                age.<br>
                                2. Heavy bleeding<br>
                                3. Sudden weight gain- the body fat of most women increases.<br>
                                4. Hirsutism – Unwanted hair growth on the chin, face chest and abdomen is seen in these
                                patients.<br>
                                5. Outbursts of anger- mood swings is very common in these cases.<br>
                                6. Excess acne- Acne which doesn’t respond to usual treatment is very common with PCOD<br>
                                7. Infertility- Infertility is very common with PCOD. It needs proper attention before
                                planning pregnancy.<br>
                                8. Headache<br>
                                9. Male type of baldness
                            </p>
                            <p class="text-muted lh-lg mb-0">
                                Apart from history and physical examinations, few blood tests and ultrasonography of abdomen
                                will help in diagnosis of PCOD. Blood tests usually done are testosterone level and Sex
                                hormone binding globulin.
                            </p>
                        </div>
                        <div class="tab-pane fade py-4" id="nature" role="tabpanel" aria-labelledby="nature-tab">
                            <p class="text-muted lh-lg mb-4">
                                Take regular walks in the morning in park around you, which will not only reduce your stress
                                but also reduce the weight. Regular exercise keeps your body healthy and mind peaceful which
                                helps to reduce stress to great extent. If you learn to manage your stress, it is like
                                managing your PCOD. Listen to your favorite music, read some good books, involve in stress
                                reliving activities to control your PCOD
                            </p>
                            <p class="text-muted lh-lg mb-4">
                                <span class="fw-bold text-dark">Regular exercise:</span><br>
                                Walking, jogging, yoga, Zumba dancing, aerobics, cycling, swimming, all other similar
                                physical activities are suggested by many people to treat PCOD.
                            </p>
                            <p class="text-muted lh-lg mb-0">
                                <span class="fw-bold text-dark">Healthy cooking:</span><br>
                                It is very important to avoid junk food, sweets, fatty foods and soft drinks. So to avoid
                                junks, you need to prepare healthy food at home. Include cooking as a part of your PCOD
                                control activity. Include seasonal fresh fruits, vegetables, sprouts and other super-foods
                                like various seeds rich in omega-3 fatty foods such as flaxseed, walnuts and fish etc. in
                                your routine diet. Try to drink plenty of liquids water throughout the day which gives
                                satiety and give feeling of full stomach.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lifestyle Section -->
    <section class="py-5 bg-white mb-4">
        <div class="container pb-4">
            <h4 class="fw-bold text-dark mb-4">Choose a healthy lifestyle:</h4>
            <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                Young women’s are overworked and burdened with lots of responsibilities. Which
                puts them under lots of stress, which is triggering factor for many health related problems
                including PCOD. Apart from this, young generation should avoid late night binging, drinking alcohol,
                smoking and other substance abusers to avoid multiple health issues. Many a times, young girls are
                unaware of this ailment. Late diagnosis and late treatment leads to other health issues like
                infertility. If you notice any of the above symptoms, in either you or in your friends, you should
                consult your gynecologist immediately and take appropriate advice. PCOD/PCOS can be prevented by
                eating right, exercising regularly, maintaining a healthy lifestyle and consulting your gynecologist
                at regular interval.
            </p>
        </div>
    </section>

    <!-- Frequently Asked Questions (FAQs) Section -->
    <section class="py-5 bg-pink-subtle border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h6 class="text-pink fw-bold text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Got
                    Questions?</h6>
                <h2 class="fw-bold text-dark mb-3">FAQs About PCOS Treatment in Mumbai</h2>
                <div class="title-underline mx-auto mb-4"></div>
                <p class="text-muted mx-auto mb-0" style="max-width: 800px; font-size: 1.05rem;">
                    Find clear, expert answers to the most common questions about PCOS symptoms, diagnosis, management, and
                    fertility treatment options at Pearl Fertility &amp; IVF in Mumbai.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion custom-faq-accordion" id="pcosFaqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1"
                                    aria-expanded="true" aria-controls="faqCollapse1">
                                    1. What is PCOS &amp; how is it treated?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    PCOS is a hormonal &amp; metabolic condition that can affect menstrual cycles,
                                    ovulation, androgen levels &amp; fertility. Treatment depends on the woman's symptoms
                                    &amp; reproductive goals.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2"
                                    aria-expanded="false" aria-controls="faqCollapse2">
                                    2. Is PCOS treatment possible without surgery?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Yes. Most women with PCOS are managed without surgery. Treatment may include lifestyle
                                    changes, medications for menstrual or hormonal symptoms, metabolic management &amp;
                                    fertility treatment when required.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3"
                                    aria-expanded="false" aria-controls="faqCollapse3">
                                    3. Is surgery necessary for PCOS?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    No. Surgery is not routinely required for PCOS. Laparoscopic ovarian surgery may be
                                    considered for selected women with PCOS-related anovulatory infertility when appropriate
                                    medical treatment has not worked.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading4">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4"
                                    aria-expanded="false" aria-controls="faqCollapse4">
                                    4. What is laparoscopic ovarian drilling for PCOS?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Laparoscopic ovarian drilling is a minimally invasive ovarian procedure that may be
                                    considered as a second-line fertility treatment for selected women with PCOS &amp;
                                    anovulatory infertility.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading5">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5"
                                    aria-expanded="false" aria-controls="faqCollapse5">
                                    5. Is laparoscopic ovarian drilling a permanent cure for PCOS?
                                </button>
                            </h3>
                            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    No. Laparoscopic ovarian drilling is not a permanent cure for PCOS. It is a fertility
                                    treatment that may help restore ovulation in selected women.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading6">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6"
                                    aria-expanded="false" aria-controls="faqCollapse6">
                                    6. What is the first-line fertility treatment for PCOS?
                                </button>
                            </h3>
                            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    For women with PCOS-related anovulatory infertility and no other infertility factors,
                                    letrozole is recommended as first-line pharmacological ovulation induction in the
                                    international PCOS guideline.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading7">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7"
                                    aria-expanded="false" aria-controls="faqCollapse7">
                                    7. Can PCOS be treated with lifestyle changes alone?
                                </button>
                            </h3>
                            <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Lifestyle management is an important component of PCOS care, but whether additional
                                    treatment is needed depends on symptoms, metabolic health &amp; reproductive goals.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading8">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8"
                                    aria-expanded="false" aria-controls="faqCollapse8">
                                    8. Can PCOS cause infertility?
                                </button>
                            </h3>
                            <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    PCOS can cause irregular or absent ovulation, which may make conception more difficult.
                                    However, pregnancy can often be achieved naturally or with fertility treatment.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading9">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9"
                                    aria-expanded="false" aria-controls="faqCollapse9">
                                    9. Do all women with PCOS need IVF?
                                </button>
                            </h3>
                            <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    No. IVF is not automatically required for women with PCOS. Many women conceive naturally
                                    or with ovulation-induction treatment. IVF may be considered when other treatments have
                                    failed or when another indication for IVF exists.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading10">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10"
                                    aria-expanded="false" aria-controls="faqCollapse10">
                                    10. Can PCOS cause irregular periods?
                                </button>
                            </h3>
                            <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Yes. Irregular or absent ovulation associated with PCOS can result in irregular, delayed
                                    or absent periods.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 11 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading11">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse11"
                                    aria-expanded="false" aria-controls="faqCollapse11">
                                    11. Can PCOS be cured permanently?
                                </button>
                            </h3>
                            <div id="faqCollapse11" class="accordion-collapse collapse" aria-labelledby="faqHeading11"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    PCOS is generally considered a long-term condition rather than something that has a
                                    guaranteed permanent cure. However, its symptoms and associated health risks can often
                                    be managed effectively with appropriate treatment and follow-up.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 12 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading12">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse12"
                                    aria-expanded="false" aria-controls="faqCollapse12">
                                    12. Which doctor should I consult for PCOS treatment in Mumbai?
                                </button>
                            </h3>
                            <div id="faqCollapse12" class="accordion-collapse collapse" aria-labelledby="faqHeading12"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    A gynaecologist can evaluate PCOS symptoms and menstrual irregularities. If you are
                                    experiencing difficulty conceiving, a reproductive medicine or fertility specialist can
                                    assess ovulation and other fertility factors and discuss appropriate treatment options.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 13 -->
                        <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden">
                            <h3 class="accordion-header" id="faqHeading13">
                                <button class="accordion-button collapsed fw-bold text-dark bg-light py-3 px-4 shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse13"
                                    aria-expanded="false" aria-controls="faqCollapse13">
                                    13. Can I get pregnant naturally with PCOS?
                                </button>
                            </h3>
                            <div id="faqCollapse13" class="accordion-collapse collapse" aria-labelledby="faqHeading13"
                                data-bs-parent="#pcosFaqAccordion">
                                <div class="accordion-body px-4 py-3 text-muted lh-lg bg-white border-top">
                                    Yes. Many women with PCOS become pregnant naturally. Some women may require treatment to
                                    improve or induce ovulation.
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
            <h4 class="fw-bold text-center mb-5">Most Searched Keyword PCOS Treatment</h4>
            <div class="row justify-content-center px-lg-5">
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start">
                    <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                    <span style="font-size: 0.85rem; line-height: 1.4;">PCOS Treatment in Mumbai</span>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-center">
                    <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                    <span style="font-size: 0.85rem; line-height: 1.4;">PCOS Treatment in Goregaon</span>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-center">
                    <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                    <span style="font-size: 0.85rem; line-height: 1.4;">PCOS Treatment in Malad</span>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-end">
                    <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                    <span style="font-size: 0.85rem; line-height: 1.4;">PCOS Treatment in Kandivali</span>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start justify-content-lg-end pe-lg-4">
                    <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                    <span style="font-size: 0.85rem; line-height: 1.4;">PCOS Treatment in Borivali</span>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 d-flex align-items-start ps-lg-4">
                    <i class="bi bi-check fw-bold fs-5 me-2 mt-n1"></i>
                    <span style="font-size: 0.85rem; line-height: 1.4;">PCOS Treatment in Dahisar</span>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-pink-subtle {
            background-color: #fdf5f8 !important;
        }

        .text-pink {
            color: #e83e8c !important;
        }

        .bg-pink {
            background-color: #e83e8c !important;
        }

        .border-pink {
            border-color: #e83e8c !important;
        }

        .title-underline {
            width: 50px;
            height: 3px;
            background-color: #e83e8c;
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