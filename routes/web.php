<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\controllers\LandingController;
use app\http\Controllers\Admin\DashboardController;

Route::get('/', [LandingController::class, 'index'])->name('Landing');

Route::prefix('admin')->group(function () {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> bff4f3e9c22a9cba560382400f339d3a2d793b44
