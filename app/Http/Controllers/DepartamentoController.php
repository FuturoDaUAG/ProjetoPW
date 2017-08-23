<?php

namespace web\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;
use web\Departamento;
use web\Http\Requests\DepartamentoRequest;

class DepartamentoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
      public function lista()
    {
       $departamentos= Departamento::paginate(5);
        return view('departamento.listagem')->withDepartamentos($departamentos);
    }
 
       
   

    public function mostra($id)
    {

        $departamento = Departamento::find($id);
        if(empty($departamento)) {
            return "Esse Departamento não existe";
        }
        return view('departamento.detalhes')->with('d', $departamento);
    }


    public function novo(){

        return view('departamento.formulario');

    }

    public function muda($id){
        $departamento = Departamento::find($id);
        if(empty($departamento)) {
            return "Esse Departamento não existe";
        }
        return view('departamento.form_alterar')->with('d', $departamento);


    }

    

    public function adiciona(DepartamentosRequest $request){

        Departamento::create($request->all());
        return redirect()
            ->action('DepartamentoController@lista')
            ->withInput(Request::only('apelido'));

        

    }

    public function alterar(DepartamentosRequest $request){
        
        Departamento::find($request->input('id'))->update($request->all());
        return redirect()
        ->action('DepartamentoController@lista')
        ->withInput(Request::only('departamento'));

    }


public function remove($id){
        $departamento = Departamento::find($id);
        $departamento->delete();
        return redirect()->action('DepartamentoController@lista');
    }
}
