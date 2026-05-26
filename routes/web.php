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




