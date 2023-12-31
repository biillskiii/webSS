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
//     return view('baseLayout');
// });

Route::get('/', function () {
    return view('layout/home');
});
Route::get('/keanggotaan', function () {
    return view('keanggotaanLayout');
});
Route::get('/portofolio', function () {
    return view('karya');
});
Route::get('/info-acara', function () {
    return view('layout/acara-informasi');
});