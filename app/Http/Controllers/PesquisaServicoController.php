<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;


class PesquisaServicoController extends Controller
{
    public function search(Request $request)
    {
        
        $query = $request->input('query');
        $servicos = Servico::where('name', 'like', "%$query%")->get();

        return view('servicos.index')->with('servicos', $servicos);
    }
}
