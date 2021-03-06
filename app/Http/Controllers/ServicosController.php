<?php

namespace App\Http\Controllers;
use App\Evento;
use App\Servico;
use Illuminate\Http\Request;
use App\Http\Requests\servicoFormRequest;

class ServicosController extends Controller
{
    public function __construct(servico $serv){
        $this->servicoConstruct = $serv;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['evento'] = Evento::all();
        $data['servico'] = Servico::all();
        return view('servicos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(servicoFormRequest $request)
    {
        $CadServico = $request->all();
       // $rules = $this->Servico->rules;
        /*$validate = validator($CadServico, $this->Servico->rules, $mensagens);
        if($validate->fails()){
            return redirect()       
                ->route('servico.create')
                ->withErrors($validate)
                ->withInput();

            }*/

        $cadastrado =  $this->servicoConstruct->create($CadServico);

        if($cadastrado)
            return redirect()->route('servicos.index');
        else
            return view('servicos.create');
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
