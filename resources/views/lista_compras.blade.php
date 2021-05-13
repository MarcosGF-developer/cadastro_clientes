@extends ('template')	
	@section('conteudo')
	<h1>Lista de Compras Realizadas</h1>
	<div>
		<a class="btn btn-secondary mt-3" href="{{ route('compras_cadastrar') }}">Nova Compra</a>
	</div>
	<table class="table table-striped mt-3">
		<thead>
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Valor Total</th>
				<th>Data</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($compras as $co)
			<tr>
				<td>{{ $co->id }}</td>
				<td>Indefinido</td>
				<td>{{ $co->valor_total_compra }}</td>
				<td>{{ $co->created_at }}</td>
				

				<td>
					<a class='btn btn-warning' href="{{ route('compras_tela_alterar', ['id' => $co->id]) }}" >Alterar</a>
					<a class='btn btn-danger'  href="#" onclick="exclui({{ $co->id }})" >Excluir</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script>
		function exclui(id){
			if(confirm('Deseja excluir a compra de id:' + id + '?')){
				location.href='/compras/excluir/' + id;
			}
		}	
	</script>
	@endsection