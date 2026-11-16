<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;

// Halaman Pelanggan (Front-End)
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

// Proses Pemesanan
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

// Halaman Admin Sweet Bakery
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/pesanan', [AdminController::class, 'pesanan'])->name('pesanan');
});

// Halaman CRUD dari Modul
Route::resource('pelanggan', PelangganController::class);
Route::resource('user', UserController::class);
