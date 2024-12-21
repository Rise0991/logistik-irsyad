<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Stok;

Route::get('/', [BarangController::class, 'daftarStokBarang'])->name('stok.daftar');

Route::get('/barang-masuk', [BarangController::class, 'daftarBarangMasuk'])->name('barang_masuk.daftar');
Route::get('/barang-masuk/form', [BarangController::class, 'formBarangMasuk'])->name('barang_masuk.form');
Route::post('/barang-masuk', [BarangController::class, 'simpanBarangMasuk'])->name('barang_masuk.simpan');

Route::get('/barang-keluar', [BarangController::class, 'daftarBarangKeluar'])->name('barang_keluar.daftar');
Route::get('/barang-keluar/form', [BarangController::class, 'formBarangKeluar'])->name('barang_keluar.form');
Route::post('/barang-keluar', [BarangController::class, 'simpanBarangKeluar'])->name('barang_keluar.simpan');

Route::get('/stok-barang', [BarangController::class, 'daftarStokBarang'])->name('stok.daftar');
