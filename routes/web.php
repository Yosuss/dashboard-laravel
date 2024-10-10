<?php

use App\Http\Controllers\dataPesananController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[mainController::class,'index']);
Route::get('/data-pesanan',[dataPesananController::class,'index'])->name('data-pesanan');
Route::delete('/data-pesanan/{id}',[dataPesananController::class,'hapus'])->name('data_pesanan.hapus');