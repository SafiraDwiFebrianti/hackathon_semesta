<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class AutentikasiController extends Controller
{
  public function index(){
    return view('autentikasi/login');
  }

  public function login(Request $request){
    //firstOrFail = jika tidak ada muncul pesan error
    $data = User::where('email', $request->email)->firstOrFail();

    if ($data){
      if(Hash::check($request->password,$data->password)){
        session(['berhasil_login' => true]);
        return redirect('/dashboard');
      }
    }
    return redirect('/')->with('message','Email atau Password salah');
}

  public function logout(Request $request){
    $request->session()->flush();
    return redirect('/');
  }
}
