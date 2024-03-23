<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('layouts/login');
    }
    public function register()
    {
        return view('layouts/register');
    }
}
