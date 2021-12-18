<!-- <div class="py-3 bg-dark text-center text-white">
  <div class="container">
    Jasa pengecatan bergaransi, <a href="" class="text-cbm fw-semibold">Melayani pengecatan seluruh nusantara</a>
  </div>
</div> -->
<header class="">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('img/logo.png') }}" alt="" width="250">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-top">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('project') }}">Proyek Pengecatan</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layanan<i class="ms-1 bi bi-chevron-down small"></i> 
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0 mt-3">
                <div class="list-group list-group-flush">
                    <a href="sections.html" class="list-group-item rounded-top list-group-item-action" role="button">
                      <div class="media d-flex align-items-center">
                        <i class="bi bi-building me-3 h5"></i>
                        <div class="media-body ml-3">
                          <h6 class="mb-1">Explore all sections</h6>
                          <p class="mb-0">Awesome section examples for any scenario.</p>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                  <div class="row">
                    <div class="col-sm-4">
                      <a href="sections.html#headers" class="dropdown-item">Headers</a>
                      <a href="sections.html#footers" class="dropdown-item">Footers</a>
                      <a href="sections.html#blog" class="dropdown-item">Blog</a>
                      <a href="sections.html#call-to-action" class="dropdown-item">Call to action</a>
                      <a href="sections.html#clients" class="dropdown-item">Clients</a>
                      <a href="sections.html#collapse" class="dropdown-item">Collapse</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="sections.html#covers" class="dropdown-item">Covers</a>
                      <a href="sections.html#features" class="dropdown-item">Features</a>
                      <a href="sections.html#milestone" class="dropdown-item">Milestone</a>
                      <a href="sections.html#pricing" class="dropdown-item">Pricing</a>
                      <a href="sections.html#projects" class="dropdown-item">Projects</a>
                      <a href="sections.html#subscribe" class="dropdown-item">Subscribe</a>
                    </div>
                    <div class="col-sm-4">
                      <a href="sections.html#swiper" class="dropdown-item">Swiper</a>
                      <a href="sections.html#tables" class="dropdown-item">Tables</a>
                      <a href="sections.html#team" class="dropdown-item">Team</a>
                      <a href="sections.html#testimonials" class="dropdown-item">Testimonials</a>
                      <a href="sections.html#video" class="dropdown-item">Video</a>
                    </div>
                  </div>
                </div>
                <div class="delimiter-top py-3 px-4">
                  <span class="badge badge-soft-success">Yaass!</span>
                  <p class="mt-2 mb-0">
                    Explore, switch, customize any component, section or page and make your website rich its full potential.
                  </p>
                </div>
              </div>
          
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Artikel</a>
        </li>
        <!-- <li class="nav-item">
          <a class="btn btn-cbm text-white" href="#">Hubungi Kami</a>
        </li> -->
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-top">
        <li class="nav-item">
          <a class="btn btn-cbm text-white" href="{{ route('contact') }}">Hubungi Kami</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>