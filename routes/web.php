<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', function () {
    return view('pages.index');
})->name('dasboard');

Route::get('/room', function () {
    return view('kamar.index');
})->name('kamar.index');


Route::get('/penyewa', function () {
    return view('penyewa.index');
})->name('penyewa.index');

Route::get('/pembayaran', function () {
    return view('pembayaran.index');
})->name('pembayaran.index');