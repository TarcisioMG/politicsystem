@extends('layouts.app')

@section('content')
    <div class="container">
    <br />
    
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
        <th>Votos</th>
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
        <td>{{$candidato['votos']}}</td>
        
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
  <a class="btn btn-success" href="{{action('CandidatoController@index')}}">Votar</a>
  </div>
@endsection