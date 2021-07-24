<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
  // tampilkan data
  public function index(){
    $users = DB::table('users')->paginate(4);
    return view('petugas', ['users' => $users]);
  }

}
