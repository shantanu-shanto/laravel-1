@extends('layouts.app')

@section('content')

<!-- Page Header Section -->
<section id="about-header" class="py-5 text-center text-white" style="background: url('{{ asset('images/team-2.jpg') }}') no-repeat center center; background-size: cover;" data-aos="fade-down">
    <div class="container">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Building the Future with Passion and Precision</p>
    </div>
</section>

<!-- Our Story Section -->
<section id="our-story" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Our Story</h2>
        <div class="row">
            <div class="col-md-6">
                <p>Founded in [Year], our company has dedicated itself to delivering outstanding construction projects for clients across [Region/Country]. Our team of experienced architects, engineers, and builders work together to transform ideas into reality, ensuring each project meets the highest standards of quality and durability.</p>
            </div>
            <div class="col-md-6">
                <p>We believe in innovation and sustainability, incorporating eco-friendly materials and cutting-edge technology in our projects. Over the years, we have built strong partnerships and a reputation for reliability, making us one of the most trusted names in the construction industry.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section id="our-values" class="py-5 bg-light" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <h2 class="text-center mb-5">Our Core Values</h2>
        <div class="row">
            <div class="col-md-4 text-center" data-aos="fade-up">
                <i class="fas fa-balance-scale fa-2x mb-3"></i>
                <h5>Integrity</h5>
                <p>We adhere to the highest ethical standards, delivering on our promises and fostering trust with our clients and partners.</p>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-handshake fa-2x mb-3"></i>
                <h5>Commitment</h5>
                <p>Our commitment to quality and customer satisfaction drives us to go the extra mile on every project.</p>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-leaf fa-2x mb-3"></i>
                <h5>Sustainability</h5>
                <p>We focus on sustainable practices, aiming to minimize our environmental impact with every project we undertake.</p>
            </div>
        </div>
    </div>
</section>

<!-- Meet the Team Section -->
<section id="team" class="py-5" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <img src="{{ asset('images/ceo.jpg') }}" class="card-img-bottom" alt="Team Member 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">CEO & Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card custom-card">
                    <img src="{{ asset('images/team4.jpg') }}" class="card-img-bottom" alt="Team Member 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jane Smith</h5>
                        <p class="card-text">Head of Architecture</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card custom-card">
                    <img src="{{ asset('images/support-1.jpg') }}" class="card-img-bottom" alt="Team Member 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Michael Brown</h5>
                        <p class="card-text">Project Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5">Client Testimonials</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">"They delivered our project on time and exceeded our expectations. The quality and attention to detail were impeccable."</p>
                        <h6 class="card-subtitle mt-3 text-muted">- Alex T.</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">"Working with this team was a pleasure. They were professional, reliable, and dedicated to achieving the best results."</p>
                        <h6 class="card-subtitle mt-3 text-muted">- Emma W.</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card custom-card">
                    <div class="card-body">
                        <p class="card-text">"Their commitment to sustainability and innovation makes them a standout in the industry. Highly recommend!"</p>
                        <h6 class="card-subtitle mt-3 text-muted">- Brian C.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section id="contact-call-to-action" class="py-5 text-center" data-aos="fade-up">
    <div class="container">
        <h2>Ready to Work With Us?</h2>
        <p>Contact us today to discuss your project requirements and get started.</p>
        <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
    </div>
</section>

@endsection
