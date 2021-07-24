@extends('layouts.master')
@section('title','Laravel')
@section('content')


<section class="section">
  <div class="section-header">
    <h1>Rumah Sakit</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item"><a href="rumah_sakit">Rumah Sakit</a></div>
      <div class="breadcrumb-item">Data Rumah Sakit</div>
    </div>
  </div>

<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <a href="crud/tambah" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
      <hr>
      <!-- @if (session('message'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>×</span>
          </button>
          {{ session('message')}}
        </div>
      </div>
      @endif -->

      <table class="table table-striped table-bordered ">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Provinsi</th>
          <th>Kabupaten</th>
          <th>Alamat</th>
          <th>No Telp</th>
        </tr>


@endsection

@push('page-scripts')
  <script src="{{ asset('../node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush

@push('after-script')

@endpush

</section>
