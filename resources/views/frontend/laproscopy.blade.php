@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Laparoscopy</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Laparoscopy</li>
            </ol>
        </nav>
    </div>
</section>

<!-- What Is Laparoscopy Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Is Laparoscopy?</h3>
                <p class="text-muted lh-lg mb-4">Laparoscopy is very commonly used to diagnose and treat infertility. Laparoscopy in case of infertility can be either diagnostic or curative. Doctors can diagnose various abnormalities of uterus, fallopian tubes and ovaries with laparoscopy. You can treat fibroids of uterus, fallopian tubes blockage, ovarian cysts, ectopic pregnancy etc etc via laparoscopy. If you undergo laparoscopy before undergoing IVF treatment, your chances of becoming pregnancy or conception increases.</p>
                <p class="text-muted lh-lg mb-4">Laparoscopy is a surgical procedure in which doctors insert a laparoscope a special surgical instruments with high definition camera attached into the abdomen to see various vital organs with a small incision. This surgery is done by laparoscope, specially designed equipment to operate through small hole.</p>
                <p class="text-muted lh-lg mb-0">It is also called as key hole surgery. There is a thin fiber-optic tube connected with a laparoscope light and camera. It helps your doctor see the abdominal organs and treat the problem.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/laproscopy.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Laparoscopy">
            </div>
        </div>
    </div>
</section>

<!-- When Is Laparoscopic Surgery Performed Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 text-center">
                <img src="{{ asset('_images/laproscopy-2.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="When Is Laparoscopic Surgery Performed">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h3 class="fw-bold text-dark mb-4">When Is Laparoscopic Surgery Performed?</h3>
                <p class="text-muted lh-lg mb-3">Doctors may recommend laparoscopy for the following reasons:</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Multiple abortions</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Repeated failed IVF Cycles</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Endometriosis</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Any type of inflammation in the pelvic part</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Ectopic pregnancy</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Diagnosis of Uterine fibroid on USG</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Detection of ovarian cyst</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Treatment of fibroid, ovarian cyst, blocked fallopian tubes</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Undiagnosed infertility</li>
                </ul>
                <p class="text-muted lh-lg mb-0">Some causes of infertility can only be diagnosed through a laparoscopy. Laparoscopy Test allows your doctor to see what is inside your abdomen and helps detect cysts, fibroids, tube blocks and adhesions. There are enumerable reasons to do laparoscopic surgeries but in case of infertility it is required to diagnose fallopian tube blocks, to diagnose other uterine anomalies, to treat uterine fibroid, to treat tube block, to remove adhesions from uterus, to treat ovarian cyst etc etc.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-bottom">
    <div class="container py-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="lapTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                    How is laparoscopic surgery done?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                    Laparoscopy Side Effects
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="lapTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p class="text-muted lh-lg mb-4">In addition, laparoscopic surgery if done appropriately especially for fibroids, blocked fallopian tubes, ovarian cysts, uterine adhesions can make you pregnant without undergoing various assisted reproductive techniques like IUI, IVF, ICSI (Laparoscopy Ke Bad Pregnancy). So it offers better chance of pregnancy.<br>
                So Laparoscopic surgery can be used to diagnose and treat following conditions causing female infertility.</p>
                <p class="text-muted lh-lg mb-2">Some of them are-</p>
                <p class="text-muted lh-lg mb-4">
                    <strong class="text-dark">Fallopian tube blockage</strong> – Any type of obstruction in the fallopian tube is treated, which can improve the success rate of natural pregnancy or success rate of IUI.
                </p>
                <p class="text-muted lh-lg mb-4">
                    <strong class="text-dark">Endometriosis</strong> – In this, the endometrial tissues grow abnormally and spread out of the uterus. These tissues are removed with the help of laparoscopy to make IVF successful. This procedure gives best results in hands of good laparoscopic surgeon. Many patients conceive after endometriosis surgeries naturally.
                </p>
                <p class="text-muted lh-lg mb-0">
                    <strong class="text-dark">PCOS</strong> – In the PCOS problem, cysts form in the ovaries, which are removed with the help of laparoscopy.
                </p>
            </div>
            
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <p class="text-muted lh-lg mb-4">You may be hospitalized for surgery. During the laparoscopy process, the patient is sedated and given either general anaesthesia or spinal anaesthesia for procedure. After giving anaesthesia, actual procedure of laparoscopy starts. the medicine is provided, which makes the patient’s body fit for this surgery.</p>
                
                <p class="text-muted lh-lg mb-4">Then the doctor makes a small incision below the navel on your abdomen and inserts the scope ie small tube. With this tube’s help, carbon dioxide gas is filled in the abdomen, which causes distension of abdomen and it helps in better visualisation of all organs in abdomen.</p>
                
                <h5 class="fw-bold text-dark mb-3 mt-4">Laparoscopy Side Effects</h5>
                <p class="text-muted lh-lg mb-3">Like any surgical procedure, laparoscopy may also have some risks, i.e., side effects; however, these risks are minor, such as :</p>
                <ul class="list-unstyled mb-0 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Infection</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Feeling like weakness or vomiting</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Burning around the incision</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Fever</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Having blood clots in the vein</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Conclusion Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <h3 class="fw-bold text-dark mb-4">Choose a healthy lifestyle:</h3>
        <div class="title-underline mb-4"></div>
        <p class="text-muted lh-lg mb-0">
            Young women's are overworked and burdened with lots of responsibilities. Which puts them under lots of stress, which is triggering factor for many health related problems including PCOD. Apart from this, young generation should avoid late night binging, drinking alcohol, smoking and other substance abusers to avoid multiple health issues. Many a times, young girls are unaware of this ailment. Late diagnosis and late treatment leads to other health issues like infertility. If you notice any of the above symptoms, in either you or in your friends, you should consult your gynecologist immediately and take appropriate advice. PCOD/PCOS can be prevented by eating right, exercising regularly, maintaining a healthy lifestyle and consulting your gynecologist at regular interval.
        </p>
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