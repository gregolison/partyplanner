<nav id="sidebar" class="minimized normal-shadow">
				<button id="encolheMenu" class="btn-diferente" style="display: none">
						<i class="fas fa-angle-left"></i>
				</button>
				<button id="expandeMenu" class="btn-diferente">
                    	<i class="fas fa-angle-right"></i>
				</button>
            <div class="sidebar-header">
				<div class="header-photo circle">
					<img src="{{asset('img/logo.png')}}"/>
				</div>
				<div class="header-nome">Partyplanner</div>
            </div>
    		<!--<ul class="list-unstyled components">
				<li class="active li-add">
					<div>
					  <button type="button" class="btn btn-block waves-effect waves-light btn-primary-alternative btn-add" data-toggle="modal" data-target="#modal-form"><span class="circle btn-inner--icon"><i class="ni ni-fat-add"></i></span>
	
						<span class="btn-inner--text">Novo Evento</span></button>
						<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
							<div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
								<div class="modal-content">
                          
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Escolha um nome para seu evento</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="{{ route('eventos.store') }}" method="post">
								<div class="modal-body">
								
									<div class="form-group">
													<div class="input-group input-group-alternative">
														@csrf
														<div class="input-group-prepend">
															<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
														</div>
														<input class="form-control" name="nome" placeholder="Nome do evento" type="text">
													</div>
												</div>
									
								</div>
								
								<div class="modal-footer">
									<input type="submit" class="btn btn-primary" value="Save changes">
									<button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
								</div>
							</form>
                            
                        </div>
							</div>
						</div>
					</div>
				</li>
			</ul>-->
            <ul class="list-unstyled components">
                <p>NAVIGATION</p>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
	                <li class="active">
	                    <i class="far fa-newspaper"></i><span>Página incial</span>
	                </li>
                </a>
                <a href="#">
	                <li>
	                    <i class="far fa-user"></i><span>Seu perfil</span>
	                </li>
                </a>
                <!--<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
	                <li>
	                    <i class="far fa-copy"></i>Pages
	                    <ul class="collapse list-unstyled" id="pageSubmenu">
	                        <li>
	                            <a href="#">Page 1</a>
	                        </li>
	                        <li>
	                            <a href="#">Page 2</a>           class="dropdown-toggle collapsed"
	                        </li>
	                        <li>
	                            <a href="#">Page 3</a>
	                        </li>
	                    </ul>
	                </li>
                </a>-->
				<a href="{{route('eventos.index')}}">
					<li>
                    	<i class="far fa-user"></i><span>Seus eventos</span>
                	</li>
                </a>
                <a href="{{route('eventos.index')}}">
					<li>
                    	<i class="fab fa-slideshare"></i><span>Compartilhados</span>
                	</li>
                </a>
            </ul>
        </nav>