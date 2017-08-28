<?php

namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setor extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'descricao', 'sala_id', 'curso_id', 'servidor_id'
    ];

    public function curso()
    {
        return $this->belongsTo('web\Curso');
    }

    public function servidor()
    {
        return $this->belongsTo('web\Servidor');
    }

    public function sala()
    {
        return $this->belongsTo('web\Sala');
    }
    
    public function patrimonio()
    {
        return $this->belongsToMany('\web\Patrimonio');
    }
}
