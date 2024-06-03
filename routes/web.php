<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/add', [DashboardController::class, 'add']);

Route::get('/edit', [DashboardController::class, 'edit']);

Route::get('/about', [AboutController::class, 'about']);
