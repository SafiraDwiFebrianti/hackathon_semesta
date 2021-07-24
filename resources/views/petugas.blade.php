@extends('layouts.master')
@section('title','Laravel')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Petugas</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item"><a href="rumah_sakit">Petugas</a></div>
      <div class="breadcrumb-item">Data Petugas</div>
    </div>
  </div>

<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <hr>
      <table class="table table-striped table-bordered ">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
        </tr>

        @foreach ($users as $no => $data)
        <tr>
          <td>{{ $users -> firstItem()+$no }}</td>
          <td>{{ $data -> name }}</td>
          <td>{{ $data -> email }}</td>
        </tr>
        @endforeach

      </table>
      <!-- untuk mengatur page -->
      {{ $users->links() }}
    </div>
  </div>
</div>


@endsection

@push('page-scripts')
@endpush

@push('after-script')
@endpush

</section>
