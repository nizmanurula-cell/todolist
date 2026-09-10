<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk semua proses CRUD User
Route::resource('users', UserController::class);