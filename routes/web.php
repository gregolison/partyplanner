<?php

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


Route::view('/', 'home');
Route::view('cadastro', 'cadastro');
Route::view('listagem', 'listagem');

Route::get('/procurarservico', 'PesquisaServicoController@search')->name('search');
//antigas rotas de serviços que são gay
//Route::get('servicos', 'ServicosController@create');
//Route::post('servicos', 'ServicosController@store');

//Route::get('eventos', 'EventoController@create');
//Route::post('eventos.store', 'EventoController@store');

// Nova rota de serviços, reduzindo o codigo sidi gay
Route::resource('/internals/servicos', 'ServicosController');

Route::get('/internals/organizador', 'OrganizadorController@list');
Route::post('/internals/organizador', 'OrganizadorController@store');

Route::resource('categorias','CategoriaController');
Route::get('categoria','CategoriaController@index');

Route::resource('eventos','EventoController');
Route::get('evento','EventoController@index');

Route::get('cadastraEvento','EventoController@store');

Route::get('quadro/{servico}/1','QuadroController@show');
Route::resource('quadro','QuadroController');

//Route::post('cadastraEvento', 'EventoController@store');

//Route::post('cadastraEventos', 'EventoController@store');