<?php

namespace App\Http\Controllers;
Use App\Evento;
Use App\Servico;
Use DB;
use Illuminate\Http\Request;

class quadro_serv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quadro_serv = quadro_serv::all();

        return view('quadro', compact('quadro_serv'));
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
    public function store($servico, $evento)
    {
        $data['servico'] = Servico::findOrFail($servico);
        $data['evento'] = Evento::findOrFail($evento);
        DB::insert('insert into quadro_servs (id_serv, id_quadro) values (?, ?)', [$data['servico']->id, $data['evento']->id]);
       $ids = quadro_serv::create();
        
        return view('quadro', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
}
