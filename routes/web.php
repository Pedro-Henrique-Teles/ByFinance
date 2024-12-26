<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\UserController;

// Rotas de Cadastro de Usuário
Route::get('/cadastro', [UserController::class, 'create'])->name('cadastro.create'); // GET para exibir o formulário
Route::post('/cadastro/create', [UserController::class, 'store'])->name('cadastro.store');  // POST para salvar os dados

// Rotas de Login e Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login/auth', [AuthController::class, 'authUser'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas Protegidas por Middleware de Autenticação
Route::middleware(['auth'])->prefix('financeiro')->group(function () {
    // Página principal do financeiro
    Route::get('/', [FinanceiroController::class, 'show'])->name('financeiro');

    // Rotas Modal Cadastro de Conta
    Route::get('/contas', [ContaController::class, 'pageFinanceiro'])->name('conta.create');
    Route::post('/contas/create', [ContaController::class, 'store'])->name('conta.store');
});