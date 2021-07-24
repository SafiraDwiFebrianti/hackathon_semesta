@extends('layouts.master')
@section('title','Laravel')
@section('content')


<section class="section">
<div class="section-header">
  <h1>Dashboard</h1>
</div>

<div class="section-body">
  <!-- Untuk memanggil nama user yang berhasil login -->
  <!-- Welcome, bro! -->
</div>

<div class="row">
  <!-- Dashboard Admin -->
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <!-- Icon -->
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <!-- Judul -->
        <div class="card-header">
          <h4>Total Admin</h4>
        </div>
        <!-- Isi -->
        <div class="card-body">
          10
        </div>
      </div>
    </div>
  </div>


  <!-- Dashboard News -->
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <!-- Icon -->
      <div class="card-icon bg-danger">
        <i class="far fa-newspaper"></i>
      </div>
      <div class="card-wrap">
        <!-- Judul -->
        <div class="card-header">
          <h4>News</h4>
        </div>
        <!-- Isi -->
        <div class="card-body">
          42
        </div>
      </div>
    </div>
  </div>


  <!-- Dashboard Reports -->
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <!-- Icon -->
      <div class="card-icon bg-warning">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <!-- Judul -->
        <div class="card-header">
          <h4>Reports</h4>
        </div>
        <!-- Isi -->
        <div class="card-body">
          1,201
        </div>
      </div>
    </div>
  </div>


  <!-- Dashboard Online Users -->
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <!-- Icon -->
      <div class="card-icon bg-success">
        <i class="fas fa-circle"></i>
      </div>
      <div class="card-wrap">
        <!-- Judul -->
        <div class="card-header">
          <h4>Online Users</h4>
        </div>
        <!-- Isi -->
        <div class="card-body">
          47
        </div>
      </div>
    </div>
  </div>

</div>
</section>


@endsection

@push('page-scripts')
@endpush
