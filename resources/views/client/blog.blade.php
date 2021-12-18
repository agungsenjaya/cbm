@extends('layouts.index')
@section('content')
<div class="bg-blog align-items-center d-flex">
    <div class="container space-m">
    <div class="text-center">
            <h1 class="fw-bold">Artikel</h1>
            <p>Dapatkan berita terbaru seputar pengecatan cbm</p>
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
                        <div class="col-md-4">
                        <a href="{{ route('blog.view',['id' => $blo -> slug]) }}">
                            <img src="https://dummyimage.com/600x500" alt="" width="100%">
                        </a>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-end">
                            <div>
                                <div class="badge bg-cbm">
                                    {{ $blo->kategori }}
                                </div>
                            </div>
                            </div>
                            <h5 class="text-capitalize">{{ $blo->title }}</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, iusto. Recusandae fugiat rem, mollitia magnam officiis ullam iusto labore nulla in illo modi dignissimos tenetur, molestias suscipit ipsam est quas.</p>
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