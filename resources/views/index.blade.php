@extends('layouts.app')

@section('content')

<!-- Hero Section -->
@include('layouts.hero')

<!-- Services Overview Section -->
<section id="services-overview" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/service1.jpg') }}" class="card-img-bottom" alt="Service 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Construction Management</h5>
                        <p class="card-text">Ensuring every detail meets our high standards from start to finish.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card custom-card">
                    <img src="{{ asset('images/design-1.jpg') }}" class="card-img-bottom" alt="Service 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Architectural Design</h5>
                        <p class="card-text">Crafting visually compelling designs that meet your unique vision.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card custom-card">
                    <img src="{{ asset('images/contract-1.jpg') }}" class="card-img-bottom" alt="Service 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">General Contracting</h5>
                        <p class="card-text">Delivering on schedule and on budget with experienced teams.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Our Projects</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/con-3.jpg') }}" class="card-img-top" alt="Project 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Residential Complex</h5>
                        <p class="card-text">A modern living space project tailored for comfort.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card custom-card">
                    <img src="{{ asset('images/chub-1.jpg') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Commercial Hub</h5>
                        <p class="card-text">A business center designed for productivity and innovation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card custom-card">
                    <img src="{{ asset('images/cons-1.jpg') }}" class="card-img-top" alt="Project 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Industrial Park</h5>
                        <p class="card-text">Creating efficient spaces to optimize industrial operations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Why Choose Us</h2>
        <div class="row">
            <div class="col-md-4 text-center" data-aos="fade-up">
                <div class="feature-icon mb-3">
                    <i class="fas fa-tools fa-2x"></i>
                </div>
                <h5>Experienced Team</h5>
                <p>Our team has decades of experience in managing complex projects.</p>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-icon mb-3">
                    <i class="fas fa-clock fa-2x"></i>
                </div>
                <h5>On-Time Completion</h5>
                <p>We prioritize timely completion while maintaining quality standards.</p>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon mb-3">
                    <i class="fas fa-thumbs-up fa-2x"></i>
                </div>
                <h5>Customer Satisfaction</h5>
                <p>Our goal is to exceed expectations and build lasting relationships.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">"The construction team delivered beyond our expectations. Highly recommended!"</p>
                        <h6 class="card-subtitle mt-3 text-muted">- John D.</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">"Exceptional service and attention to detail. Will work with them again."</p>
                        <h6 class="card-subtitle mt-3 text-muted">- Sarah K.</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">"The project was completed on time and within budget. Excellent work!"</p>
                        <h6 class="card-subtitle mt-3 text-muted">- Mike R.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Button Section -->
<section id="contact-call-to-action" class="py-5 text-center" data-aos="fade-up">
    <div class="container">
        <h2>Ready to Start Your Project?</h2>
        <p>Contact us today to discuss your construction needs and receive a free quote.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
</section>

@endsection


