@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{$candidato['foto']}}" class="rounded float-right" style="width: 300px; height: 200px;">
    </div>



    <br />
    
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Nome Completo</th>
        <th>Nome Exibição</th>
        <th>Partido ID</th>
        <th>Número</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>{{$candidato['nome_completo']}}</td>
        <td>{{$candidato['nome_exibicao']}}</td>
        <td>{{$candidato['id_partido']}}</td>
        <td>{{$candidato['numero_candidato']}}</td>
      </tr>
    </tbody>
  </table>
    <a href="{{action('CandidatoController@view_votar')}}" class="btn btn-danger">Corrigir</a>
    <a href="{{action('CandidatoController@confirmar', $candidato['id'])}}" class="btn btn-success">Confirmar</a>
  </form>
</div>
@endsection