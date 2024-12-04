<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController; // Pastikan controller MahasiswaController sudah diimport
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk menampilkan form input data mahasiswa
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    
    // Route untuk menyimpan data mahasiswa
    Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    
    // Optional: Route untuk melihat daftar mahasiswa (jika sudah ada)
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
});

// Require rute otentikasi (seperti login, register)
require __DIR__.'/auth.php';
