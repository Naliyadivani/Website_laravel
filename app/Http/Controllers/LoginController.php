<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function indexLogin()
    {
        return view('loginpage.newLogin',[
            'title' => 'Login'
        ]);
    }

    // public function loginAction()
    // {
    //     return view('/dashboard.home'); // Nama view home mengacu pada file blade yang akan menampilkan halaman utama.
    // }

    public function loginAction(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'pw' => 'required',
        ]);
        return redirect('/dashboard'); // Nama view home mengacu pada file blade yang akan menampilkan halaman utama.
    }

    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('loginpage.indexLogin');
    //   }
}









