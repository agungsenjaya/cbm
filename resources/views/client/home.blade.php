@extends('layouts.index')
@section('content')
<div class="position-relative">
<div class="swiper slider-1">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="d-none d-sm-block">
        <img src="{{ asset('img/slider/slide-1.jpg') }}" alt="" width="100%" class="">
      </div>
      <div class="d-sm-none d-block">
        <img src="{{ asset('img/slider/slide-1-m.jpg') }}" alt="" width="100%" class="">
      </div>
    </div>
    <div class="swiper-slide">
    <div class="d-none d-sm-block">
        <img src="{{ asset('img/slider/slide-3.jpg') }}" alt="" width="100%" class="">
      </div>
      <div class="d-sm-none d-block">
        <img src="{{ asset('img/slider/slide-3-m.jpg') }}" alt="" width="100%" class="">
      </div>
    </div>
    
    
  </div>
</div>
<div class="grad-1 to-center z-in-1"></div>

<div class="to-center d-flex align-items-center text-white">
  <div class="container">
  <div class="row">
  <div class="col-md-8">

<div class="swiper slider-2">
  <div class="swiper-wrapper">
    <div class="swiper-slide">

          <h4 class="display-4 title-1">Pengecatan interior dan exterior dinding rumah</h4>
          <div class="row">
            <div class="col-md-8">
              <p class="lead">Ganti warna cat rumah anda bersama kami, banyak rekomendasi warna baru.</p>
            </div>
          </div>
          <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="btn btn-scs">Detail Info</a>
    </div>
    <div class="swiper-slide">

          <h4 class="display-4 title-1">Layanan pengecatan waterproofing anti bocor</h4>
          <div class="row">
            <div class="col-md-8">
          <p class="lead">Hilangkan bocor pada atap rumah atau tembok rumah yang rembes air.</p>
          </div>
          </div>
          <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="btn btn-scs">Detail Info</a>
    </div>
    
  </div>
  </div>
</div>
</div>
</div>
</div>
<div class="to-bottom z-in-1 mb-4">
  <div class="container">
    <div class="d-flex justify-content-between">
      <div class="d-flex">
      <div class="hvr-input me-4 prev">
        <img src="{{ asset('img/icon_arrow_r.png') }}" alt="" width="50" class="flip-1">
      </div>
      <div class="hvr-input next">
        <img src="{{ asset('img/icon_arrow_r.png') }}" alt="" width="50">
      </div>

      </div>
      <div>
      <div class="swiper-pagination position-static"></div>
      </div>
    </div>
    <hr class="bg-light opacity-100">
  </div>
</div>
</div>

<section class="space-m opacity-50 d-none d-sm-block">
  <div class="container">
    <!-- <h6 class="text-uppercase text-sec mb-0">Partner produk cbm</h6> -->
  <div class="row">
  <div class="col-md-12">
  <div class="swiper slider-4">
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

<section class="space-m">
  <div class="container">
  <div class="row align-items-center justify-content-between flex-column-reverse flex-lg-row">
      <div class="col-md-6 col-lg-5 align-self-center">
      <h6 class="text-uppercase text-sec mb-3">
              Tentang Kami
            </h6>
            <h2 class="mb-4 fw-bold title-1 text-cbm">
              Central Bangun Mandiri
            </h2>
            <p>
            Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan.
            </p>
            <a href="{{ route('contact') }}" class="btn btn-scs">Tentang Kami</a>
      </div>
      <div class="col-md-5 col-lg-6">
        <img class="img-fluid mb-4 mb-sm-0" src="{{ asset('img/about-1.jpg') }}" alt="...">
      </div>
    </div>
  </div>
</section>


    <section class="space-m bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h6 class="text-uppercase text-sec mb-3">
        Jasa Pengecatan kami
      </h6>
      <h2 class="mb-4 fw-bold title-1 text-cbm">
        Layanan Pengecatan
      </h2>
    </div>
            <div class="row">
            <div class="col-md-10 offset-md-1">
            <div class="row">
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-1.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Interior</p>
              </a>
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-2.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Exterior</p>
              </a>
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-3.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Lantai</p>
              </a>
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-4.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Genteng</p>
              </a>
            </div>
            <div class="row">
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-5.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Water Proofing</p>
              </a>
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-6.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Kolam</p>
              </a>
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-7.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Industri</p>
              </a>
              <a href="https://wa.me/6285720290848?text=Halo%20cbm%2C%20saya%20ingin%20menanyakan%20tentang%20pengecatan" target="_blank" class="col-md-3 col-6 mb-3 text-center">
                <img src="{{ asset('img/icon-8.svg') }}" alt="" class="icon-res-1" width="50%">
                <p class="mt-2 text-cbm">Pengecatan Lapangan</p>
              </a>
            </div>
            </div>
            </div>

            </div>
  </section>

  <section class="space-m">
      <div class="container-lg">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-5 col-lg-6">

            <!-- Image -->
            <div class="position-relative mb-10 mb-md-0">

              <!-- Image -->
                <img class="img-fluid mb-4 mb-sm-0" src="{{ asset('img/about-2.jpg') }}" alt="...">

            </div>


          </div>
          <div class="col-md-6 col-lg-5">

            <!-- Heading -->
            <h6 class="text-uppercase text-sec mb-3">
              Central bangun mandiri
            </h6>
            <h2 class="mb-4 fw-bold title-1 text-cbm">
              Keunggulan Pengecatan CBM
            </h2>
            <!-- Text -->
            <p>
              Cbm selalu memberikan yang terbaik untuk setiap proyek pengecatan yang dikerjakan
            </p>

            <!-- List -->
            <ul class="list-checked list-checked-primary">
              <li> <i class="bi bi-check-circle-fill text-scs me-2"></i>
                Waktu lebih effisien sesuai dengan kesepakatan
              </li>
              <li> <i class="bi bi-check-circle-fill text-scs me-2"></i>
                Dikerjakan oleh team profesional
              </li>
              <li> <i class="bi bi-check-circle-fill text-scs me-2"></i>
                Produk pilihan yang sangat terjangkau
              </li>
              <li> <i class="bi bi-check-circle-fill text-scs me-2"></i>
                Proyek pengecatan bergaransi
              </li>
            </ul>

          </div>
        </div>
      </div>
    </section>

  <section class="space-m bg-light">

    <div class="text-center mb-4">
      <h6 class="text-uppercase text-sec mb-3">
              Proyek Pengecatan
            </h6>
            <h2 class="mb-4 fw-bold title-1 text-cbm">
              Pengecatan Terbaru
            </h2>


            <div class="container">
  <div class="position-relative">
  <div class="swiper slider-3 p-2">
      <div class="swiper-wrapper slide-mes">
        @foreach($project->take(8)->reverse() as $pro)
        <div class="swiper-slide">
        @if($pro->img_af)
  <a href="{{ route('project.view',['id' => $pro -> slug]) }}" class="col text-dark no-dec">
      @else
      <a href="javascript:void(0)" data-caption="{{ $pro->title }}" data-fancybox="{{ $pro->id }}" data-src="{{ url($pro->img) }}" class="col text-dark no-dec">
      @endif
    <div class="card h-100 bg-transparent border-0">
      <div class="position-relative">
        <div class="img gray-1 rounded" style="background:url({{ $pro->img }});background-position:center"></div>
        <div class="to-center grad-2 rounded"></div>
      </div>
      <div class="card-body text-start">
        <p class="card-title fw-semibold title-1 text-cbm text-capitalize">{{ $pro->title }}</p>
      </div>
      <div class="card-footer d-flex justify-content-between bg-transparent">
          <div>
              <i class="bi bi-calendar2 me-2"></i>{{ $pro->created_at->format('d M Y') }}
          </div>
          <div>
              <div class="badge bg-cbm">
                <i class="bi bi-building me-2"></i>{{ $pro->kategori }}
              </div>
          </div>
      </div>
    </div>
</a>

</div>
@endforeach
      </div>
    </div>

    <div class="to-left d-flex align-items-center h-100 z-in-1" style="left:-10px">
          <div class="btn-icon m-1 prev-1 bg-scs text-center hvr-input">
            <i class="bi bi-chevron-compact-left text-white"></i>
          </div>
        </div>
        <div class="to-right d-flex align-items-center h-100 z-in-1" style="right:-10px">
          <div class="btn-icon m-1 next-1 bg-scs text-center hvr-input">
            <i class="bi bi-chevron-compact-right text-white"></i>
          </div>
        </div>

    </div>
    </div>
    </div>
    </section>

  <section class="space-m">
    <div class="container">
    <div class="row justify-content-center">
          <div class="col-md-10 col-lg-7 text-center">

            <h6 class="text-uppercase text-sec mb-3">
            klien perusahaan
            </h6>
            <h2 class="mb-4 fw-bold title-1 text-cbm text-capitalize">
              Sudah banyak perusahaan <span class="text-underline-warning"> yang menggunakan jasa kami</span>
            </h2>
          </div>
        </div>
        <div class="row g-0 gray-1">
          @foreach($brand as $bra)
          <div class="col-4">
            <img src="{{ $bra->img }}" alt="" width="100%">
          </div>
          @endforeach
        </div>
        <!-- <img src="{{ asset('img/client.jpg') }}" alt="" width="100%" class="gray-1 "> -->
    </div>
  </section>
    

@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
@endsection
@section('js')
<script src="{{ asset('js/swiper.js') }}"></script>
<script>
  var swiper1 = new Swiper(".slider-1", {
      slidesPerView: 1,
      loop: true,
      autoplay: true,
      effect: 'fade',
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
      pagination: {
          el: ".swiper-pagination",
        },
    });
  var swiper2 = new Swiper(".slider-2", {
      slidesPerView: 1,
      loop: true,
      allowTouchMove: false,
      autoplay: true,
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
    });
    
    var swiper3 = new Swiper(".slider-3", {
      spaceBetween:40,
      navigation: {
        nextEl: ".next-1",
        prevEl: ".prev-1",
      },
      breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        }
    });
    
    var swiper4 = new Swiper(".slider-4", {
      slidesPerView: 5,
      autoplay: true,
      spaceBetween:40,
      allowTouchMove: false,
    });
</script>
@endsection