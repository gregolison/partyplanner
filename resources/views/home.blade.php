@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')
	@include('includes.navbar')<!--@include('nav')-->

    <div class="wrapper">

        @include('includes.menu')
		
		<div id="page">
			<div id="filtros">Filtros</div>
			<!-- Page Content -->
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="assets/img/background.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="assets/img/background.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="assets/img/background.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="assets/img/background.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo co-ult normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="assets/img/background.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="assets/img/background.png" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
			<div ondblclick="window.location.href = 'edita.eventos.php';" class="content co-2 photo normal-shadow">
				<div class="card">
				  <img class="card-img-top" height="200px" src="{{asset('img/background.png')}}" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">Meu evento</h5>
				  </div>
				</div>
			</div>
		</div>
    </div>
@endsection