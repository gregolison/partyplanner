<?php

namespace App\Http\Controllers;
use App\Quadro;
use App\Servico;
use App\Evento;
use DB;
use App\quadro_serv;
use Illuminate\Http\Request;

class QuadroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quadro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($eventoid)
    {
        $data['evento'] = Evento::findorFail($eventoid);

        return view('quadro', compact('data'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servico)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function servicos($evento, $servico){
        $data['servico'] = Servico::findOrFail($servico);
        $data['evento'] = Evento::findOrFail($evento);
        DB::table('quadro_servs')->insert(
            ['id_quadro' => $data['evento']->id ],
            ['id_serv' => $data['servico']->id ]
        );

        $ids = quadro_serv::create();
        
        return view('quadro', compact('data'));
    }
}
