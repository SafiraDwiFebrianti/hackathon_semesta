@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Tambah Data Rumah Sakit</h4>
        </div>

        <form action="{{ route("rumah_sakit/simpan") }}" method="post">
          @csrf

        <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('nama_rs') class="text-danger" @enderror>
                  Nama
                @error('nama_rs') | {{ $message }} @enderror
              </label>
              <input type="text" name="nama_rs" value="{{ old('nama_rs')}}" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('provinsi') class="text-danger" @enderror>
                  Provinsi
                @error('provinsi') | {{ $message }} @enderror
              </label>
              <input type="text" name="provinsi" value="{{ old('provinsi')}}" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('kabupaten') class="text-danger" @enderror>
                  Kabupaten
                @error('kabupaten') | {{ $message }} @enderror
              </label>
              <input type="text" name="kabupaten" value="{{ old('kabupaten')}}" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('alamat') class="text-danger" @enderror>
                  Alamat
                @error('alamat') | {{ $message }} @enderror
              </label>
              <input type="text" name="alamat" value="{{ old('alamat')}}" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('telp') class="text-danger" @enderror>
                  No Telp
                @error('telp') | {{ $message }} @enderror
              </label>
              <input type="text" name="telp" value="{{ old('telp')}}" class="form-control">
            </div>
          </div>
        </div>
        </div>

        <div class="card-footer text-right">
          <button class="btn btn-primary mr-1" type="submit">Submit</button>
        </div>
      </form>
      </div>
  </div>
</div>

@endsection

@push('page-scripts')

@endpush
