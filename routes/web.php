<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    
    /** Formulário de Login */
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.do');

    /** Rotas protegidas */
    Route::group(['middleware' => ['auth']], function() {
        Route::get('home', [AuthController::class, 'home'])->name('home');

        //Direção
        Route::resource('direcao', PrincipalController::class);
    });
    

    /** Sair do sistema */
    Route::get('sair', [AuthController::class, 'logout'])->name('logout');
});
