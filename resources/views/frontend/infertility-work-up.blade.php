@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Infertility Work Up</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Infertility Work Up</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Work Up Intro Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    Infertility work up is assessment and analysis done before start of fertility treatment for male and female partner. For female partner test involves checking of ovarian reserve, ovulatory function and finding out any structural defects. For male partner investigations revolve around semen analysis and functional analysis of sperms. It involves battery of investigations starting from blood tests, semen analysis, hysterosalpingography, hysterosalpingogram, ultrasonography, hysteroscopy, laparoscopy etc.
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    What are the tests done in infertility work up?
                </p>
                <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
                    These tests are divided into,<br>
                    1. Laboratory tests- Blood tests, semen analysis<br>
                    2. Imaging Tests- hysterosalpingograpphy, hysterosalpingogram, ultrasonography<br>
                    3. Procedural tests- Hysteroscopy, Laproscopy
                </p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://pearlfertilityandivf.com/web-page-images/infertility.jpg" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Infertility Work Up">
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    What Blood tests are required in Infertility workup?
                </p>
                <p class="text-muted lh-lg mb-3" style="font-size: 1.05rem;">
                    Blood tests are required to see the levels and abnormalities of various hormones, to rule out other associated problems like thyroid disease, diabetes mellitus and to rule out genetic abnormalities
                </p>
                <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
                    Hormonal tests are, LH, FSH,Estradiol,Prolactin,Progesterone,Estrogen,Anti Mullerian Hormone (AMH)
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Semen Analysis Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="https://pearlfertilityandivf.com/web-page-images/automated-semen-analyser-img.jpg" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Semen Analysis">
            </div>
            <div class="col-lg-7">
                <div class="ps-lg-5">
                    <h3 class="fw-bold text-dark mb-4">What is Semen analysis and how it is done?</h3>
                    <p class="text-muted lh-lg mb-4">
                        Semen analysis is analysis of semen done in laboratory to see the sperm count, sperm motility and its function. It’s also called as male fertility test or sperm count test. It is done on expressed out semen by male partner. Done after three days of sexual abstinence, usually done immediately after expressing out semen.<br>
                        Many a times males are put on multivitamins and other medications, if sperm count is low.
                    </p>
                    <p class="text-muted lh-lg mb-4">
                        Normal sperm count ranges from 15-200 million/ml of semen. You are considered to have low sperm count if it is less than 15 million/ml, which is also called as oligospermia. Azoospermia is compete absence of sperms in semen even after three days of abstinence from sexual intercourse.
                    </p>
                    <p class="text-muted lh-lg mb-2">Role of USG during IVF treatment,</p>
                    <ul class="list-unstyled text-muted lh-lg mb-0">
                        <li>1. Its required to rule out any anatomical abnormalities in reproductive system,</li>
                        <li>2. To see the ovarian size, shape</li>
                        <li>3. To monitor follicular growth</li>
                        <li>4. To monitor endometrial growth before embryo transfer</li>
                        <li>5. To do ovum pickup</li>
                        <li>6. To monitor fetal growth</li>
                        <li>7. To do Sonosalpingography</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hysteroscopy Section -->
<section class="py-5 bg-white pt-5 mt-3">
    <div class="container">
        <h4 class="fw-bold text-dark mb-3">What is role of Hysteroscopy in IVF?</h4>
        <hr class="text-muted mb-4">
        <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
            Hysteroscopy is procedure to see inside your uterus with the help of special endoscopy instruments ton which one camera will be attached. It is used for diagnosis of any abnormality in uterine cavity, done to take endometrial biopsy. It is used to resect or treat intra uterine anomaly like bi-septate uterus or to resect uterine fibroids.
        </p>
        <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
            All these measures increases chances of normal conception or increases chances of successful IVF cycle. Hysteroscopy is quite safe procedure, sometimes done as day care procedure or office procedure.
        </p>
        <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
            Male inertility: Sperm related issues is the main reason for male infertility. This is quite common in modern world because of various reasons like obesity, smoking etc etc. Male fertility treatment helps in sperm deficiency, slow perm count, defective sperm size, poor quality sperm in the semen, or inability to ejaculate. IVF requires only few healthy sperms that can fertilize an egg.
        </p>
        <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
            Female infertility: Many women experience ovulation problems due to which they face various difficulties like irregular periods, very painful periods, excessive bleeding in periods. Ovarian reserve is main factor in female infertility, as age progresses their reserve goes down and so doesm their chances to become pregnant.
        </p>
        <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
            Blockage in the fallopian tubes or problems in the uterus is among the common causes of infertility. In the IVF procedure, various hormonal injections are given during the cycle to procure more eggs and in a way to develop more embryos.
        </p>
    </div>
</section>

<!-- Laparoscopy Section -->
<section class="py-5 bg-white">
    <div class="container">
        <h4 class="fw-bold text-dark mb-3">What is role of Laparoscopy in IVF?</h4>
        <hr class="text-muted mb-4">
        <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
            Laparoscopy is a surgical procedure in which doctors insert a laparoscope a special surgical instruments with high definition camera attached into the abdomen to see various vital organs with a small incision. This surgery is done by laparoscope, specially designed equipment to operate through small hole. It is also called as key hole surgery. There is a thin fiber-optic tube connected with a laparoscope light and camera. It helps your doctor see the abdominal organs and treat the problem. There are enumerable reasons to do laproscopic surgeries but in case of infertility it is required to diagnose follopian tube blocks, to diagnose other uterine anomalies, to treat uterine fibroid, to treat tube block, to remove adhesions from uterus, to treat ovarian cyst etc.
        </p>
        <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
            Laparoscopic surgery is usually suggested after repeated abortions, after multiple IVF failures, if diagnosis of uterine fibroid or ovarian cyst is confirmed with ultrasound. Typically, this is done after the other infertility tests have been completed.
        </p>
    </div>
</section>

<!-- Consult Physician Section -->
<section class="py-5 bg-white mb-5">
    <div class="container mb-4">
        <h4 class="fw-bold text-dark mb-3">When do we have to consult Physician during Infertility treatment?</h4>
        <hr class="text-muted mb-4">
        <p class="text-muted lh-lg mb-4" style="font-size: 1.05rem;">
            We need to consult physician if you have any significant systemic illness like diabetes mellitus, thyroid disease, bleeding tendencies, heart disease, severe lung disease, various autoimmune diseases etc. For better prognosis and best results, physician involvement gives lot many input, which help in better results.
        </p>
        <p class="text-muted lh-lg mb-0" style="font-size: 1.05rem;">
            For further queries, please to write to us on pearlfertilityandivf@gmail.com or send enquiry on www.pearlfertilityandivf.com
        </p>
    </div>
</section>

<style>
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
</style>
@endsection