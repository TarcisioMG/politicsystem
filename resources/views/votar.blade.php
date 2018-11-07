@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Votar</h2><br/>
      <form method="post" action="{{action('CandidatoController@votar')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="numero_candidato">Numero do Candidato:</label>
            <input type="text" class="form-control" name="numero_candidato">
            <input type="submit" value="Confirmar">
          </div>
        </div>
      </form>
    </div>
@endsection