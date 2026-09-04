@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">PCOS Treatment In Mumbai</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
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
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0 d-flex flex-column justify-content-center">
                <h2 class="fw-bold text-dark mb-4">What Is PCOD?</h2>
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
            <div class="col-lg-6 text-center d-flex">
                <img src="https://pearlfertilityandivf.com/web-page-images/PCOD-img.jpg" class="img-fluid w-100 shadow-sm" style="object-fit: cover;" alt="What is PCOD">
            </div>
        </div>

        <!-- Row 2 -->
        <div class="row align-items-stretch pt-2">
            <div class="col-lg-6 text-center d-flex mb-5 mb-lg-0">
                <img src="https://pearlfertilityandivf.com/web-page-images/PCOD-img2.jpg" class="img-fluid w-100 shadow-sm" style="object-fit: cover;" alt="Cause of PCOD">
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

<!-- Tabs Section -->
<section class="py-5 bg-white mb-3">
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs custom-tabs mb-4 border-bottom-0" id="pcodTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-bold px-4 py-3 text-dark border-0 rounded-0" id="diagnose-tab" data-bs-toggle="tab" data-bs-target="#diagnose" type="button" role="tab" aria-controls="diagnose" aria-selected="true" style="font-size: 0.95rem;">
                            How will you diagnose polycystic ovarian syndrome?
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-bold px-4 py-3 text-dark border-0 rounded-0" id="nature-tab" data-bs-toggle="tab" data-bs-target="#nature" type="button" role="tab" aria-controls="nature" aria-selected="false" style="font-size: 0.95rem;">
                            Nature helps in controlling your PCOD to great extent
                        </button>
                    </li>
                </ul>
                <div class="tab-content border-top" id="pcodTabsContent">
                    <div class="tab-pane fade show active py-4" id="diagnose" role="tabpanel" aria-labelledby="diagnose-tab">
                        <p class="text-muted lh-lg mb-4">Patient with PCOD will have following symptoms,</p>
                        <p class="text-muted lh-lg mb-4">
                            1. Irregular periods- Irregular menstrual periods is the most important sign at a young age.<br>
                            2. Heavy bleeding<br>
                            3. Sudden weight gain- the body fat of most women increases.<br>
                            4. Hirsutism – Unwanted hair growth on the chin, face chest and abdomen is seen in these patients.<br>
                            5. Outbursts of anger- mood swings is very common in these cases.<br>
                            6. Excess acne- Acne which doesn’t respond to usual treatment is very common with PCOD<br>
                            7. Infertility- Infertility is very common with PCOD. It needs proper attention before planning pregnancy.<br>
                            8. Headache<br>
                            9. Male type of baldness
                        </p>
                        <p class="text-muted lh-lg mb-0">
                            Apart from history and physical examinations, few blood tests and ultrasonography of abdomen will help in diagnosis of PCOD. Blood tests usually done are testosterone level and Sex hormone binding globulin.
                        </p>
                    </div>
                    <div class="tab-pane fade py-4" id="nature" role="tabpanel" aria-labelledby="nature-tab">
                        <p class="text-muted lh-lg mb-4">
                            Take regular walks in the morning in park around you, which will not only reduce your stress but also reduce the weight. Regular exercise keeps your body healthy and mind peaceful which helps to reduce stress to great extent. If you learn to manage your stress, it is like managing your PCOD. Listen to your favorite music, read some good books, involve in stress reliving activities to control your PCOD
                        </p>
                        <p class="text-muted lh-lg mb-4">
                            <span class="fw-bold text-dark">Regular exercise:</span><br>
                            Walking, jogging, yoga, Zumba dancing, aerobics, cycling, swimming, all other similar physical activities are suggested by many people to treat PCOD.
                        </p>
                        <p class="text-muted lh-lg mb-0">
                            <span class="fw-bold text-dark">Healthy cooking:</span><br>
                            It is very important to avoid junk food, sweets, fatty foods and soft drinks. So to avoid junks, you need to prepare healthy food at home. Include cooking as a part of your PCOD control activity. Include seasonal fresh fruits, vegetables, sprouts and other super-foods like various seeds rich in omega-3 fatty foods such as flaxseed, walnuts and fish etc. in your routine diet. Try to drink plenty of liquids water throughout the day which gives satiety and give feeling of full stomach.
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

<!-- Most Searched Keywords Section -->
<section class="py-5 text-white" style="background-color: #ff007f;">
    <div class="container py-4">
        <h5 class="fw-bold text-center mb-5">Most Searched Keyword PCOS Treatment</h5>
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
/* Custom Tabs Styling */
.custom-tabs {
    background-color: #f8f9fa;
}
.custom-tabs .nav-link {
    color: #495057;
    position: relative;
}
.custom-tabs .nav-link.active {
    background-color: #fff;
    color: #e83e8c !important;
}
.custom-tabs .nav-link.active::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background-color: #e83e8c;
}
.tab-content {
    border-top: 1px solid #dee2e6;
}
</style>
@endsection