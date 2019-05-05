<?php

namespace App\Http\Controllers;

use \App\Servico;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function list()
    {
       
        $servicos = Servico::all();

        

        return view('internals/servicos', [
            'servicos' => $servicos,
        ]);
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'cnpj' => 'required|min:14',
            'senha' => 'required|min:8|max:16'
        ]);


        $servico = new Servico();
        $servico->name = request('name');
        $servico->email = request('email');
        $servico->cnpj = request('cnpj');
        $servico->senha = request('senha');
        $servico->categoria = request('categoria');
        $servico->save();
        return back();

    }
}
