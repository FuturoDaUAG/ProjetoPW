<?php

namespace web\Http\Controllers;

use web\Http\Requests\ServidorRequest;
//use web\Http\Requests\Request;
use web\Servidor;
use Request;

class ServidorController extends Controller
{

    public function novo()
    {
        return view('servidor/novo');
    }

    public function salvar(ServidorRequest $request)
    {
        $servidor = new Servidor();
        $servidor->create($request->all());
        return redirect()
            ->action('ServidorController@listar')
            ->withInput(Request::only('nome'));
    }

    public function recuperar($id)
    {
        $servidor = Servidor::find($id);
        return view('servidor.recuperar')->with('servidor', $servidor);
    }

    public function alterar(ServidorRequest $request)
    {
        $servidor = Servidor::find($request->id);
        $servidor->update($request->all());
        return redirect()
            ->action('ServidorController@listar')
            ->withInput(Request::only('matricula'));
    }

    public function remover($id)
    {
        $servidor = Servidor::find($id);
        $servidor->delete();
        return redirect("/servidor/listar");
    }

    public function visualizar($id)
    {
        $servidor = Servidor::find($id);
        return view('servidor.visualizar')->with('servidor', $servidor);
    }

    public function listar()
    {
        $servidores = Servidor::paginate(5);
        return view('servidor/listar', ['servidores' => $servidores]);
    }
}
