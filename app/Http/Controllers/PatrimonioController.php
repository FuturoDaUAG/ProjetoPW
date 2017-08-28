<?php

namespace web\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use web\Patrimonio;
use web\Marca;
use web\Grupo;
use web\Subgrupo;
use web\Http\Requests\PatrimonioRequest;
use Illuminate\Support\Facades\DB;

class PatrimonioController extends Controller {

    
    public function listar() {
        $patrimonio = Patrimonio::paginate(10);
        
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    }

    public function prepararAdicionar() {
        $marca = Marca::all();
        return view('patrimonio.adicionar')->with('m', $marca);
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
        $patrimonio->save();
        return redirect("patrimonio/");
    }
    
    public function editar(PatrimonioRequest $request){
        $patrimonio = Patrimonio::find($request-> id);
        return view ('patrimonio.editar')->with('p', $patrimonio);
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
        $patrimonio->status()->attach($request->status_id, ['data' => $request->dataaquisicao]);
        return redirect("patrimonio/");
    }
    
    public function ordemAlfabetica() {
        $patrimonio = Patrimonio::orderBy('descricao')->paginate(10);
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    
        
    }
    public function remover($id){
        $patrimonio = patrimonio::find($id);
        $patrimonio->delete();
        return redirect()->action('PatrimonioController@listar');
    }


    public function ordemNumeroPatrimonio() {
        $patrimonio = Patrimonio::orderBy('numeropatrimonio')->paginate(10);
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    }
    
    public function ordemNumeroEmpenho() {
        $patrimonio = Patrimonio::orderBy('numeroempenho')->paginate(10);
        return view('patrimonio.listagem')->withPatrimonio($patrimonio);
    }
    
    public function historico($id)
    {
        $patrimonio = DB::select(DB::raw("SELECT patrimonios.descricao as nomep, setors.descricao as nomesetor, statuses.descricao, patrimonio_status.data "
                . "FROM setors, patrimonios, patrimonio_setor, statuses, patrimonio_status "
                . "WHERE patrimonio_status.patrimonio_id = patrimonios.id and patrimonio_status.status_id = statuses.id and patrimonios.id =".$id." and patrimonio_setor.patrimonio_id = patrimonios.id and setors.id = patrimonio_setor.setor_id"));
        return view('patrimonio.historico')->with('patrimonio', $patrimonio);
    }

}
