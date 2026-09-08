@extends('frontend.layouts.master')

@section('content')

<!-- Page Banner -->
<section class="page-banner" style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);"></div>
    <div class="container position-relative text-white">
        <h1 class="fw-bold display-5 mb-2">Donor Embryo</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}" class="text-white text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Donor Embryo</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-muted lh-lg mb-4">
                    Embryo donation involves couples who have undergone in vitro fertilization (IVF) and have remaining embryos that they choose to donate to another individual or couple for reproductive purposes. Here's an overview:
                </p>

                <h5 class="fw-bold text-dark mb-3">What is Embryo Donation?</h5>
                <p class="text-muted lh-lg mb-4">
                    Embryo donation occurs when a couple who have undergone IVF and have completed their family donate their remaining embryos to another individual or couple who are unable to conceive on their own.
                </p>

                <h5 class="fw-bold text-dark mb-3">How Does it Work?</h5>
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">Embryo Creation:</span> Initially, the embryos are created through IVF using the eggs and sperm of the donating couple.<br>
                    <span class="fw-bold text-dark">Embryo Freezing:</span> After fertilization, the resulting embryos are typically cryopreserved (frozen) for future use.<br>
                    <span class="fw-bold text-dark">Donation Process:</span> Once the donating couple decides to donate their embryos, they go through a legal and ethical process to make the donation.<br>
                    <span class="fw-bold text-dark">Matching:</span> The donating couple may choose to donate embryos anonymously through a fertility clinic or work with a known recipient.<br>
                    <span class="fw-bold text-dark">Recipient Preparation:</span> The recipient individual or couple typically undergoes medical and psychological screening to ensure they are suitable candidates for embryo transfer.<br>
                    <span class="fw-bold text-dark">Embryo Transfer:</span> Once the recipient is cleared, the embryos are thawed, and one or more embryos are transferred to the recipient's uterus through a procedure similar to IVF.
                </p>

                <h5 class="fw-bold text-dark mb-3">Considerations:</h5>
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">Legal and Ethical Issues:</span> Embryo donation involves complex legal and ethical considerations, including parental rights, consent, and privacy.<br>
                    <span class="fw-bold text-dark">Medical Screening:</span> Both the donors and recipients may undergo medical screening to assess their health and potential risks associated with the donation and transfer process.<br>
                    <span class="fw-bold text-dark">Emotional Impact:</span> Embryo donation can have emotional implications for both the donating and receiving parties, as it involves decisions about family building, genetics, and parenting.
                </p>

                <h5 class="fw-bold text-dark mb-3">Benefits:</h5>
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">Alternative to Adoption:</span> For individuals or couples who are unable to conceive using their own gametes, embryo donation provides an alternative route to parenthood.<br>
                    <span class="fw-bold text-dark">Genetic Connection:</span> Embryo donation allows recipients to have a genetic connection to their child, as the child is biologically related to the donating couple.
                </p>

                <h5 class="fw-bold text-dark mb-3">Challenges:</h5>
                <p class="text-muted lh-lg mb-4">
                    <span class="fw-bold text-dark">Availability:</span> The availability of donated embryos may vary depending on the region and the demand for embryo donation.<br>
                    <span class="fw-bold text-dark">Cost:</span> While embryo donation may be less expensive than traditional IVF, it still incurs costs associated with medical procedures, screening, and legal processes.<br>
                    <span class="fw-bold text-dark">Emotional Considerations:</span> Both donors and recipients may experience emotional challenges throughout the process, including grief, attachment, and identity issues.
                </p>

                <p class="text-muted lh-lg mb-0">
                    Embryo donation can offer hope to individuals or couples struggling with infertility, providing them with an opportunity to build a family using donated embryos. However, it's important for all parties involved to carefully consider the medical, legal, and emotional aspects of embryo donation before proceeding.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection