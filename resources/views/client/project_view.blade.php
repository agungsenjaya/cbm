@extends('layouts.index')
@section('content')
<div class="py-3 bg-cbm-2">
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
            <div class="col-md-10 offset-md-1">
                <h2 class="text-capitalize fw-semibold title-1 text-center mb-4 text-cbm">{{ $data->title }}</h2>
                <img src="{{ url('') . '/' . $data->img }}" alt="" width="100%">
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
                @if($data->img_af)
                @php
                $rr = json_decode($data->img_af);
                @endphp
                <section class="">
                <div class="row">
                    @foreach($rr as $r)
                    <div class="col-md-4 col-6 mb-3">
                        <a href="javascript:void(0)" data-caption="{{ $data->title }}" data-fancybox="{{ $data->id }}" data-src="{{ url('dat/public' . $r) }}" class="">
                            <div class="position-relative">
                                <div class="img" style="background:url({{ url('dat/public' . $r) }});background-position:center"></div>
                                <div class="to-center z-in-1 d-flex align-items-center justify-content-center">
                                    <i class="bi bi-plus-circle-fill h2 text-cbm"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                </section>
                @endif
                <hr>
                <div class="d-flex justify-content-between">
                    <div>
                        <span class="fw-semibold title-1 text-cbm">
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