<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientprodukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;


Route::get('v_user', function () {
    return view('v_user'); });

Route::get('v_cost', function () {
    return view('v_cost'); });

Route::get('v_home', function () {
    return view('v_home'); });

Route::get('v_keranjang', function () {
    return view('v_keranjang'); });

 Route::get('v_peta', function () {
    return view('v_peta'); });

Route::get('v_notiv', function () {
    return view('v_notiv'); });

Route::get('v_login', function () {
    return view('v_login'); });

Route::get('/', function () {
    return view('home_admin'); });

Auth::routes();
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produk', ProdukController::class);
Route::resource('user', UserController::class);
Route::post('produk/filter', [ProdukController::class, 'filter']);

Route::get('clientproduk', [ClientprodukController::class, 'index']);
Route::resource('clientproduk', ClientprodukController::class);
Route::get('clientproduk/{clientproduk}', [ProdukController::class, 'show']);
Route::post('clientproduk/filter', [ProdukController::class, 'filter']);
Route::resource('post', PostController::class);







