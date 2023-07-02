<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ForminputController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProdukController;

use App\Http\Controllers\KategoriProdukController;
use App\Models\KategoriProduk;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FrontendController::class, 'index']);

Route::get('/frontend-template/about', [FrontendController::class, 'about'])->name('about');



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


Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/form', [ForminputController::class, 'index']);
Route::post('/form', [ForminputController::class, 'form']);

Route:: group(['middleware'=> ['auth', 'peran:admin-manager-']], function(){
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('/pesanan/delete/{id}',[PesananController::class, 'destroy']);

    Route::get('/kategoriproduk', [KategoriProdukController::class, 'index']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    Route::get('/kategoriproduk/create', [KategoriProdukController::class, 'create']);
    Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);
    Route::get('/kategoriproduk/delete/{id}', [KategoriProdukController::class, 'destroy']); 
    Route::get('/logout', [DashboardController::class, 'logout']); 

});
});

Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [DashboardFrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});

auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
