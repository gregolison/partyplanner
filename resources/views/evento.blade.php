<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('eventos.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($eventos as $evento)
        <tr>
            <td>{{$evento->id}}</td>
            <td>{{$evento->nome}}</td>
            <td>
                <form action="{{ route('eventos.destroy', $evento->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection