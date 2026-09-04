@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg1.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Our Doctor</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Our Doctor</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Top Content -->
<section class="py-5">
    <div class="container py-4 text-center">
        <h2 class="fw-bold text-pink mb-4">Best Gynecologist In Mumbai</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="text-muted lh-lg mb-4">If you’re looking for the Best gynecologist in mumbai, Pearl Fertility is the place to go. Pearl Fertility operates two IVF center in Mumbai, one in Borivali and the other in Kandivali. Many IVF pregnancies have been successfully done here.</p>
                <p class="text-muted lh-lg mb-0">Our competent medical staff, in-house gynecologists, IVF physicians, and infertility specialists at Pearl IVF center in Borivali and Kandivali guarantee that you undergo treatment procedures so that your complete motherhood journey is seamless. To that purpose, we provide the most cost-effective treatment options, as well as some simple payment options.</p>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Profiles -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-4">
        
        <!-- Profile 1 -->
        <div class="row align-items-center mb-5 bg-white p-4 rounded shadow-sm">
            <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                <img src="{{ asset('assets/images/our-doctor.jpeg') }}" alt="Dr. Pritimala" class="img-fluid rounded" style="max-width: 250px;">
            </div>
            <div class="col-lg-8">
                <h6 class="text-pink fw-bold text-uppercase mb-2">Profile</h6>
                <h3 class="fw-bold text-dark mb-2">Dr.Pritimala Gangurde Kadam</h3>
                <h6 class="text-dark mb-4">M.B.B.S., D.N.B.- INFERTILITY SPECIALIST</h6>
                <p class="text-muted lh-lg mb-0">MBBS DNB ( Obst & Gyn ) masters in reproductive medicine & IVF (London), PG reproductive medicine(ACOG), Diploma in Ivf & Rep medicine( Germany ). Work experience of 6 yrs at well reputed Dept of IVF, Lilavati hospital & research centre, Bandra West. Mumbai</p>
            </div>
        </div>

        <!-- Profile 2 -->
        <div class="row align-items-center bg-white p-4 rounded shadow-sm">
            <div class="col-lg-4 mb-4 mb-lg-0 text-center text-lg-start">
                <img src="{{ asset('assets/images/dr.rupali.jpg') }}" alt="Dr. Rupali" class="img-fluid rounded" style="max-width: 250px;">
            </div>
            <div class="col-lg-8">
                <h6 class="text-pink fw-bold text-uppercase mb-2">Profile</h6>
                <h3 class="fw-bold text-dark mb-2">Dr.Rupali Gangurde</h3>
                <h6 class="text-dark mb-4">M.B.B.S., MD (PATHOLOGY) (GMC MIRAJ)</h6>
                <p class="text-muted lh-lg mb-0">Dr Rupali Gangurde performs all routine blood test, specialized investigation (hormone assay, semen analysis, allergy panel), Body Profile, Special interest in F.N.A.C., Cytology, Histopathology.</p>
            </div>
        </div>

    </div>
</section>

<!-- Some Facts About Us -->
<section class="py-5">
    <div class="container py-4 text-center">
        <h6 class="text-pink fw-bold text-uppercase mb-2">Who We Are</h6>
        <h2 class="fw-bold text-pink mb-4">Some Facts About Us</h2>
        
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <p class="text-muted lh-lg">Pearl Fertility and IVF also think about elderly couples who desire to get our services; for them, we own an in-house multidisciplinary team of doctors, technicians, dietitian and counsellors.</p>
            </div>
        </div>

        <div class="row justify-content-center text-pink fw-bold">
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="p-3 bg-pink-subtle rounded">Embryologists</div>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <div class="p-3 bg-pink-subtle rounded">ICSI Specialist</div>
            </div>
            <div class="col-md-3">
                <div class="p-3 bg-pink-subtle rounded">Obstetrician</div>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <h3 class="fw-bold mb-4">About-Pearl IVF center</h3>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="ivfTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active fw-bold border-0 border-bottom border-3 text-dark rounded-0 px-4 py-3" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true" style="border-color: #e83e8c !important; background: transparent;">
                    What types of infertility can be treated with IVF in our Pearl IVF center?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link fw-bold border-0 text-muted rounded-0 px-4 py-3" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false" style="background: transparent;">
                    What to Look for When Choosing an Infertility Clinic/IVF center
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="ivfTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p class="text-muted mb-4">If you or your partner has been diagnosed with one of the following conditions, IVF may be a possibility for you.</p>
                <ul class="list-unstyled mb-4">
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
                <ul class="list-unstyled mb-4">
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

<!-- Custom JS for tabs to toggle bottom border on active -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var triggerTabList = [].slice.call(document.querySelectorAll('#ivfTabs button'))
    triggerTabList.forEach(function (triggerEl) {
        var tabTrigger = new bootstrap.Tab(triggerEl)
        triggerEl.addEventListener('click', function (event) {
            event.preventDefault()
            
            // Reset all styles
            triggerTabList.forEach(function(el) {
                el.classList.remove('border-bottom', 'border-3', 'text-dark');
                el.classList.add('border-0', 'text-muted');
                el.style.borderColor = 'transparent';
            });
            
            // Apply active styles
            this.classList.remove('border-0', 'text-muted');
            this.classList.add('border-bottom', 'border-3', 'text-dark');
            this.style.setProperty('border-color', '#e83e8c', 'important');
            
            tabTrigger.show()
        })
    })
});
</script>

<style>
.text-pink {
    color: #e83e8c !important;
}
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
.nav-tabs .nav-link:hover {
    border-color: transparent;
}
.breadcrumb-item + .breadcrumb-item::before {
    color: #rgba(255,255,255,0.5);
}
</style>

@endsection