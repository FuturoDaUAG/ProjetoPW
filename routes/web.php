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

//Servidor
Route::get('/servidor/adicionar', 'ServidorController@adicionar');
Route::post('/servidor/salvar', 'ServidorController@salvar');
Route::get('/servidor/recuperar', 'ServidorController@recuperar');
Route::post('/servidor/atualizar', 'ServidorController@atualizar');
Route::get('/servidor/remover', 'ServidorController@remover');
Route::get('/servidor/listar', 'ServidorController@listar');


