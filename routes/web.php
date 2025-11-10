<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;

// Halaman landing
Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('admin')->name('admin.')->group(function () {
// Halaman dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Resource controller untuk Student
Route::resource('students', StudentController::class);

});