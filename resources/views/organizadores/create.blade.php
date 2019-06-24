<!-- @extends('layout')

@section('title', 'Lista de Organizadores')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1> Organizadores </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action='organizador' method='POST' class='pb-1'>
                <div class="form-group pb-2">
                    <label for="name">Nome</label>
                    <input type="text" name='name' value="{{ old('name') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('name') }}</div>
                <div class="form-group pb-2">
                    <label for="email">Email</label>
                    <input type="email" name='email' value="{{ old('email') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('email') }}</div>
                <div class="form-group pb-2">
                    <label for="celular">Celular</label>
                    <input type="text" name='celular' value="{{ old('celular') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('celular') }}</div>
                <div class="form-group pb-2">
                    <label for="senha">Senha</label>
                    <input type="password" name='senha' value="{{ old('senha') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('senha') }}</div>
                <div class="form-group pb-2">
                    <label for="nomeorg">Nome da Organizadora</label>
                    <input type="text" name='nomeorg' value="{{ old('nomeorg') }}" class='form-control'>
                </div>
                <div>{{ $errors->first('nomeorg') }}</div>
                <button type='submit' class='btn btn-primary'>Cadastrar</button>

                @csrf
            </form>
        </div>
    </div>

<hr>
    
<div class="row">
    <div class="col-12">
        <ul>
            @foreach ($organizadores as $organizador)
                <li>{{ $organizador->name }} <span class='text-muted'>({{ $organizador->email }})</span> {{ $organizador->celular }} {{ $organizador->senha }} {{ $organizador->nomeorg }}</li>
            @endforeach
        </ul> 
    </div>
</div>
@endsection -->


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>PartyPlanner - Login</title>
  <!-- Favicon -->
  <link href="../css/argon-dashboard-master/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../css/argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../css/argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../css/argon-dashboard-master/assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body class="bg-default">
  <div class="main-content">


    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="#">
          <img width="250px" src="../img/outrologo2.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="#">
                  <img src="../css/argon-dashboard-master/assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
        </div>
      </div>
    </nav>


    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="separator separator-bottom separator-skew zindex-100">
      </div>
    </div>


    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border">
            <div style="height: 90px;" class="container">
              <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                  <div style="position: relative; top: 25px;" class="col-lg-5 col-md-6">
                    <h1 class="text-primary2">Cadastrar</h1>
                    <p class="text-light2">Bem vindo!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-header bg-transparent pb-5">
            <div class="text-muted text-center mt-2 mb-3"><small>Cadastre-se como organizador!</small></div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nome" type="text">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Senha" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Cadastrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->


  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../css/argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../css/argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../css/argon-dashboard-master/assets/js/argon.js?v=1.0.0"></script>
</body>

</html>