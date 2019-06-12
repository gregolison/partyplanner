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
                            <form action="{{ route('eventos.store') }}" method="post">
								<div class="modal-body">
									@csrf
									<input class="form-control form-control-alternative" name="nome" placeholder="Nome do evento" type="text">
									
								</div>
								
								<div class="modal-footer">
									<input type="submit" class="btn btn-primary" value="Save changes">
									<button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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