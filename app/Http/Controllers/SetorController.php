<?php

namespace web\Http\Controllers;

use web\Curso;
use web\Http\Requests\SetorRequest;
use web\Sala;
use web\Servidor;
use web\Setor;
use Request;

class SetorController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function novo()
    {
        $salas = Sala::all();
        $servidores = Servidor::all();
        $cursos = Curso::all();
        return view('setor.novo', ['salas' => $salas, 'servidores' => $servidores, 'cursos' => $cursos]);
    }

    public function salvar(SetorRequest $request)
    {
        $setor = new Setor();
        $setor->create($request->all());
        return redirect()
            ->action('SetorController@listar')
            ->withInput(Request::only('descricao'));
    }

    public function recuperar($id)
    {
        $setor = Setor::find($id);
        $salas = Sala::all();
        $servidores = Servidor::all();
        $cursos = Curso::all();
        return view('setor.recuperar', ['setor' => $setor, 'salas' => $salas, 'servidores' => $servidores, 'cursos' => $cursos]);
    }

    public function alterar(SetorRequest $request)
    {
        $setor = Setor::find($request->id);
        $setor->update($request->all());
        return redirect()
            ->action('SetorController@listar')
            ->withInput($request->only('curso_id'));
    }

    public function remover($id)
    {
        $setor = Setor::find($id);
        $setor->delete();
        return redirect("setor/listar");
    }

    public function visualizar($id)
    {
        $setor = Setor::find($id);
        return view('setor.visualizar')->with('setor', $setor);
    }

    public function listar()
    {
        $setores = Setor::paginate(5);
        return view('setor.listar', ['setores' => $setores]);
    }
}
