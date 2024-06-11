<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('isLogin');;

// Route Login dan Logout
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/login-proses', [LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class,'logout']);

// Route Data Buku
Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/tambah', [BukuController::class, 'create'])->middleware('isLogin');
Route::post('/buku/store', [BukuController::class, 'store'])->middleware('isLogin');
Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->middleware('isLogin');
Route::put('/buku/update/{id}', [BukuController::class, 'update'])->middleware('isLogin');
Route::get('/buku/hapus/{id}', [BukuController::class, 'delete'])->middleware('isLogin');
Route::get('/buku/destroy/{id}', [BukuController::class, 'destroy'])->middleware('isLogin');
Route::get('/buku/cetak', [bukuController::class, 'cetak'])->middleware('isLogin');

// Route Data Anggota
Route::get('/anggota', [AnggotaController::class, 'index'])->middleware('isLogin');
Route::get('/anggota/tambah', [AnggotaController::class, 'create'])->middleware('isLogin');
Route::post('/anggota/store', [AnggotaController::class, 'store'])->middleware('isLogin');
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit'])->middleware('isLogin');
Route::put('/anggota/update/{id}', [AnggotaController::class, 'update'])->middleware('isLogin');
Route::get('/anggota/hapus/{id}', [AnggotaController::class, 'delete'])->middleware('isLogin');
Route::get('/anggota/destroy/{id}', [AnggotaController::class, 'destroy'])->middleware('isLogin');
Route::get('/anggota/cetak', [AnggotaController::class, 'cetak'])->middleware('isLogin');

// Route Data Peminjaman
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->middleware('isLogin');
Route::get('/peminjaman/tambah', [PeminjamanController::class, 'create'])->middleware('isLogin');
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->middleware('isLogin');
Route::get('/peminjaman/edit/{id}', [PeminjamanController::class, 'edit'])->middleware('isLogin');
Route::put('/peminjaman/update/{id}', [PeminjamanController::class, 'update'])->middleware('isLogin');
Route::get('/peminjaman/hapus/{id}', [PeminjamanController::class, 'delete'])->middleware('isLogin');
Route::get('/peminjaman/destroy/{id}', [PeminjamanController::class, 'destroy'])->middleware('isLogin');
Route::get('/peminjaman/cetak', [PeminjamanController::class, 'cetak'])->middleware('isLogin');



