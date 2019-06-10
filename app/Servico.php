<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'name',
        'email',
        'cnpj',
        'senha',
        'categoria'
    ];

  //  public $rules = [

//    ];
}
