@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Egg Donation</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Egg Donation</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Definition Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                <h3 class="fw-bold text-dark mb-4">Definition</h3>
                <p class="text-muted lh-lg mb-4">Egg donation is the process by which a women donates eggs to enable another women to conceive as a part of an assisted reproduction treatment.</p>
                <p class="text-muted lh-lg mb-4">Female Egg Donation is a unique way of giving happiness to a woman who is unable to become a mother due to egg related issues.</p>
                <p class="text-muted lh-lg mb-4">Just as Vicky Donor, who inspired the boys to donate semen, there is need to increase awareness of female egg donation in community.</p>
                <p class="text-muted lh-lg mb-4">However, due to a lack of complete knowledge of this, aspiring mothers and donors have to face multiple problems. There are legal and ethical issues as well.</p>
                <p class="text-muted lh-lg mb-0">Therefore, all women should be given full information about female egg donation so that they can take proper decision with regards to egg donation. Because of various legal and ethical issues along with lack of awareness among community about egg donation, we have tried writing this article.</p>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('_images/laproscopy-2.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Egg Donation">
            </div>
        </div>
    </div>
</section>

<!-- What Should Be Kept In Mind Section -->
<section class="py-5 bg-pink-subtle">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 text-center">
                <img src="{{ asset('_images/donor.png') }}" class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Female Egg Donation">
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h3 class="fw-bold text-dark mb-4">What Should Be Kept In Mind For Female Egg Donation?</h3>
                <p class="text-muted lh-lg mb-3">If you want to become an egg donor, then you should take care of the following:</p>
                <p class="text-muted lh-lg mb-3 fw-bold">You must be between 21 and 35 years old</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Your family is complete</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You should have regular monthly menstrual periods.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You should not have any type of disease.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You must be physically and emotionally healthy.</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> Your BMI must be less than 28</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You do not have substance abuse</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You should be non smoker</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You should have both ovaries</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> No family history of genetic disease</li>
                    <li class="mb-2"><i class="bi bi-dot text-pink fs-5"></i> You are willing to take injection</li>
                </ul>
                
                <h5 class="fw-bold text-dark mb-3">What are Pros and Cons of Egg donation?</h5>
                <p class="fw-bold text-muted mb-2">Benefits to Donor</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2">1. Detailed health screening</li>
                    <li class="mb-2">2. Remuneration</li>
                    <li class="mb-2">3. You get chance to help needy female</li>
                    <li class="mb-2">4. You can preserve your own eggs if you wish</li>
                </ul>
                
                <h5 class="fw-bold text-dark mb-0">How many times donors can donate sperms?</h5>
            </div>
        </div>
    </div>
</section>

<!-- Tabs Section -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container py-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs mb-4 border-bottom-0" id="eggTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                    How will you diagnose polycystic ovarian syndrome?
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                    Nature helps in controlling your PCOD to great extent
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="eggTabsContent">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <p class="fw-bold text-muted mb-2">Benefits to recipient</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2">1. It offers a healthy pregnancy</li>
                    <li class="mb-2">2. You can choose a bio-similar donor</li>
                    <li class="mb-2">3. Flexibility of process</li>
                    <li class="mb-2">4. Chance to achieve pregnancy goal faster.</li>
                </ul>
                
                <p class="fw-bold text-muted mb-2">Cons of Egg donation</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2">1. Expensive</li>
                    <li class="mb-2">2. Legal issues</li>
                    <li class="mb-2">3. Psychological concerns after pregnancy of not having own child</li>
                    <li class="mb-2">4. Chances of failure</li>
                </ul>
                
                <p class="text-muted mb-0">Except in cases of full tubal blockage, IVF is never the initial step in the treatment of infertility. It’s only used in circumstances where other treatments have failed, such as fertility medicines, or surgery.</p>
            </div>
            
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <h5 class="fw-bold text-dark mb-3">What are the side effects of female egg donation?</h5>
                <p class="text-muted lh-lg mb-4">Like any other medical procedure, even Egg donation is not without risk but risk is limited.</p>
                
                <p class="text-muted lh-lg mb-2">Following are side effects or risks of egg donations:</p>
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2">1. Pain or redness at injection site</li>
                    <li class="mb-2">2. Allergic reaction to drugs given during cycle</li>
                    <li class="mb-2">3. Side effects of fertility drugs are- Weight gain, bloating, headache, mood changes and rarely risk of Ovarian hyperstimulation syndrome.</li>
                    <li class="mb-2">4. Pain in abdomen after egg donation</li>
                    <li class="mb-2">5. Bleeding into abdomen</li>
                    <li class="mb-2">6. Minimal discomfort during ultrasound examination</li>
                    <li class="mb-2">7. Psychological distress</li>
                    <li class="mb-2">8. Potential long term effects- not many.</li>
                </ul>
                
                <ul class="list-unstyled mb-4 text-muted lh-lg">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Call a customer service agent.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Seek advice from a local infertility support organization.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Find out what the clinic’s success rate is.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Schedule a consultation appointment.</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-pink me-2"></i> Problems with antibodies that destroy sperm or eggs</li>
                </ul>
                
                <p class="text-muted mb-0">Except in cases of full tubal blockage, IVF is never the initial step in the treatment of infertility. It’s only used in circumstances where other treatments have failed, such as fertility medicines, or surgery.</p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <h3 class="fw-bold text-dark mb-4">Process of female egg donation</h3>
        <div class="title-underline mb-4"></div>
        <p class="text-muted lh-lg mb-4">The following steps are involved in the female egg donation:</p>
        
        <p class="text-muted lh-lg mb-4"><strong class="text-dark">Step 1:</strong> Screening of egg donors is crucial step in egg donation process. It is done in stepwise manner starting with detailed history, followed by examination, ultrasonography of abdomen and then various blood tests, genetic tests and ends psychological analysis of egg donors. Doctors make sure that all egg donors are healthy in all aspects before they donate eggs. Once the donor is finalized, her cycle is matched with patient’s cycle.</p>
        
        <p class="text-muted lh-lg mb-4"><strong class="text-dark">Step 2:</strong> Synchronization with the Resident Cycle. In this phase, the egg donor is given contraceptive drugs on the third day of her menstrual cycle(menstrual cycle) to keep her hormones and ovaries functioning.</p>
        
        <p class="text-muted lh-lg mb-4"><strong class="text-dark">Step-3:</strong> Supersession of the Cycle is done to prevent ovulation on its own in donors. If they ovulate on their own, doctors won’t get eggs for IVF.</p>
        
        <p class="text-muted lh-lg mb-4"><strong class="text-dark">Step-4:</strong> Stimulation of donors ovaries to produce more follicles(eggs) is done various injections. Even these injections improve quality of follicles and increase its quantity.</p>
        
        <p class="text-muted lh-lg mb-4"><strong class="text-dark">Step-5:</strong> Retrieval of Eggs after giving sedation or general anaesthesia is done in IVF Operation Theater after taking maximum sterile precautions. It’s done with the help of wide bore needle and specialized suction pump. Needle is inserted per vaginally and thus retrieved eggs are immediately transferred in culture media and for analysis in IVF laboratory. All good, matured eggs are fertilized by IVF procedure or by ICSI procedure.</p>
        
        <p class="text-muted lh-lg mb-4"><strong class="text-dark">Step-6:</strong> Follow-up of donor is important to prevent any untoward effect. Donors are kept in hospital for few hours for observation and then discharged after few specific instruction.</p>
        
        <h5 class="fw-bold text-dark mb-3 mt-5">What are Ethical Issues?</h5>
        <p class="text-muted lh-lg mb-0">Third party reproduction via IVF with donor eggs, has various ethical issues including conflict of interest between agents, donor and recipient. Detailed informed consent and counselling of donor is crucial to prevent problems. It is said that only a woman can understand the sorrow of a woman in the best way. Therefore, if you are a healthy woman, you should donate or encourage other womens to donate eggs if someone needs it. Your one Egg Donation can change life of a family to great extent.</p>
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