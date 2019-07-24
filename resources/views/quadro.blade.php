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
				<div style="float: right;">
					<div class="col-lg-12">
						<div class="form-group">
						<div class="input-group input-group-alternative">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
							</div>
							<input class="form-control-alternative datepicker" placeholder="Select date" type="text" value="06/20/2019">
						</div>
					</div>
					</div>
					<div class="col-lg-12">
						<div class="form-group">
							<label class="form-control-label" for="input-first-name">Descrição</label>
			            <textarea class="form-control form-control-alternative" rows="3" placeholder="Write a large text here ...">{{$data['evento']->descricao}}</textarea>
						</div>
					</div>
				</div>
				<div class="content-header" style="float: left;">
					<div class="header-photo alternative-shadow">
						<img src="{{asset('img/blog-neon-6.jpg')}}">
					</div>
				</div>
				<div class="col-lg-12" style="margin-top: 20px;">
			        <div class="form-group">
			            <label class="form-control-label" for="input-first-name">Nome</label>
			            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{$data['evento']->nome}}">
			        </div>
			    </div>
			    <div class="col-lg-12">
			        <div class="form-group">
			            <label class="form-control-label" for="input-first-name">Descrição</label>
			            <textarea class="form-control form-control-alternative" rows="3" placeholder="Write a large text here ...">{{$data['evento']->descricao}}</textarea>
			        </div>
			    </div>
				<div class="col-lg-12">
			        <div class="form-group">
			            <label class="form-control-label" for="input-first-name"></label>
			        </div>
			    </div>
			</div>
			<div class="content co-10 coh-4 co-ult normal-shadow">
				{{$data['servico']->name}}
			</div>
		</div>

	<script type="text/javascript">
	
	$(function() {
		
	});

	</script>
@endsection