<?php

namespace web\Http\Controllers;

use web\Http\Requests\ServidorRequest;
use web\Servidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServidorController extends Controller
{

    public function adicionar()
    {
        return view('servidor/adicionar');
    }

    public function salvar(ServidorRequest $request)
    {

        $servidor = new Servidor();
        $servidor->create($request->all());

        \Session::flash('msg_sucesso', 'Servidor cadastrado com sucesso !!');


        return redirect('/servidor/adicionar');
    }

    public function recuperar(ServidorRequest $request)
    {
        $servidor = Servidor::find($request->id);
        return view('servidor/recuperar', ['servidor'=>$servidor]);

    }

    public function atualizar(ServidorRequest $request)
    {
        $servidor = Servidor::find($request->id);
        $servidor->nome = $request->nome;
        $servidor->cargo = $request->cargo;
        $servidor->matricula = $request->matricula;

        $servidor->update();
        return redirect('/servidor/listar');
    }

    public function remover(ServidorRequest  $request)
    {
        $servidor = Servidor::find($request->id);
        $servidor->delete();
        return redirect("/servidor/listar");
    }

    public function listar()
    {
        $servidores = Servidor::all();
        return view('servidor/listar', ['servidores' => $servidores]);
    }


}
