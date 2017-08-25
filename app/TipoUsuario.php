<?php

namespace web;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{

    protected $table ='tiposusuarios';
    
    protected $fillable = ['tipousuario'];
    
    public function usuarios(){
        return $this->hasMany('web\Usuario');
    }
    public function permissoes(){
        return $this->belongsToMany('web\Permissao');
    }
    public function modulo(){
        return $this->belongsTo('web\Modulo');
    }

}
