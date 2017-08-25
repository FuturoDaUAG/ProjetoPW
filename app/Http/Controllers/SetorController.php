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
        $setor->descricao = $request->descricao;
        $setor->curso_id = $request->curso_id;
        //$setor->create($request->all());
        $servidor = Servidor::where('nome', 'like', strtolower($request->servidor))->first();
        $sala = Sala::where('nome', 'like', strtolower($request->sala))->first();

        if($servidor == null){
            $servidor = new Servidor();
            $servidor->nome = $request->nome;
            $servidor->save();
        }

        if($sala == null) {
            $sala = new Sala();
            $sala->descricao = $request->desc_sala;
            $sala->ramal = $request->ramal;
            $sala->predio_id = $request->predio_id;
            $sala->save();
        }
        $setor->servidor_id = $servidor->id;
        $setor->sala_id = $sala->id;

        $setor->save();

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
        $setores = Setor::paginate(5);
        return view('setor.listar', ['setores' => $setores]);
    }

}
