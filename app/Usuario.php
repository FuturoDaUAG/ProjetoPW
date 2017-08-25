<?php

namespace web;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    
    protected $table ='usuarios';
    
    protected $fillable = ['name','email','password','departamento_id','tipousuario_id'];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function servidores()
    {
        return $this->hasMany('web\Servidor');
    }
    public function departamento() {
        return $this->belongsTo('web\Departamento');
    }
    public function tipoUsuario(){
        return $this->belongsTo('web\TipoUsuario','tipousuario_id');
    }
     
}
