<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;


Route::get('/', function () {
    return view('layout.master');
});

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store', [KategoriController::class, 'store']);