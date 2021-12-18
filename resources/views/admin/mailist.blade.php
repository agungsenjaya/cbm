@extends('layouts.app')
@section('content')
@php
$no = 1;
@endphp
<section>
<div class="card card-body shadow-sm">
<table id="table-1" class="table table-striped table-bordered py-3 w-100">
    <thead>
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>Email</td>
            <td>Date</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
      @foreach($contact->reverse() as $cont)
      <tr>
        <td>{{ counTing($no++) }}</td>
        <td class="text-capitalize">{{ $cont->name }}</td>
        <td>{{ $cont->email }}</td>
        <td>{{ $cont->created_at }}</td>
        <td>
          <a href="javascript:void(0)" class="btn btn-cbm btn-sm w-100" data-bs-toggle="modal" data-bs-target="#modal{{ $cont->id }}">Message</a>
        </td>
      </tr>

      <div class="modal fade" id="modal{{ $cont->id }}" tabindex="-1" aria-labelledby="modal{{ $cont->id }}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal{{ $cont->id }}Label">Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $cont->message }}
      </div>
    </div>
  </div>
</div>

      @endforeach
    </tbody>
</table>
</div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

<script>
    var table = $('#table-1').DataTable({
      "info": true,
      "paging": true,
      dom: 'lBfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
    });
</script>
@endsection