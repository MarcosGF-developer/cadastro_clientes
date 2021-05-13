@extends ('template')
	@section('conteudo')
	<h1>Cadastro de Compras</h1>
	<div>
		<a class="btn btn-light mt-2" href="{{ route('compras_listar') }}">Listar Compras</a>
	</div>
	<form class="form-group mt-2" method="get" action="{{ route('compras_novo') }}">
		@csrf
		<select class="custom-select mt-2" name="id_cliente">
                        @foreach($clientes as $c)
                        <option value="{{ $c->id }}">  {{ $c->id }} {{ $c->nome }} </option>
                        @endforeach
        </select>
        <input class="form-control mt-2" type="number" step=".01" name="valor_total_compra" placeholder="Valor Total">
		<input class="btn btn-primary mt-2" type="submit" value="Incluir">
		
	</form>
	
	@endsection