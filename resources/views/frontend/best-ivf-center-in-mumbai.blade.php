@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">IVF Center in Mumbai</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">IVF Center in Mumbai</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Best IVF Center In Mumbai Intro -->
<section class="py-5 bg-white">
    <div class="container py-4 text-center">
        <h3 class="fw-bold text-pink mb-3">Best IVF Center In Mumbai</h3>
        <div class="title-underline mx-auto mb-4"></div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-muted lh-lg mb-4">If you’re looking for the best IVF center in Mumbai, Pearl Fertility is the place to go. Pearl Fertility operates two IVF center in Mumbai, one in Borivali and the other in Kandivali. Many IVF pregnancies have been successfully done here.</p>
                <p class="text-muted lh-lg mb-0">Our competent medical staff, in-house gynecologists, IVF physicians, and infertility specialists at Pearl IVF center in Borivali and Kandivali guarantee that you undergo treatment procedures so that your complete motherhood journey is seamless. To that purpose, we provide the most cost-effective treatment options, as well as some simple payment options.</p>
            </div>
        </div>
    </div>
</section>

<!-- What Is IVF Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-stretch">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/1-ivf.jpg') }}" class="img-fluid rounded shadow-sm w-100 h-100" style="object-fit: cover; min-height: 350px;" alt="What is IVF">
            </div>
            <div class="col-lg-7 d-flex">
                <div class="p-5 bg-pink-subtle rounded w-100 d-flex flex-column justify-content-center shadow-sm">
                    <h3 class="fw-bold text-dark mb-4">What Is IVF?</h3>
                    <p class="text-muted lh-lg mb-0">Ivf is IN VITRO FERTILISATION. In vitro fertilization is a method of fertilization in which an egg and sperm are joined in a laboratory setting. The procedure entails tracking and promoting a woman’s ovulatory cycle, taking an ovum or ova from her ovaries, and allowing sperm to fertilize them in a laboratory culture medium. This is a terrific operation in which the tubal factor , ovulation factor, or low sperm count issue is efficiently addressed, allowing the suffering patient or couple to conceive successfully.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Happens In The IVF Process Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Happens In The IVF Process?</h3>
                <p class="text-muted lh-lg mb-4">The first stage in IVF is to put hormones into your body so that you can generate many eggs each month rather than just one. After that, you’ll be evaluated to see if you’re ready for egg retrieval.</p>
                <p class="text-muted lh-lg mb-4">You will be given injections of a medicine that ripens the developing eggs and initiates the ovulation process prior to the retrieval surgery. The eggs must be extracted shortly as they emerge from the follicles in the ovaries, thus timing is crucial. The eggs will not develop correctly if they are removed too early or too late. Before removing the eggs, your doctor may perform blood tests or an ultrasound to ensure that they are at the proper stage of development. Special instructions will be given to you by the IVF facility the night before and the day of the treatment. The majority of women are offered pain medication and the option of being mildly sedated or being fully anesthetized.</p>
                <p class="text-muted lh-lg mb-4">Your doctor will use ultrasound to find follicles in the ovary and a hollow needle to extract the eggs during the procedure. The treatment takes less than 30 minutes on average, but it could take up to an hour.</p>
                <p class="text-muted lh-lg mb-4">Your eggs will be blended in the laboratory with your partner’s sperm, which they will have provided on the same day as the retrieval.</p>
                <p class="text-muted lh-lg mb-4">The fertilized eggs are stored in the clinic under surveillance to ensure optimal growth while you and your spouse go home. You may have to wait up to five days for the embryo to reach the advanced blastocyst stage, depending on the clinic.</p>
                <p class="text-muted lh-lg mb-4">You will return to the IVF center once the embryos are ready so that doctors can implant one or more into your uterus. This method is less time-consuming and less difficult than retrieving the egg. A flexible tube called a catheter will be inserted through your vaginal and cervix and into your uterus, where the embryos will be implanted. Most IVF doctors recommend transferring up to three embryos at a time to boost the chances of pregnancy.</p>
                <p class="text-muted lh-lg mb-0">You would normally stay in bed for several hours after the treatment and be discharged 4 – 6 hours later. About two weeks following the embryo transfer, your doctor will most likely perform a pregnancy test on you.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/images/cancer.png') }}" class="img-fluid rounded shadow-sm" alt="IVF Process">
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <h4 class="fw-bold mb-4 fst-italic text-dark">About-Pearl IVF center</h4>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="ivfTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                    What Types Of Infertility Can Be Treated With IVF In Our Pearl IVF Center?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                    What to Look for When Choosing an Infertility Clinic/IVF center
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="ivfTabsContent">
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
        <h5 class="fw-bold text-center mb-5">Most Searched Keyword For Best IVF Center</h5>
        <div class="row justify-content-center px-lg-5">
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.9rem;">Best IVF Centre in Mumbai</span>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-center justify-content-lg-center">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.9rem;">Best IVF Centre in Goregaon</span>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-center justify-content-lg-end">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.9rem;">Best IVF Centre in Malad</span>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-center mt-lg-3">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.9rem;">Best IVF Centre in Kandivali</span>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-center justify-content-lg-center mt-lg-3">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.9rem;">Best IVF Centre in Borivali</span>
            </div>
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-center justify-content-lg-end mt-lg-3">
                <i class="bi bi-check fw-bold fs-5 me-2"></i>
                <span style="font-size: 0.9rem;">Best IVF Centre in Dahisar</span>
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