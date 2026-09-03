<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');

Auth::routes();

Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
