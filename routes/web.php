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
//       raiz  metodos http Pesquisar
Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('principal');
Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('sobre');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('contato');
//tem que ser toLowcase pq é fução
Route::get('/desenvolvimento-sistemas', [App\Http\Controllers\Principal::class, 'desenvolvimentoSistemas'])->name('desenvolvimentoSistemas');
Route::get('/administracao', [App\Http\Controllers\Principal::class, 'administracao'])->name('administracao');
Route::get('/meio-ambiente', [App\Http\Controllers\Principal::class, 'meioAmbiente'])->name('meioAmbiente');

