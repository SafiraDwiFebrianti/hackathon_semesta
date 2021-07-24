@extends('layouts.master')
@section('title','RS Pelita  Harapan')
@section('content')
<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Data Rumah Sakit</h4>
        </div>

        <form action="{{ route("rumah_sakit/update",$rumah_sakit->id) }}" method="post">
          @csrf
          @method('patch')
        <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('nama_rs') class="text-danger" @enderror>
                  Nama
                @error('nama_rs') | {{ $message }} @enderror
              </label>
              <input type="text" name="nama_rs"
              @if (old('nama_rs'))
                value="{{ old('nama_rs') }}"
              @else
                value="{{ $rumah_sakit->nama_rs }}"
              @endif
                class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('provinsi') class="text-danger" @enderror>
                  Provinsi
                @error('provinsi') | {{ $message }} @enderror
              </label>
              <input type="text" name="provinsi"
              @if (old('provinsi'))
                value="{{ old('provinsi') }}"
              @else
                value="{{ $rumah_sakit->provinsi }}"
              @endif
                class="form-control">
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('kabupaten') class="text-danger" @enderror>
                  Kabupaten
                @error('kabupaten') | {{ $message }} @enderror
              </label>
              <input type="text" name="kabupaten"
              @if (old('kabupaten'))
                value="{{ old('kabupaten') }}"
              @else
                value="{{ $rumah_sakit->kabupaten }}"
              @endif
                class="form-control">
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('alamat') class="text-danger" @enderror>
                  Alamat
                @error('alamat') | {{ $message }} @enderror
              </label>
              <input type="text" name="alamat"
              @if (old('alamat'))
                value="{{ old('alamat') }}"
              @else
                value="{{ $rumah_sakit->alamat }}"
              @endif
                class="form-control">
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label
                @error('telp') class="text-danger" @enderror>
                  No Telp
                @error('telp') | {{ $message }} @enderror
              </label>
              <input type="text" name="telp"
              @if (old('telp'))
                value="{{ old('telp') }}"
              @else
                value="{{ $rumah_sakit->telp }}"
              @endif
                class="form-control">
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
