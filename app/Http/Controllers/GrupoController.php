<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace web\Http\Controllers;

use Illuminate\Http\Request;
use web\Grupo;

class GrupoController extends Controller
{
    public function prepararAdicionar(){
        return view('grupo.adicionar');
    }
    
    public function adicionar(Request $request){
        $grupo = new Grupo();
        $grupo -> descricao = $request -> descricao;
        $grupo -> save();
        return redirect('/patrimonio');
    }
    
    public function listar(){
        $grupo = Grupo::all();
        return view('grupo.listar');
    }  
    
}

