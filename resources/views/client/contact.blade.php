@extends('layouts.index')
@section('content')
<section class="space-m">
    <div class="container">
        <!-- <div class="text-center mb-4">
        <h2 class="fw-semibold">Hubungi Kami</h2>
        </div> -->
        <div class="row">
            <!-- <div class="col-md-6 align-self-center">
                <div class="p-4">
                    <h2 class="fw-semibold">Hubungi Kami</h2>
                    <p>CV. Central Bangun Mandiri (CBM) Jl.Suniaraja No. 83 Bandung
Jawa Barat - Indonesia.</p>
<div class="">
    <div class="mb-4">
        <a href="tel:(405)555-0128" class="btn btn-cbm w-100"><i class="bi bi-envelope me-2"></i>info@cbm.co.id</a>
    </div>
    <div class="row g-0">
        <a href="tel:(405)555-0128" class="btn btn-light text-cbm col-md"><i class="bi bi-telephone me-2"></i>022 - 123123</a>
        <a href="tel:(405)555-0128" class="btn btn-light text-cbm col-md"><i class="bi bi-whatsapp me-2"></i>022 - 123123</a>
    </div>
</div>
                </div>
            </div> -->
            <div class="col-md-6 offset-md-3">
               <div class="card shadow-sm">
                   <div class="card-body">
                   <form action="{{ route('contact.send') }}" method="POST">
                       @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Masukan Pesan</label>
                        <textarea name="message" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-cbm">Kirim Pesan</button>
                    </form>
                   </div>
               </div> 
            </div>
        </div>
    </div>
</section>
@endsection