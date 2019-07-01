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

Route::resource('/internals/servicos', 'ServicosController');

Route::get('/internals/organizador', 'OrganizadorController@list');
Route::post('/internals/organizador', 'OrganizadorController@store');

Route::resource('categorias','CategoriaController');
Route::get('categoria','CategoriaController@index');

Route::resource('eventos','EventoController');
Route::get('evento','EventoController@index');

Route::get('cadastraEvento','EventoController@store');
Route::get('editarEvento','EventoController@update');

Route::get('quadro/{evento}','QuadroController@show');
Route::resource('quadro','QuadroController');
Route::get('quadro/{evento}/edit','QuadroController@edit');