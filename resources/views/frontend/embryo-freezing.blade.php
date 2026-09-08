@extends('frontend.layouts.master')

@section('content')

    <!-- Page Banner -->
    <section class="page-banner"
        style="background-image: url('{{ asset('assets/images/bg3.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 75, 120, 0.7);">
        </div>
        <div class="container position-relative text-white">
            <h1 class="fw-bold display-5 mb-2">Embryo Freezing</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}"
                            class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">Embryo Freezing</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0 pe-lg-5">
                    <h3 class="fw-bold text-dark mb-4">What is embryo freezing?</h3>
                    <p class="text-muted lh-lg mb-4">Embryo freezing is a procedure where embryos are frozen and stored at
                        very low temperature usually with the help of liquid nitrogen for later use.</p>

                    <h5 class="fw-bold text-dark mb-3">Why we have to freeze embryos?</h5>
                    <p class="text-muted lh-lg mb-4">We need to freeze embryos for various reasons like if someone is
                        planning pregnancy at later stage or if patient. Sometimes they are frozen when there is expected
                        damage to ovaries like after cancer treatment.</p>

                    <h5 class="fw-bold text-dark mb-3">How embryos are frozen?</h5>
                    <p class="text-muted lh-lg mb-4">The embryos first go through cryopreservation process followed by
                        vitrification. Vitrification process preserves the embryo without forming damaging ice crystals.
                        Finally embryos are stored in liquid nitrogen in special cylinders.</p>

                    <h5 class="fw-bold text-dark mb-3">How long we can store frozen embryos?</h5>
                    <p class="text-muted lh-lg mb-4">Embryos can be frozen and stored for many years. On an average embryos
                        are stored for 10 years, but they can be stored even longer.</p>

                    <h5 class="fw-bold text-dark mb-3">What is cost of embryo freezing?</h5>
                    <p class="text-muted lh-lg mb-4">Cost of embryo freezing varies from center to center. For further
                        queries, please write to us on <a href="mailto:[EMAIL_ADDRESS]"
                            class="text-pink text-decoration-none">pearlfertilityandivf@gmail.com</a> or send enquiry on <a
                            href="https://www.pearlfertilityandivf.com" class="text-pink text-decoration-none"
                            target="_blank">www.pearlfertilityandivf.com</a></p>

                    <h5 class="fw-bold text-dark mb-3">Does freezing increases risk of congenital defect in babies?</h3>
                        <p class="text-muted lh-lg mb-0">No, freezing doesn’t increase risk of birth defect or risk of
                            abortion.</p>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="{{ asset('web-page-images/oocyte-freezing-img.jpg') }}"
                        class="img-fluid rounded shadow-sm w-100" style="object-fit: cover;" alt="Embryo Freezing">
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

        .border-pink {
            border-color: #e83e8c !important;
        }
    </style>

@endsection