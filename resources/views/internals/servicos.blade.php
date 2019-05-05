@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Serviços </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action='servicos' method='POST' class='pb-1'>
                <div class="form-group pb-2">
                    <label for="name">Nome</label>
                    <input type="text" name='name' value="{{ old('name') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('name') }}</div>
                <div class="form-group pb-2">
                    <label for="email">Email</label>
                    <input type="email" name='email' value="{{ old('email') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('email') }}</div>
                <div class="form-group pb-2">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name='cnpj' value="{{ old('cnpj') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('cnpj') }}</div>
                <div class="form-group pb-2">
                    <label for="senha">Senha</label>
                    <input type="password" name='senha' value="{{ old('senha') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('senha') }}</div>
                <div class="form-group pb-2">
                    <label for="categoria">Categoria</label>
                    <select name='categoria' id='categoria' class='form-control'>
                        <option value='' disabled selected>Selecione a categoria de seu serviço</option>
                        <option value='segurança'>Segurança</option>
                        <option value='decoração'>Decoração</option>
                        <option value='alimentício'>Alimentos e Bebidas</option>
                    </select>
                </div>
                <div>{{ $errors->first('categoria') }}</div>
                <button type='submit' class='btn btn-primary'>Cadastrar</button>

                @csrf
            </form>
        </div>
    </div>

<hr>
    
<div class="row">
    <div class="col-12">
        <ul>
            @foreach ($servicos as $servico)
                <li>{{ $servico->name }} <span class='text-muted'>({{ $servico->email }})</span> {{ $servico->cnpj }} {{ $servico->senha }} {{ $servico->categoria }}</li>
            @endforeach
        </ul> 
    </div>
</div>
@endsection