<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('layouts/login');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        //melakukan pengecekan info login
        if (Auth::attempt($data)) {
            //apabila autentikasi sukses, jalankan blok berikut 
            return redirect()->route('dashboard')->with('success', Auth::user()->name . 'Berhasil Login');
        } else {
            //apabila autentikasi sukses, jalankan blok berikut 
            return redirect()->route('login')->withErrors('failed', 'Email atau Password Tidak Valid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success', 'Berhasil Logout');
    }
}
