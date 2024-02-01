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
        $response = Http::post('https://api-pismart-dev.pupuk-indonesia.com/golang/login', [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ]);

        if ($response->status() == 200) {
            $user = $response->json();
            Session::put('user', $user);
            $respDev = Http::post('https://api-pismart-dev.pupuk-indonesia.com/oauth_api/user/login', [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ]);
            $userdev = $respDev->json();
            Session::put('userdev', $userdev);

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
