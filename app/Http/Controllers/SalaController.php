<?php

namespace web\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Request;
use web\Sala;
use web\Http\Requests\SalaRequest;

class SalaController extends Controller
{
      public function lista()
    {
       $salas= Sala::paginate(5);
        return view('sala.listagem')->withSalas($salas);
    }
 
       
   

    public function mostra($id)
    {

        $sala = Sala::find($id);
        if(empty($sala)) {
            return "Esse Sala não existe";
        }
        return view('sala.detalhes')->with('d', $sala);
    }


    public function novo(){

        return view('sala.formulario');

    }

    public function muda($id){
        $sala = Sala::find($id);
        if(empty($sala)) {
            return "Esse Sala não existe";
        }
        return view('sala.form_alterar')->with('d', $sala);


    }

    

    public function adiciona(SalasRequest $request){

        Sala::create($request->all());
        return redirect()
            ->action('SalaController@lista')
            ->withInput(Request::only('apelido'));

        

    }

    public function alterar(SalasRequest $request){
        
        Sala::find($request->input('id'))->update($request->all());
        return redirect()
        ->action('SalaController@lista')
        ->withInput(Request::only('sala'));

    }


public function remove($id){
        $sala = Sala::find($id);
        $sala->delete();
        return redirect()->action('SalaController@lista');
    }
}
