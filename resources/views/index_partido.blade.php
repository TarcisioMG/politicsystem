<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partidos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    <a class="btn btn-primary" href="{{action('PartidoController@create')}}">Adicionar Partido</a>
    <a class="btn btn-primary" href="{{action('CandidatoController@create')}}">Adicionar candidato</a>
    <a class="btn btn-primary" href="{{action('CandidatoController@index')}}">Ver Candidatos</a>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Número do Partido</th>
        <th>Endereço</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($partidos as $partido)

      <tr>
        <td>{{$partido['id']}}</td>
        <td>{{$partido['nome']}}</td>
        <td>{{$partido['sigla']}}</td>
        <td>{{$partido['numero_partido']}}</td>
        <td>{{$partido['endereco']}}</td>
        
        <td><a href="{{action('PartidoController@edit', $partido['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('PartidoController@destroy', $partido['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>