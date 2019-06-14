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
		@if(count($servicos) > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nome</td>
					<td>Duração</td>
					<td>Responsável Atual</td>
				</tr>
			</thead>
			<tbody>
				@foreach($servicos as $servico)
				<tr>
					<td>{{$servico->id}}</td>
					<td>{{$servico->nome}}</td>
					<td>{{$servico->duracao}}</td>
					<td>{{$servico->responsavelAtual}}</td>
					<td>
						<form action="{{ route('servicos.destroy', $servico->id)}}" method="post">
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
		<h3> Nenhum serviço cadastrado </h3>
		@endif
	</div>
</div>
@endsection
