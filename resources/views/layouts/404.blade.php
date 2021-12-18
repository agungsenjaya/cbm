@extends('layouts.index')
@section('content')
<section class="space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="text-center">
                <h1 class="fw-bold">Not Found</h1>
                <img src="https://dummyimage.com/600x400" alt="" width="100%" class="my-3">
                <p>Maaf untuk halaman yang anda maksud tidak ditemukan, silahkan periksa kembali url mungkin salah.</p>
                <a href="{{ route('index') }}" class="btn btn-cbm">Halaman Utama</a>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection