<?php

use App\Http\Controllers\dataPesananController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginController::class,'index'])->name('login');
Route::get('/',[mainController::class,'index']);
Route::get('/data-pesanan',[dataPesananController::class,'index'])->name('data-pesanan');
Route::post('/data-pesanan/tambah',[dataPesananController::class,'tambah'])->name('data-pesanan.tambah');
Route::get('/data-pesanan/edit{id}',[dataPesananController::class,'edit'])->name('data-pesanan.edit');
Route::post('/data-pesanan/update{id}',[dataPesananController::class,'update'])->name('data-pesanan.update');
Route::delete('/data-pesanan/{id}',[dataPesananController::class,'hapus'])->name('data_pesanan.hapus');