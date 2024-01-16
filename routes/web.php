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

Route::get('/', function () {
    return view('mahasiswa');
});

Route::get('/v_ampu', [KRSController::class, 'index']);

Route::get('/datamahasiswa', [DataMahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/datamahasiswa/{nim}/krs', [DataMahasiswaController::class, 'showKrs'])->name('mahasiswa.krs');

Route::prefix('dosen')->group(function () {
    // Route untuk halaman admin/users tanpa menggunakan controller
    Route::get('/v_profil', function () {
        return view('v_profil'); // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    Route::get('/data_pengampu', function () {
        return view('v_ampu'); // Sesuaikan dengan respons atau tampilan yang diinginkan
    })->name('home');
    // Tambahkan rute lainnya yang mungkin Anda butuhkan di sini
});


//Jawaban Soal 1