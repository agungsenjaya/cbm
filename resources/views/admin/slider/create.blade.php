@extends('layouts.app')
@section('content')
<section>
    <div class="card card-body shadow-sm">
      
    <div class="justify-content-end d-flex pt-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">Sliders</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Slider</li>
          </ol>
        </nav>
      </div>

    <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <div class="col">
    <label for="" class="form-label">Judul Slider</label>
    <input type="text" class="form-control form-control-lg" name="title" required>
  </div>
  <div class="col">
    <label for="" class="form-label">Link Slider</label>
    <input type="text" class="form-control form-control-lg" name="link" required>
  </div>
  </div>
  <div class="row mb-3">
  <div class="col">
    <label for="" class="form-label">Versi Website</label>
    <div class="position-relative">
    <input type="file" class="file-1 form-control form-control-lg" name="img_web" required>
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
  <div class="col">
    <label for="" class="form-label">Versi Mobile</label>
    <div class="position-relative">
    <input type="file" class="file-2 form-control form-control-lg" name="img_mobile" required>
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a3 hvr-input">
      <div>
        <span class="a4 opacity-50">Masukan Gambar</span>
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
  <button type="submit" class="btn btn-cbm">Insert Slider</button>
</form>
    </div>
</section>
@endsection
@section('js')
<script>
      $('.a1').on('click', function(){
        $('.file-1').trigger('click');
      });

      $(".file-1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a2').text(fileName);
        }else{
          $('.a2').text('Masukan Gambar');
        }
      });
      
      $('.a3').on('click', function(){
        $('.file-2').trigger('click');
      });

      $(".file-2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a4').text(fileName);
        }else{
          $('.a4').text('Masukan Gambar');
        }
      });
</script>
@endsection