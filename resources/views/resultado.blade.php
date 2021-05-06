@extends('template')

@section ('conteudo')
	<div class="alert alert-{{ $classe }}" >
  		{{ $mensagem }}
	</div>
	<div>
		<a class="btn btn-light mt-3" href="{{ route('clientes_listar') }}">Listar Clientes</a>
	</div>
@endsection