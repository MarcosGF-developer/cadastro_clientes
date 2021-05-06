@extends ('template')	
	@section('conteudo')
	<h1>Lista de Clientes Cadastrados</h1>
	<div>
		<a class="btn btn-secondary mt-3" href="{{ route('clientes_cadastrar') }}">Novo Cadastro</a>
	</div>
	<table class="table table-striped mt-3">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CEP</th>
				<th>Endereço</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clientes as $c)
			<tr>
				<td>{{ $c->id }}</td>
				<td>{{ $c->nome }}</td>
				<td>{{ $c->cep }}</td>
				<td>{{ $c->endereco }}</td>
				<td>{{ $c->cidade }}</td>
				<td>{{ $c->estado }}</td>

				<td>
					<a class='btn btn-warning' href="{{ route('clientes_tela_alterar', ['id' => $c->id]) }}" >Alterar</a>
					<a class='btn btn-danger'  href="#" onclick="exclui({{ $c->id }})" >Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script>
		function exclui(id){
			if(confirm('Deseja excluir o cliente de id:' + id + '?')){
				location.href='/clientes/excluir/' + id;
			}
		}	
	</script>
	@endsection