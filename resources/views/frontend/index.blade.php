@extends('frontend.layouts.master')

@section('content')
<div class="container-fluid bg-light py-5">
    <div class="row align-items-center justify-content-center min-vh-50" style="min-height: 50vh;">
        <div class="col-md-8 text-center">
            <h1 class="display-4 fw-bold mb-4 text-dark">Welcome to Pearl Fertility and IVF</h1>
            <p class="lead mb-5 text-muted">Your journey to parenthood begins here. We offer state-of-the-art facilities and personalized care to help you build your family.</p>
            <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-sm">Explore Our Treatments</a>
        </div>
    </div>
</div>

<div class="container py-5 mt-5">
    <div class="row text-center mb-5">
        <div class="col">
            <h2 class="fw-bold">Why Choose Us?</h2>
            <p class="text-muted">We combine expertise, technology, and compassion.</p>
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <div class="card-body">
                    <div class="mb-3">
                        <span class="fs-1 text-primary">👨‍⚕️</span>
                    </div>
                    <h5 class="card-title fw-bold">Expert Specialists</h5>
                    <p class="card-text text-muted">Our team of experienced doctors and embryologists are dedicated to your success.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <div class="card-body">
                    <div class="mb-3">
                        <span class="fs-1 text-primary">🏥</span>
                    </div>
                    <h5 class="card-title fw-bold">Advanced Technology</h5>
                    <p class="card-text text-muted">We use the latest IVF and reproductive technologies to maximize your chances.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4">
                <div class="card-body">
                    <div class="mb-3">
                        <span class="fs-1 text-primary">❤️</span>
                    </div>
                    <h5 class="card-title fw-bold">Compassionate Care</h5>
                    <p class="card-text text-muted">We understand the emotional journey and are here to support you every step of the way.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
