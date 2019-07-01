@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')
	@include('includes.navbar')<!--@include('nav')-->

    <div class="wrapper">

        @include('includes.menu')
		
		<div id="page">
			<div class="filtros">Edição do evento</div>
			<!-- Page Content -->
			<div class="content co-10 normal-shadow">
				<div class="content-header">
					<div class="header-photo alternative-shadow">
						<img src="{{asset('img/blog-neon-6.jpg')}}">
					</div>
            	</div>
            	<br clear="all">
				<div class="col-lg-12">
			        <div class="form-group">
			            <label class="form-control-label" for="input-first-name">Nome</label>
			            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{$evento->nome}}">
			        </div>
			    </div>
			    <div class="col-lg-12">
			        <div class="form-group">
			            <label class="form-control-label" for="input-first-name">Descrição</label>
			            <textarea class="form-control form-control-alternative" rows="3" placeholder="Write a large text here ...">{{$evento->descricao}}</textarea>
			        </div>
			    </div>
				<div class="col-lg-12">
			        <div class="form-group">
			            <label class="form-control-label" for="input-first-name"></label>
			        </div>
			    </div>
			</div>
			<div class="content co-10 coh-4 co-ult normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
		</div>

	<script type="text/javascript">
	
	$(function() {
		
	});

	</script>
@endsection