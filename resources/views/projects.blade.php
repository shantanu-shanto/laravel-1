@extends('layouts.app')

@section('content')
<!-- Projects Section -->
<section id="projects" class="py-5">
    <div class="container">
        <h2 class="display-5 text-center" data-aos="fade-up">Our Projects</h2>
        <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="200">Take a look at some of our recent projects showcasing our expertise in construction and design.</p>
        
        <!-- Projects Cards -->
        <div class="row text-center">
            <!-- Project 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/Luxury Hotel.jpg') }}" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Villa</h5>
                        <p class="card-text">A stunning luxury villa built with modern architecture and innovative design elements, located in the heart of the city.</p>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/Commercial Office.jpg') }}" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Office Complex</h5>
                        <p class="card-text">A state-of-the-art office complex providing functional workspace with a focus on sustainability and energy efficiency.</p>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/Residential Complex.jpg') }}" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Residential Apartment</h5>
                        <p class="card-text">A beautifully designed apartment complex featuring spacious interiors, contemporary design, and a luxurious lifestyle.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <!-- Project 4 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/mall.jpg') }}" class="card-img-top" alt="Project 4">
                    <div class="card-body">
                        <h5 class="card-title">Retail Mall</h5>
                        <p class="card-text">A large-scale retail mall with innovative spaces and world-class amenities, designed to provide an exceptional shopping experience.</p>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/industrial park.jpg') }}" class="card-img-top" alt="Project 5">
                    <div class="card-body">
                        <h5 class="card-title">Industrial Park</h5>
                        <p class="card-text">A modern industrial park offering scalable spaces for manufacturing, logistics, and research facilities.</p>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/Urban Infrastructure.jpg') }}" class="card-img-top" alt="Project 6">
                    <div class="card-body">
                        <h5 class="card-title">Urban Park</h5>
                        <p class="card-text">An urban park project that integrates natural elements with modern amenities to provide a relaxing environment in a busy city.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
