@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/faq.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">FAQs</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">FAQs</li>
            </ol>
        </nav>
    </div>
</section>

<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h5 class="fw-bold text-pink mb-4">Frequently Asked Questions</h5>
                
                <div class="accordion" id="faqAccordionTop">
                    <div class="accordion-item border-0 mb-3 bg-transparent">
                        <h2 class="accordion-header" id="headingOneTop">
                            <button class="accordion-button rounded bg-white shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneTop" aria-expanded="true" aria-controls="collapseOneTop">
                                <div class="bg-pink text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 35px; height: 35px; font-size: 1.2rem;">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                What is IVF?
                            </button>
                        </h2>
                        <div id="collapseOneTop" class="accordion-collapse collapse show" aria-labelledby="headingOneTop" data-bs-parent="#faqAccordionTop">
                            <div class="accordion-body text-muted bg-white border mt-2 rounded">
                                IVF i.e. In vitro fertilization is a procedure where female eggs and male sperm are fertilized outside the body in a petri dish in a controlled environment.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 bg-transparent">
                        <h2 class="accordion-header" id="headingTwoTop">
                            <button class="accordion-button collapsed rounded bg-white shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoTop" aria-expanded="false" aria-controls="collapseTwoTop">
                                <div class="bg-pink-subtle text-muted rounded-circle d-flex align-items-center justify-content-center me-3 icon-container" style="width: 35px; height: 35px; font-size: 1.2rem;">
                                    <i class="bi bi-funnel"></i>
                                </div>
                                When is IVF needed?
                            </button>
                        </h2>
                        <div id="collapseTwoTop" class="accordion-collapse collapse" aria-labelledby="headingTwoTop" data-bs-parent="#faqAccordionTop">
                            <div class="accordion-body text-muted bg-white border mt-2 rounded">
                                Broadly IVF is required for male factor infertility from azoospermia and various female factor infertility conditions like diminished ovarian reserve, defect in fallopian tubes etc.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border-0 mb-3 bg-transparent">
                        <h2 class="accordion-header" id="headingThreeTop">
                            <button class="accordion-button collapsed rounded bg-white shadow-sm fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeTop" aria-expanded="false" aria-controls="collapseThreeTop">
                                <div class="bg-pink-subtle text-muted rounded-circle d-flex align-items-center justify-content-center me-3 icon-container" style="width: 35px; height: 35px; font-size: 1.2rem;">
                                    <i class="bi bi-droplet"></i>
                                </div>
                                Are there any risks to having a baby through IVF?
                            </button>
                        </h2>
                        <div id="collapseThreeTop" class="accordion-collapse collapse" aria-labelledby="headingThreeTop" data-bs-parent="#faqAccordionTop">
                            <div class="accordion-body text-muted bg-white border mt-2 rounded">
                                As such, there is no risk because of IVF procedures but there are few anecdotal reports of increased birth defect with IVF pregnancy.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img src="https://pearlfertilityandivf.com/images/700-783-1.png" alt="Pregnant woman and doctor" class="img-fluid" style="max-height: 500px;">
            </div>
        </div>
    </div>
</section>

<!-- Common Questions -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <h2 class="fw-bold text-center mb-2">Common Questions</h2>
        <div class="title-underline mx-auto mb-5"></div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="accordion accordion-flush" id="faqAccordionLeft">
                    
                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL1">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL1" aria-expanded="false" aria-controls="collapseL1">
                                How much time does the IVF procedure take?
                            </button>
                        </h2>
                        <div id="collapseL1" class="accordion-collapse collapse" aria-labelledby="headingL1" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                On average one cycle of IVF requires a 2-3 weeks period starting from the first day of the menstrual cycle.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL2">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL2" aria-expanded="false" aria-controls="collapseL2">
                                What is IUI?
                            </button>
                        </h2>
                        <div id="collapseL2" class="accordion-collapse collapse" aria-labelledby="headingL2" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                Intrauterine insemination is a procedure in which washed and concentrated sperms of the husband are deposited into the wife’s uterine cavity with the help of special IUI cannulae.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL3">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL3" aria-expanded="false" aria-controls="collapseL3">
                                What is the success rate after IUI?
                            </button>
                        </h2>
                        <div id="collapseL3" class="accordion-collapse collapse" aria-labelledby="headingL3" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                At the established IVF centre, the success rate is 15-20% after one IUI. Chances of successful pregnancy increase after repeat IUI cycles. On average, three IUI are advised.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL4">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL4" aria-expanded="false" aria-controls="collapseL4">
                                What is the cost of IUI?
                            </button>
                        </h2>
                        <div id="collapseL4" class="accordion-collapse collapse" aria-labelledby="headingL4" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                The cost of IUI is minimal and it depends upon various factors like the age of the mother etc. Kindly write to us at <a href="mailto:pearlfertilitynivf@gmail.com" class="text-pink">pearlfertilitynivf@gmail.com</a> or call us on <a href="tel:+919022920663" class="text-dark">+919022920663</a>.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL5">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL5" aria-expanded="false" aria-controls="collapseL5">
                                What is the cost of IVF?
                            </button>
                        </h2>
                        <div id="collapseL5" class="accordion-collapse collapse" aria-labelledby="headingL5" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                The cost of IVF depends upon multiple factors like age of mother, ovarian reserve, associated anomalies etc. Kindly write to us at <a href="mailto:pearlfertilitynivf@gmail.com" class="text-pink">pearlfertilitynivf@gmail.com</a> or call us on <a href="tel:+919022920663" class="text-dark">+919022920663</a>.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL6">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL6" aria-expanded="false" aria-controls="collapseL6">
                                What is ICSI?
                            </button>
                        </h2>
                        <div id="collapseL6" class="accordion-collapse collapse" aria-labelledby="headingL6" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                ICSI i.e. intra-cytoplasmic sperm injection is a technique for in vitro fertilization in which an individual sperm is injected into an egg cell with the help of a microscope.<br><br>
                                This technique has brought happiness into the lives of many childless couples. Most common people are not aware of this, but it is a well-established practice in hands of IVF experts. Most people do not understand the difference between IVF and ICSI. However, let me tell you that in ICSI individual sperm is injected into an egg while in IVF sperm is left into a Petri dish with egg to fertilize on their own.<br><br>
                                ICSI is very effective in cases of sperm factor infertility. Otherwise, IVF is as effective as ICSI at many leading IVF centres in the world.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL7">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL7" aria-expanded="false" aria-controls="collapseL7">
                                For how long, you can keep your frozen embryos?
                            </button>
                        </h2>
                        <div id="collapseL7" class="accordion-collapse collapse" aria-labelledby="headingL7" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                The standard storage period for embryos is up to 10 years but in many circumstances, it can be stored for a longer period.<br>
                                <ol class="mt-2">
                                <li>What is the PGT-A test? When it is necessary? – PGT-A, or pre-implantation genetic testing for aneuploidies, is a genetic test performed on embryos produced through IVF to find out various genetic defects.</li>
                                <li>What diet is advised for male with low sperm count?</li>
                                </ol>
                                You are advised to take various supplements like alpha-tocopherol, carnitine, Vitamin-C, Vitamin-E, Coenzyme-Q10 to improve sperm count and motility.<br><br>
                                Certain zinc-rich foods like barley, beans, meat do improve the quality and quantity of sperms. Eat a lot of vegetables, fresh fruits, and antioxidant-rich fruits to improve your sperms count.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL8">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL8" aria-expanded="false" aria-controls="collapseL8">
                                What diet is advised for women with IVF pregnancy?
                            </button>
                        </h2>
                        <div id="collapseL8" class="accordion-collapse collapse" aria-labelledby="headingL8" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                The standard storage period for embryos is up to 10 years but in many circumstances, it can be stored for a longer period.<br>
                                <ol class="mt-2">
                                <li>What is the PGT-A test? When it is necessary? – PGT-A, or pre-implantation genetic testing for aneuploidies, is a genetic test performed on embryos produced through IVF to find out various genetic defects.</li>
                                <li>What diet is advised for male with low sperm count?</li>
                                </ol>
                                You are advised to take various supplements like alpha-tocopherol, carnitine, Vitamin-C, Vitamin-E, Coenzyme-Q10 to improve sperm count and motility.<br><br>
                                Certain zinc-rich foods like barley, beans, meat do improve the quality and quantity of sperms. Eat a lot of vegetables, fresh fruits, and antioxidant-rich fruits to improve your sperms count.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingL9">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL9" aria-expanded="false" aria-controls="collapseL9">
                                What is surrogacy? Where it is required
                            </button>
                        </h2>
                        <div id="collapseL9" class="accordion-collapse collapse" aria-labelledby="headingL9" data-bs-parent="#faqAccordionLeft">
                            <div class="accordion-body text-muted px-4">
                                Surrogacy is a method of artificial reproduction where the eggs of the mother are fertilized with sperm of the father, thus the formed embryo is transferred into the uterus of another woman, who carries and cares for the baby for the entire period. The main indications of surrogacy are absence or abnormality of the uterus, medical condition preventing mother to become pregnant, repeated IVF failures etc.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="accordion accordion-flush" id="faqAccordionRight">
                    
                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR1">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR1" aria-expanded="false" aria-controls="collapseR1">
                                What is treatment available for low sperm count?
                            </button>
                        </h2>
                        <div id="collapseR1" class="accordion-collapse collapse" aria-labelledby="headingR1" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                Supplements like alpha-tocopherol, carnitine, Vitamin-C, Vitamin-E, Coenzyme-Q10 helps to improve sperm count and motility. Along with these supplements, lifestyle modification does help to improve counts. Apart from this, ICSI and IVF help to get over low sperm count.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR2">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR2" aria-expanded="false" aria-controls="collapseR2">
                                What are the options available if a women’s own egg is not capable of producing pregnancy?
                            </button>
                        </h2>
                        <div id="collapseR2" class="accordion-collapse collapse" aria-labelledby="headingR2" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                Egg donation is an option with repeated failures with women’s own egg.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR3">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR3" aria-expanded="false" aria-controls="collapseR3">
                                How soon can out of town patient’s travel back home after IVF treatment?
                            </button>
                        </h2>
                        <div id="collapseR3" class="accordion-collapse collapse" aria-labelledby="headingR3" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                On average one IVF cycle takes 2-3 weeks. If frozen embryo transfer is planned, a couple can travel back to their home town after ovum pickup, mostly after a few hours of observation in the hospital
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR4">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR4" aria-expanded="false" aria-controls="collapseR4">
                                What if women are not capable of carrying pregnancy?
                            </button>
                        </h2>
                        <div id="collapseR4" class="accordion-collapse collapse" aria-labelledby="headingR4" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                If women are incapable of carrying the pregnancy, a surrogacy option is available to them.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR5">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR5" aria-expanded="false" aria-controls="collapseR5">
                                What are the chances of pregnancy with frozen embryos or frozen eggs?
                            </button>
                        </h2>
                        <div id="collapseR5" class="accordion-collapse collapse" aria-labelledby="headingR5" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                There is no significant difference between fresh and frozen embryo transfer. Frozen embryo transfer give 55-60% chances of successful pregnancy after one cycle.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR6">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR6" aria-expanded="false" aria-controls="collapseR6">
                                Are IVF injections painful?
                            </button>
                        </h2>
                        <div id="collapseR6" class="accordion-collapse collapse" aria-labelledby="headingR6" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                Yes, like any other IM injection, these injections also cause some pain, induration and redness at the injection site.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded mb-3">
                        <h2 class="accordion-header" id="headingR7">
                            <button class="accordion-button collapsed fw-bold text-dark px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR7" aria-expanded="false" aria-controls="collapseR7">
                                Is ovum pick up a painful procedure?
                            </button>
                        </h2>
                        <div id="collapseR7" class="accordion-collapse collapse" aria-labelledby="headingR7" data-bs-parent="#faqAccordionRight">
                            <div class="accordion-body text-muted px-4">
                                Ovum picks up also called egg retrieval is done under sedation or general anaesthesia. Doesn’t cause significant pain.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div class="text-center mt-5 mb-3">
            <p class="text-muted mb-4">If you could not find an answer to your query, please contact us.</p>
            <a href="{{ route('frontend.contacts') }}" class="btn cta-btn">RAISE A QUERY</a>
        </div>
    </div>
</section>

<style>
.text-pink {
    color: #e83e8c !important;
}
.bg-pink {
    background-color: #e83e8c !important;
}
.bg-pink-subtle {
    background-color: #fdf5f8 !important;
}
/* Style adjustments for accordion icons */
#faqAccordionTop .accordion-button::after {
    background-size: 1rem;
    transition: all 0.3s;
}
#faqAccordionTop .accordion-button:not(.collapsed) .icon-container {
    background-color: #e83e8c !important;
    color: white !important;
}
.accordion-button:focus {
    box-shadow: none;
    border-color: rgba(0,0,0,.125);
}
.accordion-button:not(.collapsed) {
    color: #e83e8c;
    background-color: transparent;
    box-shadow: none;
}
.title-underline {
    width: 50px;
    height: 3px;
    background-color: #e83e8c;
}
.cta-btn {
    background-color: #ff007f;
    border: none;
    color: white;
    font-weight: bold;
    padding: 12px 30px;
    border-radius: 5px;
    transition: all 0.3s;
}
.cta-btn:hover {
    background-color: #d10068;
    color: white;
}
</style>

@endsection