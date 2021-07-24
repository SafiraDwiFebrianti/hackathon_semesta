@extends('layouts.master')
@section('title','Laravel')
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Registrasi Vaksin</h4>
        </div>

        <form action="{{ route("masyarakat/simpan") }}" method="post">
          @csrf

        <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('nik') class="text-danger" @enderror>
                  NIK
                @error('nik') | {{ $message }} @enderror
              </label>
              <input type="text" name="nik" value="{{ old('nik')}}" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('nama') class="text-danger" @enderror>
                  Nama
                @error('nama') | {{ $message }} @enderror
              </label>
              <input type="text" name="nama" value="{{ old('nama')}}" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('jenis_kelamin') class="text-danger" @enderror>
                  Jenis Kelamin (Pria / Wanita)
                @error('jenis_kelamin') | {{ $message }} @enderror
              </label>
              <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control">
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
      <div class="card">

    </div>
  </div>
</div>

@endsection

@push('page-scripts')

@endpush
