@extends('layouts.app')
@section('content')
<section>
    <div class="card card-body shadow-sm">
      
    <div class="justify-content-end d-flex pt-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Project</li>
          </ol>
        </nav>
      </div>

    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @csrf
  <div class="row mb-3">
  <div class="col">
    <label for="" class="form-label">Judul Project</label>
    <input type="text" class="form-control form-control-lg" name="title" required>
  </div>
  <div class="col">
    <label for="" class="form-label">Kategori Project</label>
    <select name="kategori" required class="form-select form-select-lg">
      <option>-- Select Option --</option>
      <option value="rumah">rumah</option>
      <option value="industri">industri</option>
      <option value="apartemen">apartemen</option>
      <option value="perumahan">perumahan</option>
      <option value="proyek">proyek</option>
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
    <input type="file" class="file d-none" name="img" required>
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea id="summer" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-cbm">Insert Project</button>
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

$("input[name='title']").keyup(function() {
		var bos = $(this).val().toLowerCase().replace(/ /g, '-')
             .replace(/[^\w-]+/g, '');
			$.getJSON(`http://localhost:8000/api/projects/search/${bos}`,
				function (res) {
					if (res.code == 200) {
            console.log('sudah ada judul');
					}
				});
	});

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