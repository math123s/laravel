<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);


/* Usado para criar grupos */
Route::prefix('/aluno' )->group(function(){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name('aluno.index');
    Route::post('/adicionar', [App\Http\Controllers\AlunoController::class, 'adicionar'])->name('aluno.adicionar');
    Route::post('/remover', [App\Http\Controllers\AlunoController::class, 'remover'])->name('aluno.remover');
    Route::post('/atualizar', [App\Http\Controllers\AlunoController::class, 'atualizar'])->name('aluno.atualizar');
    Route::get('/consultar', [App\Http\Controllers\Principal::class, 'principal'])->name('aluno.consultar');

});

// como acessar?
//para adicionar
//www.xuxa.com.br/aluno/adicionar
//para excluir
//www.xuxa.com.br/aluno/remover
//post == sempre formulario
//get == leva a um site



/* Criando uma rota curso*/
Route::prefix('/curso')->group(function(){
    Route::get('/index', [App\Http\Controllers\CursoController::class, 'index'])->name('curso.index');
    Route::post('/adicionar', [App\Http\Controllers\CursoController::class, 'adicionar'])->name('curso.adicionar');
    Route::post('/remover', [App\Http\Controllers\CursoController::class, 'remover'])->name('curso.remover');
    Route::post('/atualizar', [App\Http\Controllers\CursoController::class, 'atualizar'])->name('curso.atualizar');
    Route::get('/consultar', [App\Http\Controllers\Principal::class, 'principal'])->name('curso.consultar');
});


// Criando uma rota professor

Route::prefix('/professor')->group(function(){
    Route::get('/index', [App\Http\Controllers\ProfessorController::class, 'index'])->name('professor.index');
    Route::post('/adicionar', [App\Http\Controllers\ProfessorController::class, 'adicionar'])->name('professor.adicionar');
    Route::post('/remover', [App\Http\Controllers\ProfessorController::class, 'remover'])->name('professor.remover');
    Route::post('/atualizar', [App\Http\Controllers\ProfessorController::class, 'atualizar'])->name('professor.atualizar');
    Route::get('/consultar', [App\Http\Controllers\Principal::class, 'principal'])->name('professor.consultar');
});

// Criando uma rota componente

Route::prefix('/componente')->group(function(){
    Route::get('/index', [App\Http\Controllers\ComponenteController::class, 'index'])->name('componente.index');
    Route::post('/adicionar', [App\Http\Controllers\ComponenteController::class, 'adicionar'])->name('componente.adicionar');
    Route::post('/remover', [App\Http\Controllers\ComponenteController::class, 'remover'])->name('componente.remover');
    Route::post('/atualizar', [App\Http\Controllers\ComponenteController::class, 'atualizar'])->name('componente.atualizar');
    Route::get('/consultar', [App\Http\Controllers\Principal::class, 'principal'])->name('componente.consultar');
});


// Criando uma rota admionistrador
Route::prefix('/administrador')->group(function(){
    Route::get('/index', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administrador.index');
    Route::post('/adicionar', [App\Http\Controllers\AdministradorDController::class, 'adicionar'])->name('administrador.adicionar');
    Route::post('/remover', [App\Http\Controllers\AdministradorDController::class, 'remover'])->name('administrador.remover');
    Route::post('/atualizar', [App\Http\Controllers\AdministradorDController::class, 'atualizar'])->name('administrador.atualizar');
    Route::get('/consultar', [App\Http\Controllers\Principal::class, 'principal'])->name('administrador.consultar');
});
            