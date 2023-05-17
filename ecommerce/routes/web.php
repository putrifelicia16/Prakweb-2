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
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pa Rojul";
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Putri Felicia",
        "umur" => 20,
        "email" => "feliciaputri164"
    ]);
});

Route::get('/nf', function () {
    return view('nf', [
        "nama" => "stt nf",
        "lokasi" => "depok",
        "email" => "anwa"
    ]);
});

Route::get('/periksa', function () {
    return view('periksa');
});