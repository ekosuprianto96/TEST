<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SalesOrderController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [RegisterController::class, 'show'])->name('show.register');
    Route::post('/register', [RegisterController::class, 'store'])->name('store.register');
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('authenticate.login');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard')->middleware('auth');

Route::prefix('produk')->name('produk.')->middleware('auth')->group(function () {
    Route::get('', [ProdukController::class, 'show'])->name('show');
    Route::post('', [ProdukController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ProdukController::class, 'showEdit'])->name('showedit');
    Route::post('/edit/{id}', [ProdukController::class, 'edit'])->name('edit');
    Route::get('/delete/{id}', [ProdukController::class, 'destroy'])->name('destroy');
});
Route::prefix('pelanggan')->name('pelanggan.')->middleware('auth')->group(function () {
    Route::get('', [PelangganController::class, 'show'])->name('show');
    Route::post('', [PelangganController::class, 'store'])->name('store');
    Route::get('/add', [PelangganController::class, 'add'])->name('add');
    Route::get('/edit/{id}', [PelangganController::class, 'showEdit'])->name('showedit');
    Route::post('/edit/{id}', [PelangganController::class, 'edit'])->name('edit');
    Route::get('/delete/{id}', [PelangganController::class, 'destroy'])->name('destroy');
});
Route::prefix('penjualan')->name('penjualan.')->middleware('auth')->group(function () {
    Route::get('', [PenjualanController::class, 'show'])->name('show');
    Route::get('/delete/{id}', [PenjualanController::class, 'destroy'])->name('destroy');
});
Route::prefix('salesorder')->name('salesorder.')->middleware('auth')->group(function () {
    Route::get('', [SalesOrderController::class, 'show'])->name('show');
    Route::post('', [SalesOrderController::class, 'store'])->name('store');
});
