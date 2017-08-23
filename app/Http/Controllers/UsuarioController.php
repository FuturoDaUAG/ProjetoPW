<?php

namespace web\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use web\Usuario;
use web\Departamento;
use web\Http\Requests\UsuariosRequest;

class UsuarioController extends Controller {


    public function __construct() {
        $this->middleware('auth');
    }

    public function lista() {
        $usuarios = Usuario::paginate(5);
        return view('usuario.listagem')->withUsuarios($usuarios);
    }

    public function mostra($id) {
        $usuario = Usuario::find($id);
        if (empty($usuario)) {
            return "Esse Usuario não existe";
        }
        return view('usuario.detalhes')->with('u', $usuario);
        
class UsuarioController extends Controller
{



    public function lista()
    {
     $usuarios = Usuario::paginate(3);
     return view('usuario.listagem')->withUsuarios($usuarios);
 }
 



 public function mostra($id)
 {

    $usuario = Usuario::find($id);
    if(empty($usuario)) {
        return "Esse Usuario não existe";

    }
    return view('usuario.detalhes')->with('u', $usuario);
}


    public function novo() {

        return view('usuario.formulario');
    }

public function novo(){

    $departamento = Departamento::all();

    return view('usuario.formulario')->with('d', $departamento);

}

public function muda($id){
    $usuario = Usuario::find($id);
    if(empty($usuario)) {
        return "Esse Usuario não existe";

    }
    return view('usuario.form_alterar')->with('u', $usuario);

}
    public function muda($id) {
        $usuario = Usuario::find($id);
        if (empty($usuario)) {
            return "Esse Usuario não existe";
        }
        return view('usuario.form_alterar')->with('u', $usuario);
    }

    public function adiciona(UsuariosRequest $request) {

        Usuario::create($request->all());
        return redirect()
                        ->action('UsuarioController@lista')
                        ->withInput(Request::only('apelido'));
    }

    public function alterar(UsuariosRequest $request) {

        Usuario::find($request->input('id'))->update($request->all());
        return redirect()
                        ->action('UsuarioController@lista')
                        ->withInput(Request::only('apelido'));
    }

    public function remove($id) {
        $usuario = usuario::find($id);
        $usuario->delete();
        return redirect()->action('UsuarioController@lista');
    }





public function adiciona(UsuariosRequest $request){
    $usuario= new Usuario();
  $usuario->apelido = $request->apelido;
  $usuario->email = $request->email;
      $usuario->senha = $request->senha;  
      $usuario->departamento_id = $request->departamento_id;  
      

      $usuario->save();           



    return redirect()
    ->action('UsuarioController@lista')
    ->withInput(Request::only('apelido'));



}

public function alterar(UsuariosRequest $request){

    Usuario::find($request->input('id'))->update($request->all());
    return redirect()
    ->action('UsuarioController@lista')
    ->withInput(Request::only('apelido'));

}


public function remove($id){
    $usuario = usuario::find($id);
    $usuario->delete();
    return redirect()->action('UsuarioController@lista');
}

    //
}
    }
}