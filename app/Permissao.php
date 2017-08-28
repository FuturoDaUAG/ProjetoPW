<?php

namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permissao extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $table ='permissoes';
    
    protected $fillable = ['permissao'];
    
    public function tiposUsuarios(){
        return $this->belongsToMany('web\TipoUsuario');
    }
    public function modulo(){
        return $this->belongsTo('web\Modulo');
    }
}
