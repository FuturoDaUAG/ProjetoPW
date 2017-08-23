<?php

namespace web\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use web\Patrimonio;
use web\Marca;
use web\Grupo;
use web\Subgrupo;
use web\Http\Requests\PatrimonioRequest;

class PatrimonioController extends Controller {

    public function listar() {
        $patrimonio = Patrimonio::paginate(10);
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    }

    public function prepararAdicionar() {
        $marca = Marca::all();
        $grupo = Grupo::all();
        $subgrupo = Subgrupo::all();
        return view('patrimonio.adicionar')->with('m', $marca)->with('g', $grupo)->with('s', $subgrupo);
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
        $patrimonio->marca_id = $request->marca_id;
        $patrimonio->grupo_id = $request->grupo_id;//adicionado
        $patrimonio->subgrupo_id = $request->subgrupo_id;//adicionado
        $patrimonio->save();
        return redirect("patrimonio/");
    }
    
    public function editar(PatrimonioRequest $request){
        $patrimonio = Patrimonio::find($request-> id);
        $marca = Marca::all();
        $subgrupo = Subgrupo::all();
        return view ('patrimonio.editar')->with('p', $patrimonio)->with('m', $marca);//and with('s',$subgrupo)and with('g',$grupo);
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
        $patrimonio->subgrupo_id = $request->subgrupo_id;
        $patrimonio->update();
        return redirect("patrimonio/");
    }
    
    public function visualizar($id)
    {
        $patrimonio = Patrimonio::find($id);
        return view('patrimonio.visualizar')->with('patrimonio', $patrimonio);
    }
    
    public function remover($id){
        $patrimonio = patrimonio::find($id);
        $patrimonio->delete();
        return redirect()->action('PatrimonioController@listar');
    }

}
