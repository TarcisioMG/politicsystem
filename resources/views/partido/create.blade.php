@extends('layouts.app')

@section('content')
    <div class="container">
      <h3 style="text-align: center">Cadastrar Partido</h3><br/>
      <form method="post" action="{{url('partidos')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="sigla">Sigla:</label>
              <input type="text" class="form-control" name="sigla">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Endereco">Endereco:</label>
              <input type="text" class="form-control" name="endereco">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Numero_partido">Número do Partido:</label>
              <input type="text" class="form-control" name="numero_partido">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
@endsection