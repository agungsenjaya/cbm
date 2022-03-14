@extends('layouts.index')
@section('content')
<div class="bg-cbm text-white">
    <div class="bg-shape-1 space-m">
    <div class="container">
    <div class="row">
    <div class="text-center col-md-8 offset-md-2">
    <h2 class="fw-bold title-1 mb-0">
              Hubungi Kami
            </h2>
            <p>Jika anda mempunyai pertanyaan seputar pengecatan</p>
        </div>
    </div>
    </div>
    </div>
</div>
<section class="space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card shadow-sm border-0">
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
                    <button type="submit" class="btn btn-scs w-100">Kirim Pesan</button>
                    </form>
                   </div>
               </div> 
            </div>
        </div>
    </div>
</section>
@endsection