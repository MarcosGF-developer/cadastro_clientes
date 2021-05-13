@extends('template')

@section('conteudo')
<h1>Cadastro de Usuários</h1>
<form method="POST" action="{{ route('usuario_inserir') }}">
	@csrf
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_nome" placeholder="Nome" name="nome">
	</div>
	<div class="form-floating mb-3">
	  <input type="email" class="form-control" id="f_email" placeholder="nome@exemplo.com.br" name="email">
	</div>
	<div class="form-floating mb-3">
	  <input type="text" class="form-control" id="f_rg" placeholder="RG" name="rg">
	</div>
	<div class="form-floating mb-3">
	  <input type="password" class="form-control" id="f_senha" placeholder="Senha" name="senha">
	</div>
	<input type="submit" class="btn btn-success" value="Cadastrar">
</form>
@endsection('conteudo')