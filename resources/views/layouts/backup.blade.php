    <section class="space-m">
      <div class="container-lg">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-6 text-center">
            <!-- Preheading -->
            <h6 class="text-uppercase text-sec mb-3">
              cara order pengecatan
            </h6>

            <!-- Heading -->
            <h2 class=" mb-5 text-capitalize fw-bold text-cbm title-1">
              Bagaimana cara menggunakan jasa <span class="text-underline-warning">pengecatan CBM</span>
            </h2>

          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-12">

            <!-- Timeline -->
            <ol class="timeline timeline-expand-lg timeline-warning mb-0">
              <li class="timeline-item active">

                <!-- Heading -->
                <h3 class="">
                  Konsultasi
                </h3>

                <!-- Text -->
                <p class="text-muted mb-4">
                  Silahkan konsultasi secara online dengan admin, seperti apa bidang yang akan dicat.
                </p>


              </li>
              <li class="timeline-item active">

                <!-- Heading -->
                <h3 class="">
                  Survey
                </h3>

                <!-- Text -->
                <p class="text-muted mb-4">
                  Jika lolos verifikasi data team kami akan melakukan survey ke lokasi pengecatan.
                </p>


              </li>
              <li class="timeline-item active">

                <!-- Heading -->
                <h3 class="">
                  Pengecatan
                </h3>

                <!-- Text -->
                <p class="text-muted mb-4">
                  Pengecatan akan dikerjakan setelah ada kesepakatan antara kedua belah pihak
                </p>


              </li>
            </ol>

          </div>
        </div>
      </div>
    </section>




    <section class="space-m">
  <div class="container">
  <div class="row align-items-center justify-content-between">
      <div class="col-md-6 col-lg-5 align-self-center">
      <h6 class="text-uppercase text-sec mb-3">
              Tentang Kami
            </h6>
            <h2 class="mb-4  fw-bold">
              Central Bangun Mandiri
            </h2>
            <p>
            Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan.
            </p>
            <a href="" class="btn btn-scs">Tentang Kami</a>
      </div>
      <div class="col-md-5 col-lg-6">
        <img class="img-fluid mb-4 mb-sm-0" src="https://dummyimage.com/600x500" alt="...">
      </div>
    </div>
  </div>
</section>




<section class="space-m bg-light">
  <div class="container">
    <div class="d-flex justify-content-between">
    <div>
      <h6 class="text-uppercase text-sec mb-3">
        Proyek pengecatan
      </h6>
      <h2 class="mb-4  fw-bold">
        Pengecatan Terbaru
      </h2>
    </div>
    <div class="align-self-center">
      <a href="">Proyek Lainnya</a>
    </div>
    </div>
  <div class="position-relative">
  <div class="swiper slider-2">
      <div class="swiper-wrapper">
      @foreach($project->take(8)->reverse() as $pro)
        <div class="swiper-slide">
          <a href="{{ route('project.view',['id' => $pro -> slug]) }}">
            <img src="https://dummyimage.com/600x400" class="img-fluid" alt="{{ $pro->slug }}">
          </a>
        </div>
        @endforeach
      </div>
    </div>


    <div class="to-left d-flex align-items-center h-100 z-in-1">
          <div class="btn-icon m-1 prev-1 bg-cbm text-center hvr-input">
            <i class="bi bi-chevron-compact-left text-white"></i>
          </div>
        </div>
        <div class="to-right d-flex align-items-center h-100 z-in-1">
          <div class="btn-icon m-1 next-1 bg-cbm text-center hvr-input">
            <i class="bi bi-chevron-compact-right text-white"></i>
          </div>
        </div>
        </div>

  </div>
</section>





<section class="space-m ">
  <div class="container">
            <h6 class="text-uppercase text-sec mb-3">
              Jasa Pengecatan kami
            </h6>
            <h2 class="mb-4  fw-bold">
              Layanan Pengecatan
            </h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  <a href="" class="col text-dark no-dec">
    <div class="card h-100 border-0 shadow-sm rounded-0">
      <img src="https://dummyimage.com/600x400" class="card-img-top rounded-0" alt="...">
    </div>
  </a>
  
</div>

            </div>
  </section>




  <section class="">
  <div class="container">
    <h6 class="text-uppercase text-sec mb-0">Partner produk cbm</h6>
  <div class="row">
  <div class="col-md-12">
  <div class="swiper slider-4  text-center">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/Spectrum.png') }}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/KemTone.png') }}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/ColorTone.png') }}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/Sterling-Powder.png') }}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/Vinotex.png') }}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/Epotone.png') }}" alt="" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('img/logo/Noroo.png') }}" alt="" width="100%">
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>

</section>