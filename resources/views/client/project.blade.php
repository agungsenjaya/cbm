@extends('layouts.index')
@section('content')
<div class="bg-project align-items-center d-flex">
    <div class="container space-m">
    <div class="text-center">
            <h1 class="fw-bold">Proyek Pengecatan</h1>
            <p>Daftar proyek yang sudah dikerjakan oleh team cbm</p>
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
  <a href="{{ route('project.view',['id' => $pro -> slug]) }}" class="col text-dark no-dec">
    <div class="card h-100 border-0">
      <img src="{{ $pro->img }}" class="card-img-top rounded-0" alt="...">
      <div class="card-body">
        <h5 class="card-title text-capitalize">{{ $pro->title }}</h5>
        <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
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