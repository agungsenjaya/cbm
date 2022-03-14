@extends('layouts.index')
@section('content')
<section class="space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <div class="text-center">
                <img src="{{ asset('img/404.svg') }}" alt="" width="100%" class="gray-fill">
                <p>Maaf untuk halaman yang anda maksud tidak ditemukan, <br> silahkan periksa kembali url mungkin salah.</p>
                <a href="{{ route('index') }}" class="btn btn-secondary">Halaman Utama</a>
            </div>
            </div>
        </div>
    </div>
</section>
@endsection