<?php

use App\Http\Controllers\AlertController;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfilController;

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
Route::get('/download', [DownloadController::class, 'download'])->name('file.download');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login/proses', 'proses');
    Route::get('/logout', 'logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekUserLogin:1']], function () {
        Route::get('/admin/profil/{id}', [ProfilController::class, 'index'])->name('admin_profil');
        Route::post('/admin/profil/update', [ProfilController::class, 'update'])->name('update_profil');
        Route::post('/admin/profil/validate-password', [ProfilController::class, 'validatePassword']);


        Route::post('/products/delete/{id}', [AlertController::class, 'index']);

        Route::resource('beranda', Beranda::class);
        Route::resource('products', ProductController::class);
    });
    Route::group(['middleware' => ['CekUserLogin:2']], function () {
        Route::resource('kasir', Kasir::class);
    });
});
