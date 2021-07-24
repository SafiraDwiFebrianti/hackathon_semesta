<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MasyarakatController extends Controller
{
  // tampilkan data
  public function index(){
    $masyarakat = DB::table('masyarakat')->paginate(3);
    return view('masyarakat', ['masyarakat' => $masyarakat]);
  }

  // method untuk menamplkan form tambah data
  public function tambah(){
    return view('masyarakat-tambah-data');
  }

  //method untuk simpan data
  public function simpan(Request $request){
    //  fungsi untuk memvalidasi data
    $this-> _validation($request);

    // fungsi yang dijalankan
    DB::insert('insert into masyarakat (nik, nama, jenis_kelamin, alamat, telp) values (?,?,?,?,?)',
    [
      $request->nik,
      $request->nama,
      $request->jenis_kelamin,
      $request->alamat,
      $request->telp,
    ]);
    return redirect()->route('masyarakat')->with('message','Data berhasil disimpan');
  }


  //validasi data
  private function _validation(Request $request){
    $validation = $request->validate([
      'nik' => 'required|max:20|min:3',
      'nama' => 'required|max:20|min:3',
      'jenis_kelamin' => 'required|max:15|min:3',
      'alamat' => 'required|max:100|min:3',
      'telp' => 'required|max:12|min:3',
    ],
      [
        'nik.required' => 'Kolom wajib diisi',
        'nik.max' => 'Harus terdiri dari max 20 karakter',
        'nik.min' => 'Harus terdiri dari min 3 karakter',

        'nama.required' => 'Kolom wajib diisi',
        'nama.max' => 'Harus terdiri dari max 20 karakter',
        'nama.min' => 'Harus terdiri dari min 3 karakter',

        'jenis_kelamin.required' => 'Kolom wajib diisi',
        'jenis_kelamin.max' => 'Harus terdiri dari max 100 karakter',
        'jenis_kelamin.min' => 'Harus terdiri dari min 3 karakter',

        'alamat.required' => 'Kolom wajib diisi',
        'alamat.max' => 'Harus terdiri dari max 100 karakter',
        'alamat.min' => 'Harus terdiri dari min 3 karakter',

        'telp.required' => 'Kolom wajib diisi',
        'telp.max' => 'Harus terdiri dari max 12 karakter',
        'telp.min' => 'Harus terdiri dari min 3 karakter',
      ]
    );
  }

  //method untuk hapus data
  public function delete ($id){
    DB::table('masyarakat')->where('id',$id)->delete();
    return redirect()->back()->with('message','Data berhasil dihapus !');
  }

}
