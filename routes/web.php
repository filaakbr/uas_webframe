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
   
    Route::get('/pendaftaran', function () {
        return view("pendaftaran"); 
    })->name('home');
    Route::get('/ujian', function () {
        return view("ujian"); 
    })->name('home');
    Route::get('/nilai', function () {
        return view("nilai"); 
    })->name('home');
    Route::get('/viewkrs', function () {
        return view("viewkrs"); 
    })->name('home');
   
});


//Jawaban Soal 1