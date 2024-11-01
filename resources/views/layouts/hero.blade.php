<section id="hero-carousel">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1000">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url('{{ asset('images/cons-6.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
                <div class="carousel-container">
                    <div class="container text-center">
                        <h2 class="animate__animated animate__fadeInDown" style="color: #fff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Building the Future</h2>
                        <p class="animate__animated animate__fadeInUp text-white-50">Reliable, high-quality construction services for your projects.</p>
                        <a href="{{ url('/services') }}" class="btn btn-primary animate__animated animate__fadeInUp">Our Services</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/cons-4.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
                <div class="carousel-container">
                    <div class="container text-center">
                        <h2 class="animate__animated animate__fadeInDown" style="color: #fff; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Quality That Stands</h2>
                        <p class="animate__animated animate__fadeInUp text-white-50">Delivering excellence in every project, big or small.</p>
                        <a href="{{ url('/projects') }}" class="btn btn-success animate__animated animate__fadeInUp">View Projects</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url('{{ asset('images/cons-1.jpg') }}'); height: 100vh; background-size: cover; background-position: center;">
                <div class="carousel-container">
                    <div class="container text-center">
                        <h2 class="animate__animated animate__fadeInDown" style="color: #f8d210; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">Built on Trust</h2>
                        <p class="animate__animated animate__fadeInUp text-white-50">Your trusted partner for construction and renovation.</p>
                        <a href="{{ url('/contact') }}" class="btn btn-warning animate__animated animate__fadeInUp">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section>
