@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Hysteroscopy</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Hysteroscopy</li>
            </ol>
        </nav>
    </div>
</section>

<!-- What Is Hysteroscopy Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Is Hysteroscopy?</h3>
                <p class="text-muted lh-lg mb-4">In Hysteroscopy, your surgeon or your gynecologist perform surgery with the help of various tools including a specialised of camera, it is called as endoscope or hysteroscope. The hysteroscope is used to look inside the Uterus. Your doctor, will examine full uterus cavity from inside with hysteroscope , if required he will take a biopsy of the endometrium for diagnosis. Sometimes with the help of hysteroscope, doctor can remove additional septum, can get rid fibroids during hysteroscopy. Hysteroscopy can determine the cause of excessive bleeding, can find blocked follopian tubes or adhesions inside uterus.</p>
                <p class="text-muted lh-lg mb-4">With this, doctors can detect and treat various conditions like uterine fibroids, tumors, boils, endometrial cancer, etc. Hysteroscopy is a safe method by which any problem of the Uterus can be detected, treated, and corrected.</p>
                <p class="text-muted lh-lg mb-4">What happens at the time of Hysteroscopy?<br>
                These surgeries are performed by giving local or general anesthesia. Sometimes surgery occurs without anesthesia, and the surgery is completed in only ten minutes. Before the endoscopy, the gynecologist would examine you then he will insert hysteroscope through Vagina into the Uterus. After this, co2 or some liquid will be inserted inside the Uterus so that the Uterus can be adequately seen. To remove polyps or small fibroids, the doctor may also use some more instruments. See your doctor for more questions or information.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/hypro-1.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Hysteroscopy">
            </div>
        </div>
    </div>
</section>

<!-- Understand The Dangers Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">Understand The Dangers Of Hysteroscopy</h3>
                <p class="text-muted lh-lg mb-4">What are the risks of Hysteroscopy?</p>
                <p class="text-muted lh-lg mb-4">It is not very common to have hazards during this surgery. It is safe procedure, and commonly performed as office or day care procedure<br><br>
                Some of the hazards that can occur in this surgery are:</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Allergic to anesthesia</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Bleeding</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Thrombosis</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Perforation of uterine cavity. Though it is very rare, but yes it is a possibility.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Ask a doctor or surgeon all your queries before undergoing it.</li>
                </ul>
                <p class="text-muted lh-lg mb-0">How to prepare for Hysteroscopy?<br>
                Before surgery, tell the doctor about all your medicines, allergies, and health problems. Ask all your queries related to anaesthesia and sedation to your anaesthetist when he visits you.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/hypro-2.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Dangers Of Hysteroscopy">
            </div>
        </div>
    </div>
</section>

<!-- Instructions Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="fw-bold text-dark mb-4">Know when to stop eating and drinking before surgery, also follow the instructions from the doctor. You have to stop eating eight hours before surgery. But you can drink clear coffee or juice without pulp two hours prior.</h5>
                
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> If you are taking any medicine.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> If you are allergic to any medicine</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> If you take coagulants to stop the bleeding.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> If you take anticoagulants such as warfarin, aspirin.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> If you have had an infection in Uterus or Vagina in the last six months.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> If you have lung disease or heart disease.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Hysteroscopy should always be done during or just after periods</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Do not use tempos or vaginal suppositories 24 hours before undergoing Hysteroscopy.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Before Hysteroscopy, you will be given a sedative or anxiolytics to relax.</li>
                </ul>

                <p class="text-muted lh-lg mb-2">What happens after Hysteroscopy?</p>
                <p class="text-muted lh-lg mb-0">You can go home after few hours of surgery. The doctor will brief you about Hysteroscopy findings and give detailed report at the end. Sometimes biopsy is send for diagnosis of various diseases of uterus. From the next day, you can do all the work. During this period, there may be slight pain in abdomen and some bleeding but that settles over next few days.</p>
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
</style>

@endsection