@extends('layout')

@section('title', 'Página Inicial')

@section('content')
<a class="btn btn-primary mb-3" href="{{route('servicos.create')}}" role="button">Novo serviço</a> 
<a class="btn btn-primary mb-3" href="" role="button">Novo organizador</a> 

@endsection