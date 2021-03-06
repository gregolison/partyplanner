@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')       
<h1 class="text-center mb-3">Listagem de categorias</h1>
    <form  action="{{ route('search') }}" method="GET" class="form-horizontal"> 
        <div class="form-group row mb-4"> 
            <div class="col-10">
            <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Procura por serviço" >
            </div> 
            <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i> Pesquisar</button>
        </div>
    </form>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cnpj</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ação</th>
                <th scope="col">Adicionar</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data['servico'] as $servico)
            <tr>
                <th scope="row">{{$servico->id}}</th>
                <td>{{$servico->name}}</td>
                <td>{{$servico->cnpj}}</td>
                <td>{{$servico->categoria}}</td>
                <td>  
                    <a href="">Editar</a> |
                    <a href="">Vizualizar</a>
                </td> 
                <td>
                    <select id='selectAddEvento'>
                        <option> </option>
                        @foreach($data['evento'] as $evento)
                        <option value="/quadro/{{$evento->id}}/{{$servico->id}}">{{$evento->nome}}</option>
                        @endforeach
                    </select>
                </td>      
            </tr>
        @endforeach  
        </tbody>
        <script type="text/javascript">
	
	$(function() {
        $('#selectAddEvento').on('change', function(){
            pagEvento = $(this).val();
            window.location.assign(pagEvento);
        });
    });
        </script>
@endsection
