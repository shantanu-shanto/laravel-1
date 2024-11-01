<nav class="navbar navbar-expand-lg custom-navbar" data-aos="fade-down">
    <div class="container-fluid">
      <a class="navbar-brand custom-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/conlogo.jpg') }}" alt="Fashion Store Logo" style="height: 100px;">
        
         Construction Co.
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active custom-nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="{{ url('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="{{ url('services') }}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="{{ url('projects') }}">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link custom-nav-link" href="{{ url('contact') }}">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn custom-btn" type="submit">Get a Quote</button>
        </form>
      </div>
    </div>
  </nav>
  
  