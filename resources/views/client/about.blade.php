@extends('layouts.index')
@section('content')
<div class="bg-about align-items-center d-flex">
    <div class="container space-m">
    <div class="text-center">
            <h1 class="fw-bold">Tentang kami</h1>
            <p>CV. Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan. Pada awalnya merupakan divisi khusus pengecatan yang ada di PT. San Central Indah yang dibentuk pada tahun 1997. Kemudian seiring perkembangan jaman dan adanya kebutuhan jasa pengecatan yang sangat besar di dalam dunia bangunan, maka pada tahun 2015 divisi ini berubah menjadi CV. Central Bangun Mandiri (CBM).</p>
            <a href="javascript::void(0)">
                <i class="bi bi-chevron-double-down h5"></i>
            </a>
        </div>
    </div>
</div>
<section class="space-m">
    <div class="container">
        <div class="row">
           <div class="col-md-6 text-end">
            <img src="https://dummyimage.com/600x500" alt="" width="80%" class="">
           </div> 
           <div class="col-md-6 align-self-center">
           <h2 class="fw-semibold">Jasa & Layanan</h2>
            <p>CV. Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan. Pada awalnya merupakan divisi khusus pengecatan yang ada di PT. San Central Indah yang dibentuk pada tahun 1997. Kemudian seiring perkembangan jaman dan adanya kebutuhan jasa pengecatan yang sangat besar di dalam dunia bangunan, maka pada tahun 2015 divisi ini berubah menjadi CV. Central Bangun Mandiri (CBM).</p>
           </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
    <div class="row">
           <div class="col-md-6 align-self-center">
           <h2 class="fw-semibold">Partner Produk</h2>
            <p>CV. Central Bangun Mandiri (CBM) saat ini menjadi perusahaan ‘Paint Applicator’ resmi dari PT. San Central Indah dalam bidang jasa pengecatan. Dan produk cat yang digunakan adalah produk-produk cat terkenal dari PT. San Central Indah, seperti: Kem-Tone, UltraShield, Spectrum, ColorTone, Sterling (PU & Epoxy), SCIGard Waterproofing, Noroo Waterproofing.</p>
           </div>
           <div class="col-md-6">
            <img src="https://dummyimage.com/600x500" alt="" width="80%" class="">
           </div>
        </div>
    </div>
</section>
<section class="space-m">
    <div class="container">
    <div class="text-center mb-5">
            <h2 class="fw-semibold">Klien Kami</h2>
            <p>Berikut client yang sudah kami kerjakan</p>
        </div>
        <img src="https://dummyimage.com/1349x500" alt="" width="100%">
    </div>
</section>
<section class="space-m bg-cbm-2 text-white">
    <div class="container">
    <div class="text-center">
        <h2 class="fw-semibold mb-3">Kantor Pusat</h2>
            <p>CV. Central Bangun Mandiri (CBM) <br> Jl.Suniaraja No. 83 Bandung
                Jawa Barat - Indonesia.</p>
                <a href="{{ route('contact') }}" class="text-white">Hubungi Kami</a>
    </div>
    </div>
</section>
@endsection