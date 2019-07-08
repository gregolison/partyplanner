<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $fillable=['nome'];

    public function servicos (){
        return $this->belongsToMany('App\Servico');
    }
}
