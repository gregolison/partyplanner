@extends('layout')

@section('title', 'Lista de Serviços')

@section('content')
	@include('includes.navbar')<!--@include('nav')-->

    <div class="wrapper">

        @include('includes.menu')
		
		<div id="page">
					<div class="filtros float-right simple-margin-right">
					  <button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#modal-form"><span class="circle btn-inner--icon"><i class="ni ni-fat-add"></i></span>
	
						<span class="btn-inner--text">Novo Evento</span></button>
						<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
							<div class="modal-dialog modal- modal-dialog-centered" role="document">
								<div class="modal-content">
                          
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Escolha um nome para seu evento</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form>
								<div class="modal-body" style="padding: 0 1.5rem 1.5rem 1.5rem;">
									<div>
										<small>Nome</small>
									</div>
									<input class="form-control form-control-alternative" name="nome" id="nome" placeholder="Nome do evento" type="text">
									
								</div>
								
								<div class="modal-footer">
									<input id="cadastrarEvento" type="submit" class="btn btn-primary" value="Criar evento"/>
									<button id="cancelarCadastro" type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cancelar</button> 
								</div>
							</form>
                            
                        </div>
							</div>
						</div>
						<button type="button" class="btn btn-danger btn-add no-margin-right" data-toggle="modal" data-target="#modal-notification"><i class="far fa-trash-alt"></i>
						</button>
						<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button id="cancelarCadastroMini" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">You should read this!</h4>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-white">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
            </div>
            
        </div>
    </div>
</div>
					</div>
					<div class="filtros">Seus eventos</div>
			<!-- Page Content -->
			<div id="eventos">
			@foreach($eventos->reverse(); as $evento)
			<a href="/quadro/{{$evento->id}}">
			<div class="content co-2 photo normal-shadow">
				<div class="card" data-id="{{$evento->id}}">
				  <img class="card-img-top" height="200px" src="{{URL::asset('/img/background.png')}}" alt="Card image cap">
				  <div class="card-body">
				    <h5 class="card-title">{{$evento->nome}}</h5>
				  </div>
				</div>
			</div>
			</a>
      @endforeach
	  </div>
		</div>
    </div>

	<script type="text/javascript">
	
	$(function() {
		//window.location.replace('eventos');
		$('#cadastrarEvento').on('click', function(){
			$('#cadastrarEvento').attr('disabled', '');
			var nome = $('#nome').val();
			
			$.ajax({
				url: "cadastraEvento",
				method: 'get',
				data: {'nome': nome},
				dataType: 'json',
				success:function(data) {
					$('#eventos').prepend(
						$('<div>', {class: 'content co-2 photo normal-shadow'}).append(
							$('<div>', {class: 'card', 'data-id': data.id}).on('mouseover', function(){
								if ($(this).children('.novoEvento') != null) {
									$(this).children('.novoEvento').fadeOut();
								}
							}).on('dblclick', function(){
								eventoId = $(this).attr('data-id');
								window.location.assign('/quadro/'+eventoId);
							}).append(
								$('<img>', {class: 'card-img-top', height: '200px', src: "{{URL::asset('/img/background.png')}}"}),
								$('<div>', {class: 'card-body'}).append(
									$('<h5>', {class: 'card-title', html: data.nome})
								),
								$('<div>', {class: 'novoEvento', html: 'NOVO'})
							)
						).hide().fadeIn("slow")
					);
					$('#cadastrarEvento').removeAttr('disabled', '');
					$('#cancelarCadastro').click();
				}
			})
		});
		$('#cancelarCadastro').on('click', function(){
			$('#nome').val('');
		});

		$('.content .card').on('dblclick', function(){
			eventoId = $(this).attr('data-id');
			window.location.assign('/quadro/'+eventoId);
		});
	});

	</script>
@endsection