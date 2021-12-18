@extends('layouts.app')
@section('content')
@php
$no = 1;
@endphp

@if(count($blog))
<section>
<div class="card card-body shadow-sm">
<table id="table-1" class="table table-striped table-bordered py-3 w-100">
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
      @foreach($blog->reverse() as $blo)
      <tr>
        <td>{{ counTing($no++) }}</td>
        <td class="text-capitalize">{{ $blo->title }}</td>
        <td>
        <a href="javascript:void(0)" data-caption="{{ $blo->title }}" data-fancybox="{{ $blo->id }}" data-src="{{ url($blo->img) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Preview
        </a>
        </td>
        <td><i class="bi bi-check-circle-fill me-2 text-cbm"></i>{{ $blo->user->name }}</td>
        <td>{{ $blo->created_at }}</td>
        <td>
          <a href="{{ route('blogs.edit',['id' => $blo -> id]) }}" class="btn btn-cbm btn-sm w-100">Edit</a>
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
    <p>Data masih kosong, silahkan masukan blog baru.</p>
    <a href="{{ route('blogs.create') }}" class="btn btn-secondary">Tambah Blog<i class="bi bi-plus ms-2"></i> </a>
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