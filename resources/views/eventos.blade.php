@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')
	@include('includes.navbar')<!--@include('nav')-->

    <div class="wrapper">

        @include('includes.menu')
		
		<div id="page">
			<div id="filtros">Filtros</div>
			<!-- Page Content -->
			@foreach($eventos as $evento)
			<div ondblclick="{{$evento->id}}" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="{{URL::asset('/img/background.png')}}" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">{{$evento->nome}}</h5>
				  </div>
				</div>
			</div>
      @endforeach
		</div>
    </div>
@endsection