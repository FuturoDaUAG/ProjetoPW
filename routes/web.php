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
    return view('index');
});

Route::get('/index', function () {
   return view('index');
});

//Usuário
Route::get('/usuario', 'UsuarioController@lista');
Route::get('/usuario/detalhes/{id}', 'UsuarioController@mostra')->where('id', '[0-9]+');
Route::get('/usuario/novo', 'UsuarioController@novo');
Route::post('/usuario/adiciona', 'UsuarioController@adiciona');
Route::get('/usuario/remove/{id}','UsuarioController@remove');
Route::get('/usuario/muda/{id}','UsuarioController@muda')->where('id', '[0-9]+');
Route::post('/usuario/muda/alterar', 'UsuarioController@alterar');

/*------------------------------ Departamento ---------------------------------------------------*/

Route::get('/departamento', 'DepartamentoController@lista');
Route::get('/departamento/novo', 'DepartamentoController@novo');
Route::post('/departamento/adiciona', 'DepartamentoController@adiciona');
Route::get('/departamento/muda/{id}','DepartamentoController@muda')->where('id', '[0-9]+');
Route::get('/departamento/detalhes/{id}','DepartamentoController@mostra')->where('id', '[0-9]+');
Route::post('/departamento/muda/alterar', 'DepartamentoController@alterar');

/*------------------------------ Patrimônio ---------------------------------------------------*/
Route::get('/patrimonio', 'PatrimonioController@listar');
Route::get('/patrimonio/orderAlfa', 'PatrimonioController@ordemAlfabetica');
Route::get('/patrimonio/orderEmpenho', 'PatrimonioController@ordemNumeroEmpenho');
Route::get('/patrimonio/orderPatrimonio', 'PatrimonioController@ordemNumeroPatrimonio');
Route::get('/patrimonio/pesquisar', 'PatrimonioController@pesquisar');
Route::get('/patrimonio/adicionar', 'PatrimonioController@prepararAdicionar');
Route::post('/patrimonio/adicionar', 'PatrimonioController@adicionar');
Route::get('/patrimonio/editar/{id}','PatrimonioController@editar');
Route::post('/patrimonio/atualizar', 'PatrimonioController@atualizar');
Route::get('/patrimonio/visualizar/{id}', 'PatrimonioController@visualizar');
Route::get('/patrimonio/remover/{id}', 'PatrimonioController@remover');
Route::get('/patrimonio/transferir/{id}', 'PatrimonioController@prepararTransferir');
Route::post('/patrimonio/transferir', 'PatrimonioController@transferir');
Route::get('/patrimonio/historico/{id}', 'PatrimonioController@historico');

/*------------------------------ Marca --------------------------------------------------------*/
Route::get('/marca', 'MarcaController@listar');
Route::get('/marca/adicionar','MarcaController@prepararAdicionar');
Route::post('/marca/adicionar', 'MarcaController@adicionar');

//Servidor
Route::get('/servidor/novo', 'ServidorController@novo');
Route::post('/servidor/salvar', 'ServidorController@salvar');
Route::get('/servidor/recuperar/{id}', 'ServidorController@recuperar');
Route::post('/servidor/recuperar/alterar/', 'ServidorController@alterar');
Route::get('/servidor/remover/{id}', 'ServidorController@remover');
Route::get('/servidor/visualizar/{id}', 'ServidorController@visualizar');
Route::get('/servidor/listar', 'ServidorController@listar');
/*------------------------------ Sala ---------------------------------------------------*/
Route::get('/sala', 'SalaController@listar');
Route::get('/sala/novo', 'SalaController@novo');
Route::get('/sala/muda/{id}', 'SalaController@muda')->where('id', '[0-9]+');
Route::get('/sala/detalhes/{id}', 'SalaController@mostra')->where('id', '[0-9]+');
Route::post('/sala/adicionar', 'SalaController@adicionar');
Route::get('/sala/remover/{id}','SalaController@remover');
Route::post('/sala/muda/atualizar/', 'SalaController@atualizar');
/*------------------------------ Predio ---------------------------------------------------*/
Route::get('/predio', 'PredioController@listar');
Route::get('/predio/novo', 'PredioController@novo');
Route::get('/predio/muda/{id}', 'PredioController@muda')->where('id', '[0-9]+');
Route::get('/predio/detalhes/{id}', 'PredioController@mostra')->where('id', '[0-9]+');
Route::post('/predio/adicionar', 'PredioController@adicionar');
Route::get('/predio/remover/{id}','PredioController@remover');
Route::post('/predio/muda/atualizar', 'PredioController@atualizar');

//Setor
Route::get('/setor/novo', 'SetorController@novo');
Route::post('/setor/salvar', 'SetorController@salvar');
Route::get('/setor/recuperar/{id}', 'SetorController@recuperar');
Route::post('/setor/recuperar/alterar/', 'SetorController@alterar');
Route::get('/setor/remover/{id}', 'SetorController@remover');
Route::get('/setor/visualizar/{id}', 'SetorController@visualizar');
Route::get('/setor/listar', 'SetorController@listar');


Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');