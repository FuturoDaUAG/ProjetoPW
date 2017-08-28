<?php


namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patrimonio extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $table ='patrimonios';
    protected $fillable = ['descricao','valor','numeropatrimonio', 'numeropantigo', 'numeropregao', 'numeronotafiscal', 'numeroempenho', 'marca_id'];
    
    public function marca(){
        return $this->belongsTo('\web\Marca');
    }
    
    public function setor(){
        return $this->belongsToMany('\web\Setor');
    }
}
