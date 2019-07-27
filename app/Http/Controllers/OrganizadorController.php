<?php

namespace App\Http\Controllers;
use \App\Organizador;
use Illuminate\Http\Request;

class OrganizadorController extends Controller
{
    public function list()
    {
       
        $organizadores = Organizador::all();

        

        return view('organizadores/create', [
            'organizadores' => $organizadores,
        ]);
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'celular' => 'required|min:9',
            'senha' => 'required|min:8|max:16',
            'nomeorg' => 'required|min:3',
        ]);


        $organizador = new Organizador();
        $organizador->name = request('name');
        $organizador->email = request('email');
        $organizador->celular = request('celular');
        $organizador->senha = request('senha');
        $organizador->nomeorg = request('nomeorg');
        $organizador->save();
        return back();

    }
}
