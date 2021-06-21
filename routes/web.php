<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtendenteController;
use App\Http\Controllers\ChamadaController;
use App\Http\Controllers\AtendimentoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/atendente', [AtendenteController::class, 'list']);
Route::get('/chamada', [ChamadaController::class, 'list']);
Route::get('/atendente/criar', [AtendenteController::class, 'create']);
Route::post('/atendente/criar', [AtendenteController::class, 'store'])->name('atendente.criar') ;
Route::get('/chamada/criar', [ChamadaController::class, 'create']);
Route::post('/chamada/criar', [ChamadaController::class, 'store'])->name('chamada.criar') ;
Route::get('/', [AtendimentoController::class, 'list']);
Route::get('/atendimento/atualizar/{idAtendimento}', [AtendimentoController::class, 'finalizar_atendimento']);






