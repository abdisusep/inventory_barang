<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\LaporanController;

// Login
Route::get('/', [AuthController::class, 'login'])->name('login_form');
Route::post('/', [AuthController::class, 'login_post'])->name('login_post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('barang', BarangController::class);
    Route::get('stok_barang', [BarangController::class, 'report'])->name('barang.report');
    Route::resource('jenis_barang', JenisBarangController::class);
    Route::resource('satuan', SatuanController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('barang_masuk', BarangMasukController::class);
    Route::resource('barang_keluar', BarangKeluarController::class);

    Route::get('cetak/pdf/stok_barang', [LaporanController::class, 'stok_barang_pdf'])->name('cetak_stok_barang_pdf');
    Route::get('cetak/excel/stok_barang', [LaporanController::class, 'stok_barang_excel'])->name('cetak_stok_barang_excel');
    Route::get('cetak/pdf/barang_masuk', [LaporanController::class, 'barang_masuk_pdf'])->name('cetak_barang_masuk_pdf');
    Route::get('cetak/excel/barang_masuk', [LaporanController::class, 'barang_masuk_excel'])->name('cetak_barang_masuk_excel');
    Route::get('cetak/pdf/barang_keluar', [LaporanController::class, 'barang_keluar_pdf'])->name('cetak_barang_keluar_pdf');
    Route::get('cetak/excel/barang_keluar', [LaporanController::class, 'barang_keluar_excel'])->name('cetak_barang_keluar_excel');
});