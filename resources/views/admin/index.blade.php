@extends('layouts.app')
@section('content')
@php
$no = 1;
@endphp
<section>
    <div class="container">
    <div class="card-deck">
  <div class="card shadow bg-cbm text-white">
    <div class="card-body bg-shape-1 h-100">
      <p class="card-title fw-bold">Total Project</p>
      <h1 class="display-4 fw-bold">{{ counTing(count($project)) }}</h1>
      <p class="card-text"><small class="badge bg-cbm-2"><i class="bi bi-check-circle-fill me-2"></i>Jumlah project pengecatan</small></p>
    </div>
  </div>
  <div class="card shadow bg-cbm text-white">
    <div class="card-body bg-shape-1 h-100">
      <p class="card-title fw-bold">Total Blog</p>
      <h1 class="display-4 fw-bold">{{ counTing(count($blog)) }}</h1>
      <p class="card-text"><small class="badge bg-cbm-2"><i class="bi bi-check-circle-fill me-2"></i>Jumlah blog artikel</small></p>
    </div>
  </div>
  <div class="card shadow bg-cbm text-white">
    <div class="card-body bg-shape-1 h-100">
      <p class="card-title fw-bold">Total Company</p>
      <h1 class="display-4 fw-bold">{{ counTing(count($brand)) }}</h1>
      <p class="card-text"><small class="badge bg-cbm-2"><i class="bi bi-check-circle-fill me-2"></i>Jumlah perusahaan</small></p>
    </div>
  </div>
  <div class="card shadow bg-cbm text-white">
    <div class="card-body bg-shape-1 h-100">
      <p class="card-title fw-bold">Total Contact</p>
      <h1 class="display-4 fw-bold">{{ counTing(count($contact)) }}</h1>
      <p class="card-text"><small class="badge bg-cbm-2"><i class="bi bi-check-circle-fill me-2"></i>Jumlah contact mail</small></p>
    </div>
  </div>
</div>
<div class="my-4 card card-body shadow-sm">
<h5 class="fw-bold mb-4">Table Project</h5>
<table id="table-1" class="table table-striped table-bordered w-100 py-3">
    <thead>
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Images</td>
            <td>Posted</td>
            <td>Date</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
      @foreach($project->reverse() as $pro)
      <tr>
        <td>{{ counTing($no++) }}</td>
        <td class="text-capitalize">{{ $pro->title }}</td>
        <td>
        <a href="javascript:void(0)" data-caption="{{ $pro->title }}" data-fancybox="{{ $pro->id }}" data-src="{{ url($pro->img) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Preview
        </a>
        </td>
        <td><i class="bi bi-check-circle-fill me-2 text-cbm"></i>{{ $pro->user->name }}</td>
        <td>{{ $pro->created_at }}</td>
        <td>
          <a href="{{ route('projects.edit',['id' => $pro -> id]) }}" class="btn btn-cbm btn-sm w-100">Edit</a>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>
</div>
    </div>
</section>
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