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
            <form action="{{route('eventos.store')}}" method='POST' class='pb-1'>
            {!! csrf_field() !!}
                <div class="form-group pb-2">
                    <label for="nome">Nome</label>
                    <input type="text" name='nome' value="{{ old('name') }}" class='form-control'>
                </div>
                <button type='submit' class='btn btn-primary'>Cadastrar</button>

                @csrf
            </form>
        </div>
    </div>

<hr>
    

@endsection