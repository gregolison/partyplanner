@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')
	@include('includes.navbar')<!--@include('nav')-->

    <div class="wrapper">

        @include('includes.menu')
		
		<div id="page">
			<div id="filtros">Filtros</div>
			<!-- Page Content -->
			<div class="content co-5 coh-4 normal-shadow">
				
			</div>
		</div>
    </div>
@endsection