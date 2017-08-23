<?php

namespace web\Http\Controllers;

 use web\Http\Requests\SolicitacaoRequest;
 use web\Solicitacao;
 use web\Setor;

class SolicitacaoController extends Controller
 
{
    public function prepararAdicionar(SolicitacaoRequest $request){
         $setor = Setor::all();
	return view('solicitacao.adicionar')->with('setors', $setor);
    
    }
    public function adicionar(SolicitacaoRequest $request) {
        $solicitacao = new Solicitacao();
        $solicitacao->nome = $request-> nome;
        $solicitacao->matricula = $request-> matricula;
        $solicitacao->cargo = $request-> cargo;
        $solicitacao->sala = $request-> sala;
        $solicitacao->predio = $request-> predio;
        $solicitacao->ramal = $request-> ramal;
        $solicitacao->curso = $request-> curso;
        $solicitacao->data = $request-> data;
        $solicitacao->descricao = $request-> descricao;
        $solicitacao->setor_id = $request->setor_id;
        $solicitacao->save();
         return redirect("solicitacao/");
}
}