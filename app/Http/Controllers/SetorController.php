<?php

namespace web\Http\Controllers;

use web\Curso;
use web\Http\Requests\SetorRequest;
use web\Http\Requests\PatrimonioRequest;
use web\Predio;
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
        $predios = Predio::all();
        return view('setor.novo', ['salas' => $salas, 'servidores' => $servidores, 'cursos' => $cursos, 'predios' => $predios]);
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

    public function pesquisar(PatrimonioRequest $request){
        $setores = Setor::where('descricao', 'like', "%".$request->nome."%")->paginate(10);
        return view('setor.listar', ['setores' => $setores]);
    }

    public function listar()
    {
        $setores = Setor::paginate(10);
        return view('setor.listar', ['setores' => $setores]);
    }

    public function ordemAlfabetica() {
        $setores = Setor::orderBy('descricao')->paginate(10);
        return view('setor.listar')->withSetores($setores);
    }

    public function ordemResponsavel() {
        $setores = Setor::orderBy('servidor_id')->paginate(10);
        return view('setor.listar')->withSetores($setores);
    }

    public function ordemCurso() {
        $setores = Setor::orderBy('curso_id')->paginate(10);
        return view('setor.listar')->withSetores($setores);
    }

}
