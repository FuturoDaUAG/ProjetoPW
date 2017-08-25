<?php

namespace web;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    //
    
    protected $table ='tipousuarios';
    
    protected $fillable = ['tipousuario','modulo_id'];
    
    public function usuarios(){
        return $this->belongsToMany('web\Usuario');
    }
    public function permissoes(){
        return $this->belongsToMany('web\Permissao');
    }
    public function modulo(){
        return $this->belongsTo('web\Modulo');
    }
}
