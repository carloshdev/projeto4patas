@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="container">
	<div class="uper">
		@if(session()->get('success'))
			<div class="alert alert-success">
			{{ session()->get('success') }}  
			</div><br />
		@endif
		@if(count($animais) > 0)
		<table class="table table-striped">
			<thead>
				<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>Raça</td>
				<td>Gênero</td>
				</tr>
			</thead>
			<tbody>
				@foreach($animais as $animal)
				<tr>
					<td>{{$animal->id_animal}}</td>
					<td>{{$animal->name}}</td>
					<td>{{$animal->breed}}</td>
					<td>{{$animal->gender}}</td>
					<td>	
						<form action="{{ route('animais.destroy', $animal->id_animal)}}" method="post">
							@csrf
							@method('DELETE')
							<button class="btn btn-small btn-info" type="submit">Editar</button>
						</form>
					</td>
					<td>
						<form action="{{ route('animais.destroy', $animal->id_animal)}}" method="post">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" type="submit">Deletar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<h3> Nenhum animal cadastrado </h3>
		@endif
	</div>
</div>
@endsection