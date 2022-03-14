@extends('layouts.index')
@section('content')
<div class="bg-cbm text-white">
    <div class="bg-shape-1 space-m">
    <div class="container">
    <div class="row">
    <div class="text-center col-md-8 offset-md-2">
    <h2 class="mb-4 fw-bold title-1">
              Tentang kami
            </h2>
            <p>CV. Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan. Pada awalnya merupakan divisi khusus pengecatan yang ada di PT. San Central Indah yang dibentuk pada tahun 1997. Kemudian seiring perkembangan jaman dan adanya kebutuhan jasa pengecatan yang sangat besar di dalam dunia bangunan, maka pada tahun 2015 divisi ini berubah menjadi CV. Central Bangun Mandiri (CBM).</p>
            <a href="javascript::void(0)" class="d-flex justify-content-center text-white">
                <div class="text-center">
                    <i class="bi bi-chevron-compact-down h2"></i>
                </div>
            </a>
        </div>
    </div>
    </div>
    </div>
</div>

<!-- <div class="sc-lmOJGc kidcKE"><div fill="#D8CBED" class="sc-pRPz ctpvQB"><svg viewBox="0 0 1660 48" preserveAspectRatio="none" color="text" width="20px" xmlns="http://www.w3.org/2000/svg" class="sc-bdnxRM kDWlca"><path d="M1660 48C1139.02 46.1887 336.256 15.2453 0 0H1660V48Z"></path></svg></div></div> -->

<section class="space-m">
    <div class="container">
        <div class="row align-items-center justify-content-between">
           <div class="col-md-6 text-end">
            <img src="{{ asset('img/about-1.jpg') }}" alt="" width="100%" class="mb-md-0 mb-4">
           </div> 
           <div class="col-md-6 col-lg-5 align-self-center">
           <h2 class="fw-bold title-1 text-cbm">Jasa & Layanan</h2>
            <p>CV. Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan. Pada awalnya merupakan divisi khusus pengecatan yang ada di PT. San Central Indah yang dibentuk pada tahun 1997. Kemudian seiring perkembangan jaman dan adanya kebutuhan jasa pengecatan yang sangat besar di dalam dunia bangunan, maka pada tahun 2015 divisi ini berubah menjadi CV. Central Bangun Mandiri (CBM).</p>
           </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
    <div class="row align-items-center justify-content-between flex-column-reverse flex-lg-row">
            <div class="col-md-6 col-lg-5 align-self-center">
           <h2 class="fw-bold title-1 text-cbm">Partner Produk</h2>
            <p>CV. Central Bangun Mandiri (CBM) saat ini menjadi perusahaan ‘Paint Applicator’ resmi dari PT. San Central Indah dalam bidang jasa pengecatan. Dan produk cat yang digunakan adalah produk-produk cat terkenal dari PT. San Central Indah, seperti: Kem-Tone, UltraShield, Spectrum, ColorTone, Sterling (PU & Epoxy), SCIGard Waterproofing, Noroo Waterproofing.</p>
           </div>
           <div class="col-md-6">
           <img src="{{ asset('img/about-2.jpg') }}" alt="" width="100%" class="mb-md-0 mb-4">
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
            <h2 class="mb-4 fw-bold title-1 text-capitalize text-cbm text-capitalize">
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
        <!-- <img src="{{ asset('img/client.jpg') }}" alt="" width="100%" class="gray-1"> -->
    </div>
</section>
<section class="space-m bg-cbm-2 text-white">
    <div class="container">
    <div class="text-center">
        <h2 class="fw-bold title-1  mb-3">Kantor Pusat</h2>
            <p>CV. Central Bangun Mandiri (CBM) <br> Jl.Suniaraja No. 83 Bandung
                Jawa Barat - Indonesia.</p>
                <a href="{{ route('contact') }}" class="text-white">Hubungi Kami</a>
    </div>
    </div>
</section>
@endsection