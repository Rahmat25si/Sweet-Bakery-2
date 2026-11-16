<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;

// Halaman Utama & Daftar Menu Sweet Bakery
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

// Proses Pemesanan (terhubung ke QuestionController modul)
Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');

// Halaman Admin (dari modul)
Route::resource('pelanggan', PelangganController::class);
Route::resource('user', UserController::class);
