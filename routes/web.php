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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste', function() {
	echo 'testando';	
});

//Usuário
Route::get('/usuario', 'UsuarioController@lista');
Route::get('/usuario/detalhes/{id}', 'UsuarioController@mostra')->where('id', '[0-9]+');
Route::get('/usuario/novo', 'UsuarioController@novo');
Route::post('/usuario/adiciona', 'UsuarioController@adiciona');
Route::get('/usuario/remove/{id}','UsuarioController@remove');
Route::get('/usuario/muda/{id}','UsuarioController@muda')->where('id', '[0-9]+');
Route::post('/usuario/muda/alterar', 'UsuarioController@alterar');

//Servidor
Route::get('/servidor/adicionar', 'ServidorController@adicionar');
Route::post('/servidor/salvar', 'ServidorController@salvar');
Route::get('/servidor/recuperar/{id}', 'ServidorController@recuperar');
Route::post('/servidor/atualizar', 'ServidorController@atualizar');
Route::get('/servidor/remover/{id}', 'ServidorController@remover');
Route::get('/servidor/listar', 'ServidorController@listar');
