<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

// Halaman awal Laravel
Route::get('/', function () {
    return view('welcome');
});

// Route dengan parameter nama
Route::get('/halo/{nama}', function (string $nama) {
    return "Halo, {$nama}! Selamat datang di praktikum Laravel.";
});



// Route dengan parameter opsional
Route::get('/kampus/{nama?}', function (
    string $nama = 'Universitas'
) {
    return "Selamat datang di {$nama}";
});

// Tampilkan daftar mahasiswa
Route::get('/mahasiswa', [
    MahasiswaController::class,
    'index'
])->middleware('log.request');

// Form tambah mahasiswa
Route::get('/mahasiswa/create/form', [
    MahasiswaController::class,
    'create'
]);

// Detail mahasiswa: NIM hanya boleh berupa angka
Route::get('/mahasiswa/{nim}', [
    MahasiswaController::class,
    'show'
])->whereNumber('nim');

// Pengujian POST mahasiswa
Route::post('/mahasiswa', function (Request $request) {
    return response()->json([
        'message' => 'Data mahasiswa berhasil diterima',
        'data' => [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
        ]
    ]);
});

// Route dengan multiple parameter
Route::get('/mahasiswa/{nim}/{nama}', function (
    string $nim,
    string $nama
) {
    return "NIM: {$nim} | Nama: {$nama}";
});