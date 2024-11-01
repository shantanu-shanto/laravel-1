<!-- Footer Section -->
<footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Quick Links -->
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-white">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-white">Services</a></li>
                    <li><a href="{{ route('projects') }}" class="text-white">Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <h5>Our Services</h5>
                <ul class="list-unstyled">
                    <li>Residential Construction</li>
                    <li>Commercial Construction</li>
                    <li>Renovation & Remodeling</li>
                    <li>Project Management</li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <h5>Follow Us</h5>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <h5>Contact Us</h5>
                <p>123 Main Street, Cityville, Country</p>
                <p>Phone: +123-456-7890</p>
                <p>Email: contact@yourcompany.com</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="400">
            <p class="mb-0">© {{ date('Y') }} Your Construction Company. All Rights Reserved.</p>
        </div>
    </div>
</footer>
