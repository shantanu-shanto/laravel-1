@extends('layouts.app')

@section('content')
<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container">
        <h2 class="display-5 text-center" data-aos="fade-up">Our Services</h2>
        <p class="lead text-center mb-5" data-aos="fade-up" data-aos-delay="200">We provide a range of top-quality construction services tailored to meet your needs.</p>
        
        <!-- Services Cards -->
        <div class="row text-center">
            <!-- Service 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/Residential Complex.jpg') }}" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Residential Construction</h5>
                        <p class="card-text">Building beautiful homes with exceptional quality and craftsmanship. From design to completion, we handle every aspect of residential projects.</p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/Commercial Office.jpg') }}" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Commercial Construction</h5>
                        <p class="card-text">Delivering large-scale commercial projects with precision and efficiency, including office buildings, retail spaces, and warehouses.</p>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/renovation.jpg') }}" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Renovations & Remodeling</h5>
                        <p class="card-text">Transform your existing space into something extraordinary. Our renovation services cover both residential and commercial properties.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <!-- Service 4 -->
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/project-1.jpg') }}" class="card-img-top" alt="Service 4">
                    <div class="card-body">
                        <h5 class="card-title">Project Management</h5>
                        <p class="card-text">Expert project management services to ensure your construction project is completed on time, within budget, and to the highest standards.</p>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/inti-2.jpg') }}" class="card-img-top" alt="Service 5">
                    <div class="card-body">
                        <h5 class="card-title">Interior Design</h5>
                        <p class="card-text">Our interior design services bring creative and practical solutions to your residential or commercial spaces, enhancing functionality and aesthetics.</p>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-4 mb-4" data-aos="fade-left">
                <div class="card shadow-sm">
                    <img src="{{ asset('images/landscaping.jpg') }}" class="card-img-top" alt="Service 6">
                    <div class="card-body">
                        <h5 class="card-title">Landscaping</h5>
                        <p class="card-text">Enhance the beauty of your outdoor spaces with our landscaping services, which combine nature and design to create stunning environments.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
