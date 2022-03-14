@extends('layouts.app')
@section('content')
<section>
    <div class="card card-body shadow-sm">
      
    <div class="justify-content-end d-flex pt-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">Brands</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Brand</li>
          </ol>
        </nav>
      </div>

    <form method="POST" action="{{ route('brands.update',['id' => $data -> id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
  <div class="col">
    <label for="" class="form-label">Brand Name</label>
    <input type="text" class="form-control form-control-lg" name="title" required value="{{ $data->title }}">
  </div>

  <div class="col">
    <label for="" class="form-label">Gambar Utama
    <span class="ms-2 fw-light"> <a href="javascript:void(0)" data-caption="{{ $data->title }}" data-fancybox="{{ $data->id }}" data-src="{{ url($data->img) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Current Images
        </a></span>
    </label>
    <div class="position-relative">
    <input type="file" class="file form-control form-control-lg" name="img">
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a1 hvr-input">
      <div>
        <span class="a2 opacity-50">Masukan Gambar</span>
      </div>
      <div>
        <div class="ps-3 border-start">
          <i class="bi bi-image-fill text-secondary"></i> 
        </div>
      </div>
    </div>
    </div>
  </div>
  
  </div>
  <button type="submit" class="btn btn-cbm">Insert Brand</button>
</form>
    </div>
</section>
@endsection
@section('js')
<script>
      $('.a1').on('click', function(){
        $('.file').trigger('click');
      });

      $(".file").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a2').text(fileName);
        }else{
          $('.a2').text('Masukan Gambar');
        }
      });
</script>
@endsection