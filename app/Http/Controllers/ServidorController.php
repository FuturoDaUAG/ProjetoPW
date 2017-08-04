<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServidorController extends Controller
{

    public function adicionar()
    {
        return view('servidor/adicionar');
    }

    public function salvar(Request $request)
    {
        /*
        $sevidor = new Servidor();
        $sevidor = $sevidor->create($request->all());

        \Session::flash('msg_sucesso', 'Cliente cadastrado com sucesso !!');
        */

        return redirect('/servidor/adicionar');
    }

    public function recuperar(Request $request)
    {
        //$servidor = Servidor::find($request->id);
        //return view('servidor/recuperar', ['servidor'=>$servidor]);

    }

    public function atualizar(Request $request)
    {
        //$servidor = Servidor::find($request->id);
        //$servidor = $servidor->update($request->all());
        //$servidor->cpf = $request->cpf;
        //$servidor->update();
        return redirect('/servidor/listar');
    }

    public function remover(Request $request)
    {
        //$servidor = Servidor::find($request->id);
        //$servidor->delete();
        return redirect("/servidor/listar");
    }

    public function listar()
    {
        //$servidores = Servidor::all();
        //return view('servidor/listar', ['servidores' => $servidores]);
    }

}
