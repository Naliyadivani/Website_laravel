<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function indexRegister()
    {
        return view('registpage.indexRegister',[
            'title' => 'Register'
        ]);
    }

    public function store()
    {
        return request()->all();
    }
}
