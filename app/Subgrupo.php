<?php

namespace web;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subgrupo extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
