<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/keranjang/{id}', [App\Http\Controllers\HomeController::class, 'keranjang'])->name('home');

Route::get('/keranjang', [App\Http\Controllers\HomeController::class, 'keranjang'])->name('home');

Route::get('/tambah/{id}/{ahay}', [App\Http\Controllers\HomeController::class, 'tambahKeKeranjang'])->name('home');
Route::get('/tambah/{id}/{ahay}', [App\Http\Controllers\HomeController::class, 'tambahKeKeranjang'])->name('home');

Route::get('/sukses', [App\Http\Controllers\HomeController::class, 'sukses'])->name('home');

Route::get('/transaksi', [App\Http\Controllers\HomeController::class, 'transaksi'])->name('home');

Route::get('/konfirmasi/{id}', [App\Http\Controllers\HomeController::class, 'konfirmasi'])->name('home');

//  Admin
// ---------

