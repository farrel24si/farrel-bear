<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get(
    '/mahasiswa/{param1?}', [MahasiswaController::class, 'show']
)->name('mahasiswa.show');

Route::get(
    '/matakuliah/show/{param1?}', [MatakuliahController::class, 'show']
)->name('matakuliah.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/aboutus', function () {
    return view('halaman-about');
});

Route::get('/home',[HomeController::class,'index']) -> name('home');

Route::get('/pegawai',[PegawaiController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

// Tambahan routes untuk upload file
Route::get('pelanggan/{pelanggan}/show', [PelangganController::class, 'show'])->name('pelanggan.show');
Route::post('pelanggan/{pelanggan}/upload-files', [PelangganController::class, 'uploadFiles'])->name('pelanggan.upload-files');
Route::delete('pelanggan/{pelanggan}/files/{file}', [PelangganController::class, 'deleteFile'])->name('pelanggan.delete-file');

Route::resource('user', UserController::class);
