@extends('layouts.master')
@section('title','RS Pelita  Harapan')
@section('content')


<section class="section">
<div class="section-header">
  <h1>Dashboard</h1>
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
          <h4>Total RS</h4>
        </div>
        <!-- Isi -->
        <div class="card-body">
          5
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


<div class="col-lg-8 col-md-12 col-12 col-sm-12">
  <div class="card">
    <div class="card-header">
      <h4>Ringkasan Kasus (24 Juli 2021)</h4>
      <div class="card-header-action">
          <a href="" class="btn btn-primary">Indonesia</a>
      </div>
    </div>

    <div class="card-body">
      <div class="statistic-details">
        <div class="statistic-details-item">
          <span class="text-muted">
            <span class="text-danger">
            <i class="fas fa-caret-up"></i>
            </span> 7%</span>
          <div class="detail-value">3,03 jt</div>
          <div class="detail-name">Total Kasus</div>
        </div>

        <div class="statistic-details-item">
          <span class="text-muted"><span class="text-danger">
            <i class="fas fa-caret-up"></i>
            </span> 23%</span>
          <div class="detail-value">2,39 jt</div>
          <div class="detail-name">Sembuh</div>
        </div>

        <div class="statistic-details-item">
          <span class="text-muted"><span class="text-primary">
            <i class="fas fa-caret-down"></i>
          </span>9%</span>
          <div class="detail-value">79.032</div>
          <div class="detail-name">Meninggal Dunia</div>
        </div>

      </div>
    </div>
</div>
</div>












  </div>
</div>
</section>


@endsection

@push('page-scripts')

@endpush
