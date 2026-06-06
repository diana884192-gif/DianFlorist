<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\JenisBungaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});


//karna aku masih sering lupa jadi sama aku dinkasih komentar di sini , di sini tuh produk//
Route::get('/produk',
[ProdukController::class, 'index']);

Route::get('/produk/create',
[ProdukController::class, 'create']);

Route::post('/produk',
[ProdukController::class, 'store']);

Route::get('/produk/{id}/edit',
[ProdukController::class, 'edit']);

Route::put('/produk/{id}',
[ProdukController::class, 'update']);

Route::delete('/produk/{id}',
[ProdukController::class, 'destroy']);

//disini pelanggan//
Route::get('/pelanggan',
[PelangganController::class, 'index']);

Route::get('/pelanggan/create',
[PelangganController::class,'create']);

Route::post('/pelanggan',
[PelangganController::class, 'store']);

Route::get('/pelanggan/{id}/edit',
[PelangganController::class, 'edit']);

Route::put('/pelanggan/{id}',
[PelangganController::class, 'update']);

Route::delete('/pelanggan/{id}',
[PelangganController::class, 'destroy']);

//disini jenis bunga//
Route::get('/jenis_bunga',
[JenisBungaController::class, 'index']);

Route::get('/jenis_bunga/create',
[JenisBungaController::class, 'create']);

Route::post('/jenis_bunga',
[JenisBungaController::class, 'store']);

Route::get('/jenis_bunga/{id}/edit',
[JenisBungaController::class, 'edit']);

Route::put('/jenis_bunga/{id}',
[JenisBungaController::class, 'update']);

Route::delete('/jenis_bunga/{id}',
[JenisBungaController::class, 'destroy']);

//disini pesanan//
Route::get('/pesanan',
[PesananController::class, 'index']);

Route::get('/pesanan/create',
[PesananController::class, 'create']);

Route::post('/pesanan',
[PesananController::class, 'store']);

Route::get('/pesanan/{id}/edit',
[PesananController::class, 'edit']);

Route::put('/pesanan/{id}',
[PesananController::class, 'update']);

Route::delete('/pesanan/{id}',
[PesananController::class, 'destroy']);

//disini pembayaran//
Route::get('/pembayaran',
[PembayaranController::class, 'index']);

Route::get('/pembayaran/create',
[PembayaranController::class, 'create']);

Route::post('/pembayaran',
[PembayaranController::class, 'store']);







