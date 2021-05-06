@extends ('template')
	@section('conteudo')
	<h1>Cadastro de Clientes</h1>
	<div>
		<a class="btn btn-light" href="{{ route('clientes_listar') }}">Listar Clientes</a>
	</div>
	<form class="form-group" method="get" action="{{ route('cliente_novo') }}">
		@csrf
		<input class="form-control mt-2" type="text" name="nome" placeholder="Nome">
		<input class="form-control mt-2" type="text" name="endereco" placeholder="Endereço">
		<input class="form-control mt-2" type="text" name="cep" placeholder="CEP">
		<input class="form-control mt-2" type="text" name="estado" placeholder="Estado">
		<input class="form-control mt-2" type="text" name="cidade" placeholder="Cidade">
		<input class="btn btn-primary mt-2" type="submit" value="Enviar">
	</form>
	
	@endsection