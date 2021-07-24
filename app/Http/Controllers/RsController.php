<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RsController extends Controller
{

  // tampilkan data
  public function index(){
    $rumah_sakit = DB::table('rumah_sakit')->paginate(3);
    return view('rs', ['rumah_sakit' => $rumah_sakit]);
  }

  // method untuk menamplkan form tambah data
  public function tambah(){
    return view('rs-tambah-data');
  }

  //method untuk simpan data
  public function simpan(Request $request){
    //  fungsi untuk memvalidasi data
    $this-> _validation($request);

    // fungsi yang dijalankan
    DB::insert('insert into rumah_sakit (nama_rs, provinsi, kabupaten, alamat, telp) values (?,?,?,?,?)',
    [
      $request->nama_rs,
      $request->provinsi,
      $request->kabupaten,
      $request->alamat,
      $request->telp,
    ]);
    return redirect()->route('rumah_sakit')->with('message','Data berhasil disimpan');
  }


  //validasi data
  private function _validation(Request $request){
    $validation = $request->validate([
      'nama_rs' => 'required|max:20|min:3',
      'provinsi' => 'required|max:20|min:3',
      'kabupaten' => 'required|max:20|min:3',
      'alamat' => 'required|max:100|min:3',
      'telp' => 'required|max:12|min:3',
    ],
      [
        'nama_rs.required' => 'Kolom wajib diisi',
        'nama_rs.max' => 'Harus terdiri dari max 20 karakter',
        'nama_rs.min' => 'Harus terdiri dari min 3 karakter',

        'provinsi.required' => 'Kolom wajib diisi',
        'provinsi.max' => 'Harus terdiri dari max 20 karakter',
        'provinsi.min' => 'Harus terdiri dari min 3 karakter',

        'kabupaten.required' => 'Kolom wajib diisi',
        'kabupaten.max' => 'Harus terdiri dari max 20 karakter',
        'kabupaten.min' => 'Harus terdiri dari min 3 karakter',

        'alamat.required' => 'Kolom wajib diisi',
        'alamat.max' => 'Harus terdiri dari max 100 karakter',
        'alamat.min' => 'Harus terdiri dari min 3 karakter',

        'telp.required' => 'Kolom wajib diisi',
        'telp.max' => 'Harus terdiri dari max 12 karakter',
        'telp.min' => 'Harus terdiri dari min 3 karakter',
      ]
    );
  }

  //method untuk edit data
  public function edit($id){
    $rumah_sakit = DB::table('rumah_sakit')->where('id',$id)->first();
    return view('rs-edit-data',['rumah_sakit' => $rumah_sakit]);
  }


  //method untuk simpan data setelah diedit
  public function update(Request $request,$id){
    $this -> _validation($request);
    DB::table('rumah_sakit')->where('id',$id)->update([
      'nama_rs' => $request->nama_rs,
      'provinsi' => $request->provinsi,
      'kabupaten' => $request->kabupaten,
      'alamat' => $request->alamat,
      'telp' => $request->telp
    ]);
    return redirect()->route('rumah_sakit')->with('message','Data berhasl diupdate');
  }


  //method untuk hapus data
  public function delete ($id){
    DB::table('rumah_sakit')->where('id',$id)->delete();
    return redirect()->back()->with('message','Data berhasil dihapus !');
  }
}
