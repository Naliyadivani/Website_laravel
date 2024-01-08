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


    public function loginAction(Request $request)
    {
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication was successful
        return redirect('/dashboard');
    } else {
        // Authentication failed; you can handle this case, e.g., by redirecting back with an error message
        return redirect()->back()->withInput()->withErrors(['username' => 'Invalid username or password']);
    }
    }

}








