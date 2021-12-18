@extends('layouts.index')
@section('content')
<div class="py-3 bg-cbm">
    <div class="container justify-content-center d-flex">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="{{ route('project') }}" class="text-white">Projects</a></li>
    <li class="breadcrumb-item active text-white" aria-current="page">{{ $data->title }}</li>
  </ol>
</nav>
    </div>
</div>
<section class="space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-capitalize fw-semibold text-center mb-4">{{ $data->title }}</h2>
                <!-- <img src="{{ url('') . '/' . $data->img }}" alt="" width="100%"> -->
                <img src="https://dummyimage.com/600x350" alt="" width="100%">
                <div class="card my-4 border-0 bg-light">
                    <div class="card-body d-flex justify-content-between">
                    <div class="align-self-center">
                        <i class="bi bi-calendar2 me-2"></i>{{ $data->created_at->format('d M Y') }}
                    </div>
                    <div>
                        <div class="badge bg-cbm">
                            <i class="bi bi-building me-2"></i>{{ $data->kategori }}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="">
                    {!!  $data->content !!}
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="fw-semibold">
                            Bagikan
                        </span>
                    </div>
                    <div>
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_telegram"></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
    var a2a_config = a2a_config || {};
    a2a_config.icon_color = "#0747A6";
</script>
@endsection