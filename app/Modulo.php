<?php



namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Modulo extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $table ='modulos';
    
    protected $fillable = ['modulo'];
    
    public function permissoes(){
        return $this->hasMany('web\Permissao');
    }
    public function tiposUsuarios(){
        return $this->hasMany('web\TipoUsuario');
    }
}
