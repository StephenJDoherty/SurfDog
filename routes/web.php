<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SurfShopController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('reviews', [ReviewController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('reviews');

Route::get('surfshop', [SurfShopController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('surfshop');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
