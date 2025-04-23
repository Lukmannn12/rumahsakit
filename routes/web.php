<?php

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dokter\DokterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpesialisasiController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
})->middleware(['auth', 'verified'])->name('dokter.dashboard');


Route::resource('datadokter', UserController::class)
    ->middleware(['auth', 'verified']);

Route::resource('spesialisasi', SpesialisasiController::class)
    ->middleware(['auth', 'verified']);


Route::resource('profiledokter', DokterController::class)
    ->middleware(['auth', 'verified']);
    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
