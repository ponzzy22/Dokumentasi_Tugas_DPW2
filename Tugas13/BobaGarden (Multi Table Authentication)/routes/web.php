<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientprodukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('clienthome');
});
// Route::get('home', function () {
//     return view('clienthome');
// });

Route::get('home', [HomeController::class, 'clienthome']);
Route::get('home/{status}', [HomeController::class, 'clienthome']);


Route::get('/index', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'showlogin']);
Route::get('/reg', [HomeController::class, 'showreg']);
Route::get('/kat', [HomeController::class, 'showkat']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('produk/{status}', [ProdukController::class, 'index']);

Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk', [ProdukController::class, 'store']);
Route::get('/produk/{produk}', [ProdukController::class, 'show']);
Route::get('/produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('/produk/{produk}', [ProdukController::class, 'update']);
Route::delete('/produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('/clientproduk', [ClientprodukController::class, 'index']);
Route::get('/clientproduk/{clientproduk}', [ProdukController::class, 'show']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

