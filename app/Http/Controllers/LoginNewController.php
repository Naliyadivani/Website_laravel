<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class LoginNewController extends Controller
{
    public function index()
    {
        $user = Session::get('user');
        if ($user != null) {
            return redirect()->route('homepage');
        }
        return view('loginpage.loginNew');
    }

    public function login(Request $request)
    {
        $response = Http::post('https://601zgltt-9096.asse.devtunnels.ms/login', [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        if ($response->status() == 200) {
            $user = $response->json();
            Session::put('user', $user);
            return redirect()->route('homepage');
        }
        return redirect()->route('loginpage')->withErrors(['authentication' => 'Authentication failed.']);
    }

    public function logout()
    {
        // Clear all data from the session
        Session::flush();

        // Regenerate the session ID to prevent session fixation attacks
        Session::regenerate();

        // Redirect to the login page or any other page after logout
        return redirect()->route('loginpage');
    }
}
