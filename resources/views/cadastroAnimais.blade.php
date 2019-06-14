@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
  <div class="card uper">
    <div class="card-header">
      Adicionar Animal
    </div>
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
        <form method="post" action="{{ route('animais.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">Nome do animal:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="breed">Raça:</label>
                <input type="text" class="form-control" name="breed"/>
            </div>
            <div class="form-group">
                <label for="gender">Sexo:</label>
                <input type="text" class="form-control" name="gender"/>
            </div>
            <button type="submit" name="botao-cadastrar" value="cadastrar" class="btn btn-primary">Cadastrar</button>
            <button type="submit" name="botao-cadastrar" value="finalizar-cadastro" class="btn btn-secundary">Cadastrar e Finalizar</button>
        </form>
    </div>
  </div>
</div>
@endsection