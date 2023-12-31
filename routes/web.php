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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/dropbox', function () {
    return view('dropbox');
});

Route::get('/jenis', function () {
    return view('jenis');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/maps', function () {
    return view('maps');
});
Route::get('/permintaan', function () {
    return view('permintaan');
});
Route::get('/riwayat', function () {
    return view('riwayat');
});
