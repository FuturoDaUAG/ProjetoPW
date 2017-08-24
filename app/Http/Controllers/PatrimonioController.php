<?php

namespace web\Http\Controllers;

use web\Patrimonio;
use web\Marca;
use web\Http\Requests\PatrimonioRequest;

class PatrimonioController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function listar() {
        $patrimonio = Patrimonio::paginate(10);
        
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    }

    public function prepararAdicionar() {
        $marca = Marca::all();
        return view('patrimonio.adicionar')->with('m', $marca);
    }
    
    public function pesquisar(PatrimonioRequest $request){
        $patrimonio = Patrimonio::where('descricao', 'like', $request-> nome."%")->paginate(10);
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    }

    public function adicionar(PatrimonioRequest $request) {
        $patrimonio = new Patrimonio();
        $patrimonio->descricao = $request-> descricao;
        $patrimonio->valor = $request->valor;
        $patrimonio->numeroempenho = $request->numeroempenho;
        $patrimonio->numeropatrimonio = $request->numeropatrimonio;
        $patrimonio->numeropregao = $request->numeropregao;
        $patrimonio->numeropantigo = $request->numeropantigo;
        $patrimonio->numeronotafiscal = $request->numeronotafiscal;
        $patrimonio->dataaquisicao = $request->dataaquisicao;
        $patrimonio->marca_id = $request->marca_id;
        $patrimonio->save();
        return redirect("patrimonio/");
    }
    
    public function editar(PatrimonioRequest $request){
        $patrimonio = Patrimonio::find($request-> id);
        $marca = Marca::all();
        return view ('patrimonio.editar')->with('p', $patrimonio)->with('m', $marca);
    }
    
    public function atualizar(PatrimonioRequest $request){
        $patrimonio = Patrimonio::find($request -> id);
        $patrimonio->descricao = $request-> descricao;
        $patrimonio->valor = $request->valor;
        $patrimonio->numeroempenho = $request->numeroempenho;
        $patrimonio->numeropatrimonio = $request->numeropatrimonio;
        $patrimonio->numeropregao = $request->numeropregao;
        $patrimonio->numeropantigo = $request->numeropantigo;
        $patrimonio->numeronotafiscal = $request->numeronotafiscal;
        $patrimonio->marca_id = $request->marca_id;
        $patrimonio->update();
        return redirect("patrimonio/");
    }
    
    public function visualizar($id)
    {
        $patrimonio = Patrimonio::find($id);
        return view('patrimonio.visualizar')->with('patrimonio', $patrimonio);
    }
    
    public function prepararTransferir(PatrimonioRequest $request){
        $patrimonio = Patrimonio::find($request -> id);
        $setor = \web\Setor::all();
        $status = \web\Status::all();
        return view('patrimonio.transferir')->with('p', $patrimonio)->with('s', $setor)->with('st', $status);
    }
    
    public function transferir(PatrimonioRequest $request){
        $patrimonio = Patrimonio::find($request -> id);
        $patrimonio->setor()->attach($request -> setor_id, array('dataaquisicao' => $request->dataaquisicao));
        return redirect("patrimonio/");
    }

}
