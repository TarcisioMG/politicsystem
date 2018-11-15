@extends('layouts.app')

@section('content')
    <div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
        <h1 style="text-align: center">Confirmar Voto</h1>
        <br><br>
        <div class="col-md-12s">
          <img src="{{$candidato['foto']}}" class="rounded float-right" style="width: 300px; height: 200px;">
        </div>
        <div class="col-md-12" style="font-size: 30px">
          Número: {{$candidato['numero_candidato']}} <br>
          Nome Completo: {{$candidato['nome_completo']}} <br>
          Nome de Exibição: {{$candidato['nome_exibicao']}} <br>
          ID Partido: {{$candidato['id_partido']}} <br>
        </div>
        <br><br><br><br><br>
        <div class="row justify-content-center">
          <div class="col-4">
            <a href="{{action('CandidatoController@view_votar')}}" class="btn btn-danger btn-lg">Corrigir</a>
          </div>
          <div class="col-0">
            <a href="{{action('CandidatoController@confirmar', $candidato['id'])}}" class="btn btn-success btn-lg">Confirmar</a>
          </div>
        </div>
    </div>
  </form>
</div>
@endsection