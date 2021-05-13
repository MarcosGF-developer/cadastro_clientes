@extends('template')

@section('conteudo')
  <h1 class="alert alert-{{ $tipo_resposta }}">{{ $resposta }}</h1>

  @if ($tipo_resposta == 'success')
  <table class="table">
      <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>RG</th>
          <th>Operações</th>
      </tr>
      @foreach ($usuarios as $u)
      <tr>
          <td>{{ $u->id }}</td>
          <td>{{ $u->nome }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->rg }}</td>
          <td>
            <a 
            href="{{ route('usuario_editar', ['id' => $u->id]) }}" class="btn btn-warning">Alterar</a> 

            
            <a class='btn btn-danger'  href="#" onclick="exclui({{ $u->id }})" >Excluir</a>
          </td>

      </tr>
      @endforeach
  <table>
  @endif
  <a href="{{ route('usuario_novo') }}" class="btn btn-primary">Adicionar novo</a>

  <script>
    function exclui(id){
      if(confirm('Deseja excluir o usuario de id:' + id + '?')){
        location.href='/usuario/excluir/' + id;
      }
    } 
  </script>

@endsection