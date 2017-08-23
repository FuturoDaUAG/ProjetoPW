<?php

namespace web\Http\Controllers;

 use web\Http\Requests\SolicitacaoRequest;
 use web\Solicitacao;

class SolicitacaoController extends Controller
 
{
    public function prepararAdicionar(SolicitacaoRequest $request){
		return view('solicitacao.adicionar');
    
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