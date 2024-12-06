<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cadastro', [UserController::class, 'create'])->name('cadastro');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');