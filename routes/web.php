<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/login');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::resource('kategori', KategoriController::class);
});