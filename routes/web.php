<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\DatamahasiswaController;
use App\Models\Datamahasiswa;
use App\Models\Detail;
use App\Models\Krs;
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

Route::get('/', [ProfileController::class, 'index']);

Route::get('/viewkrs', [KRSController::class, 'index']);

Route::get('/datamahasiswa', [DataMahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/datamahasiswa/{nim}/krs', [DataMahasiswaController::class, 'showKrs'])->name('mahasiswa.krs');

Route::prefix('dosen')->group(function () {     
    Route::get('/profile', function () {
        return view('v_profile'); 
    })->name('profile');
    Route::get('/data_pengampu', function () {
        return view('v_ampu'); 
    })->name('pengampu');
});



//Jawaban Soal 1