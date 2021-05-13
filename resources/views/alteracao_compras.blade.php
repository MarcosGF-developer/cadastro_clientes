@extends ('template')
	@section('conteudo')
	<h1>Alteração de Compra</h1>
	<form method="post" action="{{ route('compras_alterar', ['id' => $co->id]) }}">
		@csrf
		<select class="custom-select mt-2" name="id_cliente">
                        @foreach($clientes as $c)
                        
                        <option {{ ( $c->id == $co->id_cliente ? "selected": " " ) }}
                        value="{{ $c->id }}">  {{ $c->id }} {{ $c->nome }}

                         </option>
                        @endforeach
        </select>
		<input class="form-control mt-2" type="number" step=".01" name="valor_total_compra" placeholder="Valor Total" value="{{ $co->valor_total_compra }}">
		<input class="btn btn-primary mt-2" type="submit" value="Enviar">
	</form>

	@endsection