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
      
      <form method="post" action="{{ route('projects.store') }}" id="ajax-form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
      <option value="proyek">proyek</option>
    </select>
  </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Gambar Utama</label>
    <div class="position-relative">
    <input type="file" class="file form-control form-control-lg" name="img" required>
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
  <div class="mb-3">
    <label for="" class="form-label">Gambar Lainnya</label>
    <input id="images" class="form-control d-none" type="file" name="img_af[]" accept="image/*" placeholder="Choose images" multiple >
    <a href="javascript:void(0)" class="a3 card col-1 border-dotted text-center">
      <div class="card-body">
        <i class="bi bi-image h1 text-secondary"></i>
      </div>
    </a>
    <a href="javascript:void(0)" class="a4 d-none card col-1 border-dotted text-center">
      <div class="card-body">
        <i class="bi bi-x h1 text-secondary"></i>
      </div>
    </a>
  </div>

  <div class="preview-image row"></div>

  <button type="submit" class="btn-ajax btn btn-cbm">Insert Project</button>
</form>

<div class="text-center his d-none">
  <h4 class="title-1 fw-bold text-cbm animate__animated animate__flash animate__infinite animate__slow">Sedang proses upload</h4>
  <p>Harap jangan close browser anda</p>
</div>

<div class="row his d-none">
<div class="col-md-6 offset-md-3">
<div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-scs" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
    </div>
</div>
</div>
</div>

    </div>
</section>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script>

// $("input[name='title']").keyup(function() {
$("input[name='title']").change(function() {
		var bos = $(this).val().toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
			$.getJSON(`http://localhost:8000/api/projects/search/${bos}`,
				function (res) {
					if (res.code == 200) {
            alert(`Judul ${res.data.title} sudah digunakan, silahkan ganti judul !!`);
					}
				});
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

      $('.a3').on('click', function(){
        $('#images').trigger('click');
      });

      $(function() {
            var multiImgPreview = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="col-md-2 mb-3">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('input[name="img_af[]"]').on('change', function() {
              if (this) {
                $('.a3').addClass('d-none');
                $('.a4').removeClass('d-none');
              }
                multiImgPreview(this, 'div.preview-image');
            });
        });

        $('.a4').on('click', function () {
          $('#images').val('');
          $('.preview-image img').remove();
          $('.a3').removeClass('d-none');
          $('.a4').addClass('d-none');
        });

        $(function () {
            $(document).ready(function () {
                $('#ajax-form').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        var dam = document.getElementById('liveMod');
                        if(dam) {
                            var toast = new bootstrap.Toast(dam);
                            toast.show();
                        }
                        setTimeout(function(){
                          window.location.href = `{{ route('projects.index') }}`;
                        },2000);
                    }
                });
            });
        });

        $('.btn-ajax').on('click',function(){
          $('.his').removeClass('d-none');
          $('form').hide();
        });
  
</script>
@endsection