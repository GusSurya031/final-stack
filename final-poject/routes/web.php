<?php

// use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
Route::get('/home', [UserController::class, 'home'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/login-proses', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);




Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register-proses', [RegisterController::class, 'create']);


// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/register', [AuthController::class, 'register'])->name('register');
//     Route::get('/login', [AuthController::class, 'login'])->name('login');
// });
