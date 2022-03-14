@extends('layouts.index')
@section('content')
<div class="bg-cbm text-white">
    <div class="bg-shape-1 space-m">
    <div class="container">
    <div class="row">
    <div class="text-center col-md-8 offset-md-2">
    <h2 class="fw-bold title-1 mb-0">
              Artikel Pengecatan
            </h2>
            <p>Dapatkan berita seputar cbm dan pengecatan</p>
        </div>
    </div>
    </div>
    </div>
</div>
<section class="space-m">
    <div class="container">

    <div class="row mb-5">
        <div class="col-md-6 offset-md-3">
        <div class="input-group input-group-lg flex-nowrap rounded-pill border">
            <span class="input-group-text border-0 bg-transparent" id="addon-wrapping">
                <img src="{{ asset('img/search.svg') }}" alt="" width="20">
            </span>
            <input type="text" class="form-control bg-transparent border-0" placeholder="Pencarian artikel" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
            <ul class="list-blog">
                @foreach($blog->reverse() as $blo)
                <li class="py-4">
                    <div class="card border-0">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                        <a href="{{ route('blog.view',['id' => $blo -> slug]) }}">
                            <div class="img gray-1 rounded" style="background:url({{ $blo->img }});background-position:center"></div>
                        </a>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-end mb-3 mb-md-0">
                            <div>
                                <div class="badge bg-cbm">
                                    {{ $blo->kategori }}
                                </div>
                            </div>
                            </div>
                            <p class="fw-semibold title-1 text-cbm text-capitalize">{{ $blo->title }}</p>
                            <p>{!! substr($blo->content,0,120) !!}..</p>
                            <div class="card-footer d-flex justify-content-between bg-transparent">
                                <div>
                                    <i class="bi bi-calendar2 me-2"></i>{{ $blo->created_at->format('d M Y') }}
                                </div>
                                <div>
                                    <a href="{{ route('blog.view',['id' => $blo -> slug]) }}" class="fw-normal">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
</section>
@endsection