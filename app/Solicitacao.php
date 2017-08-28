<?php

namespace web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitacao extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
     protected $fillable = [
        'nome','matricula','cargo','sala','predio','ramal','curso','data','descricao', 'setor_id'
    ];
    
    public function setor()
    {
        return $this->belongsTo('web\Setor');
    }
    
}
