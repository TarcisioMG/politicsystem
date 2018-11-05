<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Candidatos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    <a class="btn btn-primary" href="{{action('CandidatoController@create')}}">Adicionar candidato</a>
    <a class="btn btn-primary" href="{{action('PartidoController@create')}}">Adicionar Partido</a>
    <a class="btn btn-primary" href="{{action('PartidoController@index')}}">Ver Partidos</a>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome Completo</th>
        <th>Nome Exibição</th>
        <th>Foto</th>
        <th>Partido ID</th>
        <th>Número</th>
        <th>Endereço</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($candidatos as $candidato)
      
      <tr>
        <td>{{$candidato['id']}}</td>
        <td>{{$candidato['nome_completo']}}</td>
        <td>{{$candidato['nome_exibicao']}}</td>
        <td><img src="/images/{{$candidato['foto']}}" style="width: 75px; height: 50px;"></td>
        <td>{{$candidato['id_partido']}}</td>
        <td>{{$candidato['numero_candidato']}}</td>
        <td>{{$candidato['endereco']}}</td>
        
        <td><a href="{{action('CandidatoController@edit', $candidato['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CandidatoController@destroy', $candidato['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>