<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ComprasController;

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




	Route::get('/compras', [ComprasController::class, 'nomesCompras'])->name('compras_listar');
	Route::get('/compras/cadastro', [ComprasController::class, 'cadastro'])->name('compras_cadastrar');

	Route::get('/compras/novo', [ComprasController::class, 'novo'])->name('compras_novo');

	Route::post('/compras/alterar/{id}', [ComprasController::class, 'alterar'])->name('compras_alterar');
	Route::get('/compras/alterar/{id}', [ComprasController::class, 'telaAlteracao'])->name('compras_tela_alterar');
	Route::get('/compras/excluir/{id}', [ComprasController::class, 'excluir'])->name('compras_excluir');




	Route::get('/login', [UsuariosController::class, 'exibeLogin']);
	Route::post('/tenta_login', [UsuariosController::class, 'tentaLogin']);

	Route::get('/usuario/novo', [UsuariosController::class, 'novo'])->name('usuario_novo');
	Route::post('/usuario/inserir', [UsuariosController::class, 'inserir'])->name('usuario_inserir');

	Route::get('/usuario/editar/{id}', [UsuariosController::class, 'editar'])->name('usuario_editar');
	Route::post('/usuario/alterar/{id}', [UsuariosController::class, 'alterar'])->name('usuario_alterar');

	Route::get('/usuario/excluir/{id}', [UsuariosController::class, 'excluir'])->name('usuario_excluir');


	Route::get('/usuario/lista', [UsuariosController::class, 'tela_principal'])->name('usuario_lista');


