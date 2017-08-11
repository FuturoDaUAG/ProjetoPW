<?php


namespace App;
namespace web;
use Illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    protected $table ='patrimonios';
    protected $fillable = ['descricao','valor','numeropatrimonio', 'numeropantigo', 'numeropregao', 'numeronotafiscal', 'numeroempenho', 'marca_id'];
    
    public function marca(){
        return $this->belongsTo('\web\Marca');
    }
}
