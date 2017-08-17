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
Route::get('/servidor/novo', 'ServidorController@novo');
Route::post('/servidor/salvar', 'ServidorController@salvar');
Route::get('/servidor/recuperar/{id}', 'ServidorController@recuperar');
Route::post('/servidor/recuperar/alterar/', 'ServidorController@alterar');
Route::get('/servidor/remover/{id}', 'ServidorController@remover');
Route::get('/servidor/visualizar/{id}', 'ServidorController@visualizar');
Route::get('/servidor/listar', 'ServidorController@listar');

//Setor
Route::get('/setor/novo', 'SetorController@novo');
Route::post('/setor/salvar', 'SetorController@salvar');
Route::get('/setor/recuperar/{id}', 'SetorController@recuperar');
Route::post('/setor/recuperar/alterar/', 'SetorController@alterar');
Route::get('/setor/remover/{id}', 'SetorController@remover');
Route::get('/setor/visualizar/{id}', 'SetorController@visualizar');
Route::get('/setor/listar', 'SetorController@listar');




