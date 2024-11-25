<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman.dashboard.index');
});

// INI ROUTE KATEGORI
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('kategori.tambah');
Route::POST('/store-kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::POST('/update-kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::get('/destroy-kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');



// INI ROUTE TUGAS
Route::get('/tugas', function () {
    return view('halaman.tugas.index');
})->name('tugas');
Route::get('/tambah-tugas', function () {
    return view('halaman.tugas.tambah');
})->name('tugas.tambah');
Route::get('/edit-tugas', function () {
    return view('halaman.tugas.edit');
})->name('tugas.edit');
