@extends('template')


@section('conteudo')
<form action="/tenta_login" method="POST">
	@csrf
	<h1>Login</h1>
	<input class="form-control mt-2" type="text" name="email" placeholder="E-mail">
    <input class="form-control mt-2" type="password" name="senha" placeholder="Senha">
    <input class="btn btn-primary mt-2" type="submit" value="Acessar">
</form>
@endsection