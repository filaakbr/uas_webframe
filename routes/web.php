<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('mahasiswa')->group(function () {
    Route::get('/mahasiswa', function () {
        // Matches The "/admin/users" URL
    });
});

Route::name('mahasiswa.')->group(function () {
    Route::get('/pendaftaran', function () {
        // Route assigned name "admin.users"...
    })->name('mahasiswa');
});

Route::name('mahasiswa.')->group(function () {
    Route::get('/ujian', function () {
        // Route assigned name "admin.users"...
    })->name('mahasiswa');
});

Route::name('mahasiswa.')->group(function () {
    Route::get('/nilai', function () {
        // Route assigned name "admin.users"...
    })->name('mahasiswa');
});

//Jawaban Soal 1