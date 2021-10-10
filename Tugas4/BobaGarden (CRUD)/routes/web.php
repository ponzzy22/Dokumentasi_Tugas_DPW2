<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientprodukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'showlogin']);
Route::get('/reg', [HomeController::class, 'showreg']);
Route::get('/kat', [HomeController::class, 'showkat']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{produk}', [ProdukController::class, 'show']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('/clientproduk', [ClientprodukController::class, 'index']);
Route::get('/clientproduk/{clientproduk}', [ProdukController::class, 'show']);