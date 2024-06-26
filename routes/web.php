<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    /** Formulário de Login */
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.do');

    /** Rotas protegidas */
    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', [AuthController::class, 'home'])->name('home');

        //Direção
        Route::get('direcao', [PrincipalController::class, 'index'])->name('direcao.index');

        // Mostrar formulário para cadastrar um diretor
        Route::get('direcao/cadastrar', [PrincipalController::class, 'create'])->name('direcao.create');
    
        // Cadastrar um diretor
        Route::post('direcao', [PrincipalController::class, 'store'])->name('direcao.store');
    
        // Mostrar um diretor específico pelo id
        Route::get('direcao/{direcao}', [PrincipalController::class, 'show'])->name('direcao.show');
    
        // Mostrar formulário para editar um diretor
        Route::get('direcao/{direcao}/editar', [PrincipalController::class, 'edit'])->name('direcao.edit');
    
        // Atualizar diretor
        Route::put('direcao/{direcao}', [PrincipalController::class, 'update'])->name('direcao.update');
    
        // Deletar um diretor
        // Nota: Precisa-se fazer uma validação de ACL antes de deletar um usuário tão importante
        Route::delete('direcao/{direcao}', [PrincipalController::class, 'destroy'])->name('direcao.destroy');
    });


    /** Sair do sistema */
    Route::get('sair', [AuthController::class, 'logout'])->name('logout');
});
