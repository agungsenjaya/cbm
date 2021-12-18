@extends('layouts.app')
@section('content')
@php
$no = 1;
@endphp
@if(count($slider))
<section>
<div class="card card-body shadow-sm">
<table id="table-1" class="table table-striped table-bordered w-100 py-3">
    <thead>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Images</td>
            <td>Status</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
      @foreach($slider->reverse() as $slid)
      <tr>
        <td>{{ counTing($no++) }}</td>
        <td class="text-capitalize">{{ $slid->title }}</td>
        <td>
        <a href="javascript:void(0)" data-caption="Versi Website" data-fancybox="{{ $slid->id }}" data-src="{{ url($slid->img_web) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Preview
        </a>
        <a href="javascript:void(0)" data-caption="Versi Mobile" data-fancybox="{{ $slid->id }}" data-src="{{ url($slid->img_mobile) }}" class="">
        </a>
        </td>
        <td>
          @if($slid->status == 'active')
          <div class="badge bg-cbm w-100">
            {{ $slid->status }}
          </div>
          @else
          <div class="badge bg-secondary w-100">
            {{ $slid->status }}
          </div>
          @endif
        </td>
        <td>{{ $slid->created_at }}</td>
        <td>
          <a href="{{ route('sliders.edit',['id' => $slid -> id]) }}" class="btn btn-cbm btn-sm w-100">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
</section>
@else
  <div class="text-center">
    <img src="{{ asset('img/404.svg') }}" alt="" width="400" class="gray-fill">
    <p>Data masih kosong, silahkan masukan slider baru.</p>
    <a href="{{ route('sliders.create') }}" class="btn btn-secondary">Tambah Slider<i class="bi bi-plus ms-2"></i> </a>
  </div>
  @endif
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table-1').DataTable();
    });
</script>
@endsection