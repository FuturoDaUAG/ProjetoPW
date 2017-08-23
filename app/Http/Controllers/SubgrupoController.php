<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace web\Http\Controllers;

use Illuminate\Http\Request;
use web\Subgrupo;
use web\Grupo;

class SubgrupoController extends Controller
{
    public function prepararAdicionar(){
        $grupo = Grupo::all();
        return view('subgrupo.adicionar') ->with('g',$grupo);
    }
    public function adicionar(Request $request){
        $subgrupo = new Subgrupo();
        $subgrupo -> descricao = $request -> descricao;
        $subgrupo->grupo_id = $request->grupo_id;
        $subgrupo -> save();
        return redirect('/patrimonio');
    }
    
    public function listar(){
        $subgrupo = Subgrupo::all();
        return view('subgrupo.listar');
    }  
    
}

