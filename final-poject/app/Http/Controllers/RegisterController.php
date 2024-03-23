<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        //menampilkan isi dari form
        return view('layouts/register');
    }

    public function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('no_telepon', $request->no_telepon);
        Session::flash('name', $request->name);

        $user = new User;
        $request->validate([
            'email' => 'required|email|unique:users', //untuk memastikan unik di tabel user
            'no_telepon' => 'required|regex:/[0-9]/|min:9',
            'name' => 'required',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silakan masukan email yang valid',
            'email.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'name.required' => 'name wajib diisi',
            'no_telepon.requried' => 'No Telepon wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum 6 buah karakter'
        ]);

        // $data = [
        //     'email' => $request->email,
        //     'name' => $request->name,
        //     'no_telepon' => $request->no_telepon,
        //     'password' => $request->password,
        // ];

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->no_telepon = $request->no_telepon;
        $user->save();

        // DB::table('users')->insert($data);

        return redirect('/login');
    }
}
