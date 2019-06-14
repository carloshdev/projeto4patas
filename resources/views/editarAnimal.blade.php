@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Animal
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
    {{$animal->name}}
      <form method="post" action="{{ route('animais.edit') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nome do dog:</label>
              <input type="text" class="form-control" name="name" value="{{$animal->name}}"/>
          </div>
          <div class="form-group">
              <label for="breed">Raça</label>
              <input type="text" class="form-control" name="breed" value="{{$animal->breed}}"/>
          </div>
          <div class="form-group">
              <label for="gender">Genero</label>
              <input type="text" class="form-control" name="gender" value="{{$animal->gender}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
  </div>
</div>
@endsection