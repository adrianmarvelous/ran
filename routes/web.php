<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/auth/redirect', [GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/login', function () {
    return view('dashboard.login');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

