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
            <form action="{{route('servicos.store')}}" method='POST' class='pb-1'>
            {!! csrf_field() !!}
                <div class="form-group pb-2">
                    <label for="name">Nome</label>
                    <input type="text" name='name' value="{{ old('name') }}" class='form-control'>
                </div>
                @if (isset($errors) && count( $errors) > 0)
                    <div class="alert alert-danger" role="alert">{{ $errors->first('name') }}</div>
                @endif
                    
               
                <div class="form-group pb-2">
                    <label for="email">Email</label>
                    <input type="email" name='email' value="{{ old('email') }}" class='form-control'>
                </div>
                @if (isset($errors) && count( $errors) > 0)
                    <div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>
                @endif             
                <div class="form-group pb-2">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name='cnpj' value="{{ old('cnpj') }}" class='form-control'>
                </div>
                @if (isset($errors) && count( $errors) > 0)
                    <div class="alert alert-danger" role="alert">{{ $errors->first('cnpj') }}</div>
                @endif
                <div class="form-group pb-2">
                    <label for="senha">Senha</label>
                    <input type="password" name='senha' value="{{ old('senha') }}" class='form-control'>
                </div>
                 @if (isset($errors) && count( $errors) > 0)
                    <div class="alert alert-danger" role="alert">{{ $errors->first('senha') }}</div>
                @endif
                <div class="form-group pb-2">
                    <label for="categoria">Categoria</label>
                    <select name='categoria' id='categoria' class='form-control'>
                        <option value='' disabled selected>Selecione a categoria de seu serviço</option>
                        <option value='Segurança'>Segurança</option>
                        <option value='Decoração'>Decoração</option>
                        <option value='Alimentício'>Alimentos e Bebidas</option>
                    </select>
                </div>
                 @if (isset($errors) && count( $errors) > 0)
                    <div class="alert alert-danger" role="alert">{{ $errors->first('categoria') }}</div>
                @endif
                <button type='submit' class='btn btn-primary'>Cadastrar</button>

                @csrf
            </form>
        </div>
    </div>

<hr>
    

@endsection