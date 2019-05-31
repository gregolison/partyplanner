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

Route::view('/', 'welcome');
Route::view('cadastro', 'cadastro');
Route::view('listagem', 'listagem');

Route::get('servicos', 'ServicosController@list');
Route::post('servicos', 'ServicosController@store');

Route::get('organizador', 'OrganizadorController@list');
Route::post('organizador', 'OrganizadorController@store');
