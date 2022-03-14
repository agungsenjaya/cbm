@if(Route::currentRouteName() == 'index')
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-cbm">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('img/cbm-white.svg') }}" alt="" width="200">
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list text-white h2"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-top-home">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('project') }}">Proyek Pengecatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
          <span class="d-none d-md-block">
            <a class="btn btn-scs" href="{{ route('contact') }}"><span class="text-cbm">Hubungi Kami</span></a>
          </span>
          <span class="d-md-none d-block">
            <a class="nav-link text-white" href="{{ route('contact') }}">Hubungi Kami</a>
          </span>
          </li>
      </ul>
    </div>
  </div>
</nav>
</header>
@else
<header class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('img/logo.png') }}" alt="" width="200">
    </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-list h2"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-top">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('index') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('project') }}">Proyek Pengecatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="nav-item">
        <span class="d-none d-md-block">
            <a class="btn btn-scs" href="{{ route('contact') }}"><span class="text-cbm">Hubungi Kami</span></a>
          </span>
          <span class="d-md-none d-block">
            <a class="nav-link text-cbm" href="{{ route('contact') }}">Hubungi Kami</a>
          </span>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
@endif
