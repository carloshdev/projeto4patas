@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Serviço
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
      <form method="post" action="{{ route('servicos.store') }}">
          <div class="form-group">
              @csrf
              <label for="nome">Nome do Serviço:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <div class="form-group">
              <label for="duracao">Duração</label>
              <input type="text" class="form-control" name="duracao"/>
          </div>
          <div class="form-group">
              <label for="responsavelAtual">Responsável Atual</label>
              <input type="text" class="form-control" name="responsavelAtual"/>
          </div>
          <button type="submit" name="botao-cadastrar" value="cadastro" class="btn btn-primary">Cadastrar</button>
          <button type="submit" name="botao-cadastrar" value="cadastro-finalizar" class="btn btn-secundary">Cadastrar e Finalizar</button>
      </form>
  </div>
</div>
@endsection