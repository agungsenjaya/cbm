@extends('layouts.index')
@section('content')
<div class="bg-cbm text-white">
    <div class="bg-shape-1 space-m">
    <div class="container">
    <div class="row">
    <div class="text-center col-md-8 offset-md-2">
    <h2 class="fw-bold title-1 mb-0">
              Proyek Pengecatan
            </h2>
            <p>Daftar proyek pengecatan yang dikerjakan</p>
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
            <input type="text" class="form-control bg-transparent border-0" placeholder="Pencarian nama gedung/proyek" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($project->reverse() as $pro)
        @if($pro->img_af)
  <a href="{{ route('project.view',['id' => $pro -> slug]) }}" class="col text-dark no-dec">
      @else
      <a href="javascript:void(0)" data-caption="{{ $pro->title }}" data-fancybox="{{ $pro->id }}" data-src="{{ url($pro->img) }}" class="col text-dark no-dec">
      @endif
    <div class="card h-100 border-0">
    <div class="position-relative">
        <div class="img gray-1 rounded" style="background:url({{ $pro->img }});background-position:center"></div>
        <div class="to-center grad-2 rounded"></div>
      </div>
      <div class="card-body">
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
  @endforeach
  
</div>
    </div>
</section>
@endsection