@extends('layouts.app')
@section('content')
<section>
    <div class="card card-body shadow-sm">
      
    <div class="justify-content-end d-flex pt-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Proejct</li>
          </ol>
        </nav>
      </div>

      @if($errors->any())
          {{ implode('', $errors->all('<div>:message</div>')) }}
      @endif

    <form method="POST" action="{{ route('projects.update',['id' => $data -> id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
  <div class="col">
    <label for="" class="form-label">Judul Blog</label>
    <input type="text" class="form-control form-control-lg" name="title" required value="{{ $data->title }}">
  </div>
  <div class="col">
    <label for="" class="form-label">Kategori Blog</label>
    <select name="kategori" required class="form-select form-select-lg">
      <option>-- Select Option --</option>
      <option value="berita" {{ ($data->kategori == 'berita') ? 'selected' : '' }}>berita</option>
      <option value="tips" {{ ($data->kategori == 'tips') ? 'selected' : '' }}>tips</option>
      <option value="edukasi" {{ ($data->kategori == 'edukasi') ? 'selected' : '' }}>edukasi</option>
      <option value="tutorial" {{ ($data->kategori == 'tutorial') ? 'selected' : '' }}>tutorial</option>
    </select>
  </div>
  </div>
  <div class="my-3">
    <label for="" class="form-label">Gambar Utama</label>
    <div class="position-relative">
    <div class="d-flex justify-content-between p-3 bg-light border border-dotted rounded a1 hvr-input">
      <div>
        <span class="a2 opacity-50">Masukan Gambar</span>
      </div>
      <div>
        <div class="ps-3 border-start">
          <i class="bi bi-image-fill"></i> 
        </div>
      </div>
    </div>
    <input type="file" class="file d-none" name="img">
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea id="summer" name="content">{{ $data->content }}</textarea>
  </div>
  <button type="submit" class="btn btn-cbm">Update Project</button>
</form>
    </div>
</section>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#summer').summernote({
        tabsize: 2,
        height: 600,
        toolbar: [
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      
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