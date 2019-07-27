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
				<input type="hidden" id="idEvento" name="idEvento" value=""/>
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
			            <textarea class="form-control form-control-alternative" rows="3" placeholder="Write a large text here ..."></textarea>
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
			            <input type="text" style="width: auto !important;" id="input-nome" class="form-control form-control-alternative form-edita form-title" placeholder="First name" value="Evento teste 1">
			        </div>
			    </div>
			    <div class="col-lg-12">
			        <div class="form-group">
			            <textarea style="width: 300px !important;" class="form-control form-control-alternative form-edita" rows="3" placeholder="Festa teste para olhar o tamanho das coisas"></textarea>
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

	primeiroNome = $('#input-nome').val();
	
	$(function() {
		$('#input-nome').on('blur', function(){
			nomeNovo = $(this).val();
			if (nomeNovo != primeiroNome) {
				idEvento = $('#idEvento').val();
				$.ajax({
					url: "editaEvento/"+idEvento,
					method: 'get',
					data: {'nome': nomeNovo},
					dataType: 'json',
					success:function(data) {
						alert('aaaa333');
					}
				})
				primeiroNome = nomeNovo;
			}
		});
	});

	</script>
@endsection