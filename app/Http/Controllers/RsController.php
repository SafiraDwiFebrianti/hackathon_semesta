<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RsController extends Controller
{

  // tampilkan data
  public function index(){
    // $data_barang = DB::table('data_barang')->paginate(3);
    // return view('crud', ['data_barang' => $data_barang]);
    return view('rs');
  }

  // method untuk menamplkan form tambah data
  public function tambah(){
    return view('crud-tambah-data');
  }


}
