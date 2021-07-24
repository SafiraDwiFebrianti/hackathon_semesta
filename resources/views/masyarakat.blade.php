@extends('layouts.master')
@section('title','RS Pelita  Harapan')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Registrasi Vaksin</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item"><a href="masyarakat">Masyarakat</a></div>
      <div class="breadcrumb-item">Registrasi Vaksin</div>
    </div>
  </div>

<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <a href="masyarakat/tambah" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
      <hr>
      <!-- Allert Data Berhasil -->
      @if (session('message'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>×</span>
          </button>
          {{ session('message')}}
        </div>
      </div>
      @endif

      <table class="table table-striped table-bordered ">
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Action</th>
        </tr>

        @foreach ($masyarakat as $no => $data)
        <tr>
          <td>{{ $masyarakat -> firstItem()+$no }}</td>
          <td>{{ $data -> nik }}</td>
          <td>{{ $data -> nama }}</td>
          <td>{{ $data -> jenis_kelamin }}</td>
          <td>{{ $data -> alamat }}</td>
          <td>{{ $data -> telp }}</td>
          <td>
            <a href="#" data-id="{{ $data->id }}" class="badge badge-danger swal-confirm">
              <form action="{{ route('masyarakat/delete',$data->id) }}" id="delete{{ $data->id }}" method="post">
                @csrf
                @method('delete')
              </form>
              Delete
            </a>
          </td>
        </tr>
        @endforeach

      </table>
      <!-- untuk mengatur page -->
      {{ $masyarakat->links() }}
    </div>
  </div>
</div>


@endsection

@push('page-scripts')
  <script src="{{ asset('../node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush

@push('after-script')
<script>
$(".swal-confirm").click(function(e) {
   id = e.target.dataset.id;
  swal({
      title: 'Yakin ingin menghapus data ini ?',
      text: 'Data yang sudah dihapus tidak dapat dikembalikan seperti semula ! ',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $(`#delete${id}`).submit();
      }
    });
});
</script>

@endpush

</section>
