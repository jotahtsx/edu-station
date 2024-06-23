<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    
    /** Formulário de Login */
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.do');

    /** Rotas protegidas */
    Route::group(['middleware' => ['auth']], function() {
        Route::get('home', [AuthController::class, 'home'])->name('home');
    });
    

    /** Sair do sistema */
    Route::get('sair', [AuthController::class, 'logout'])->name('logout');
});
