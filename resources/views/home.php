<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Partyplanner</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
	
	<!-- Favicon -->
	<link href="css\argon-dashboard-master/assets/img/brand/favicon.png" rel="icon" type="image/png">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- Icons -->
	<link href="css\argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
	<link href="css\argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- Argon CSS -->
	<link type="text/css" href="css\argon-dashboard-master/assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>
<body>
<div class="navigation normal-shadow bg-dark">
	<nav class="navbar navbar-horizontal navbar-expand-lg">
		<div class="container container-menu">
			<a class="navbar-brand" href="home.php"><img src="img/outrologo2.png"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-default">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="#">
								<img src="css\argon-dashboard-master/assets/img/brand/blue.png">
							</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				
				<form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
				  <div class="form-group mb-0">
					<div class="input-group input-group-alternative">
					  <div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-search"></i></span>
					  </div>
					  <input class="form-control" placeholder="Search" type="text">
					</div>
				  </div>
				</form>
				
				<ul class="navbar-nav ml-lg-auto">
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#">
							<i class="ni ni-favourite-28"></i>
							<span class="nav-link-inner--text d-lg-none">Discover</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-icon" href="#">
							<i class="ni ni-notification-70"></i>
							<span class="nav-link-inner--text d-lg-none">Profile</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="ni ni-settings-gear-65"></i>
							<span class="nav-link-inner--text d-lg-none">Settings</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
</div>
    <div class="wrapper">

        <nav id="sidebar" class="normal-shadow">
            <div class="sidebar-header">
				<div class="header-photo circle">
				</div>
				<div class="header-nome">Grégori Poloni</div>
            </div>
    
            <ul class="list-unstyled components">
                <p>NAVIGATION</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><i class="far fa-newspaper"></i>Home</a>
                </li>
                <li>
                    <a href="#"><i class="far fa-user"></i>Profile</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"><i class="far fa-copy"></i>Pages</a>
                    <!--<ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>           class="dropdown-toggle collapsed"
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>-->
                </li>
            </ul>
			<ul class="list-unstyled components">
				<p>EVENTS</p>
				<li class="active li-add">
					<div>
					  <button type="button" class="btn btn-block btn-primary btn-add" data-toggle="modal" data-target="#modal-form"><span class="circle btn-inner--icon"><i class="ni ni-fat-add"></i></span>
	
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
                            
                            <div class="modal-body">
                              
                                <div class="form-group">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                                    </div>
                                                    <input class="form-control" placeholder="Nome do evento" type="text">
                                                </div>
                                            </div>
                                
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                            </div>
                            
                        </div>
							</div>
						</div>
					</div>
				</li>
				<li>
                    <a href="#"><i class="far fa-user"></i>Profile</a>
                </li>
			</ul>
        </nav>
		
		<div id="page">
			<!-- Page Content -->
			<div class="content co-5 normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
			<div class="content co-2 normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
			<div class="content co-3 coh-10 co-ult normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
			<div class="content co-3 normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
			<div class="content co-4 normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
			<div class="content co-2 normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
			<div class="content co-5 normal-shadow">
				<!-- We'll fill this with dummy content -->
			</div>
		</div>
    </div>
	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>