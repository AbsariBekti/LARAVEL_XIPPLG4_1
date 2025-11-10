<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\LandingController;
use app\http\Controllers\Admin\DashboardController;

Route::get('/', [LandingController::class, 'index'])->name('Landing');

Route::prefix('admin')->group(function () {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});