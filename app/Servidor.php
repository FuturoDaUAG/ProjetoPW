<?php

namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servidor extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'nome','cargo','matricula', 'usuario_id'
    ];

    protected $table ='servidors';

    public function usuario()
    {
        return $this->belongsTo('web\Usuario');

    }

    public function setor()
    {
        return $this->hasMany('web\Setor');
    }
}
