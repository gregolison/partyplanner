@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')       
<h1 class="text-center mb-3">Listagem de categorias</h1>
    <form  action="{{ route('search') }}" method="GET" class="form-horizontal"> 
        <div class="form-group row mb-4"> 
            <div class="col-10">
            <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Procura por serviço" required>
            </div> 
            <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i> Pesquisar</button>
        </div>
    </form>
    <a class="btn btn-primary mb-3" href="{{route('servicos.create')}}" role="button">Novo serviço</a> 
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cnpj</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($servicos as $servico)
            <tr>
                <th scope="row">{{$servico->id}}</th>
                <td>{{$servico->name}}</td>
                <td>{{$servico->cnpj}}</td>
                <td>{{$servico->categoria}}</td>
                <td>  
                    <a href="">Editar</a> |
                    <a href="">Vizualizar</a>
                </td>     
            </tr>
        @endforeach  
        </tbody>
@endsection
