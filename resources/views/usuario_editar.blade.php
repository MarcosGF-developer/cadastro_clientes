@extends('template')

@section('conteudo')
<h1>Alterar Usuário</h1>
<form method="POST" action="{{ route('usuario_alterar', ['id' => $u->id]) }}">
	@csrf
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_nome" placeholder="Nome" name="nome" value="{{ $u->nome }}">
	  
	</div>
	<div class="form-floating mb-3">
	  <input type="email" class="form-control" id="f_email" placeholder="nome@exemplo.com.br" name="email" value="{{ $u->email }}">
	  
	</div>
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_rg" placeholder="RG" name="rg"  value="{{ $u->rg }}">
	</div>
	<div class="form-floating mb-3">
	  <input type="password" class="form-control" id="f_senha" placeholder="Senha" name="senha" value="{{ $u->senha }}">
	  
	</div>
	<input type="submit" class="btn btn-success" value="Confirmar">
</form>
@endsection('conteudo')