<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

	Route::get('/', function () {
	    return view('welcome');
	});

 	Route::get('/clientes', [ClientesController::class, 'nomesClientes'])->name('clientes_listar');
	Route::get('/clientes/cadastro', [ClientesController::class, 'cadastro'])->name('clientes_cadastrar');

	Route::get('/clientes/novo', [ClientesController::class, 'novo'])->name('cliente_novo');

	Route::post('/clientes/alterar/{id}', [ClientesController::class, 'alterar'])->name('clientes_alterar');
	Route::get('/clientes/alterar/{id}', [ClientesController::class, 'telaAlteracao'])->name('clientes_tela_alterar');
	Route::get('/clientes/excluir/{id}', [ClientesController::class, 'excluir'])->name('clientes_excluir');


