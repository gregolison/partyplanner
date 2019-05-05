@extends('layout')

@section('title', 'Lista de Organizadores')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Organizadores </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action='organizador' method='POST' class='pb-1'>
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
                    <label for="celular">Celular</label>
                    <input type="text" name='celular' value="{{ old('celular') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('celular') }}</div>
                <div class="form-group pb-2">
                    <label for="senha">Senha</label>
                    <input type="password" name='senha' value="{{ old('senha') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('senha') }}</div>
                <div class="form-group pb-2">
                    <label for="nomeorg">Nome da Organizadora</label>
                    <input type="text" name='nomeorg' value="{{ old('nomeorg') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('nomeorg') }}</div>
                <button type='submit' class='btn btn-primary'>Cadastrar</button>

                @csrf
            </form>
        </div>
    </div>

<hr>
    
<div class="row">
    <div class="col-12">
        <ul>
            @foreach ($organizadores as $organizador)
                <li>{{ $organizador->name }} <span class='text-muted'>({{ $organizador->email }})</span> {{ $organizador->celular }} {{ $organizador->senha }} {{ $organizador->nomeorg }}</li>
            @endforeach
        </ul> 
    </div>
</div>
@endsection