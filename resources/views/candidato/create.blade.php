@extends('layouts.app')

@section('content')
    <div class="container">
      <h3 style="text-align: center">Cadastrar Candidato</h3><br/>
      <form method="post" action="{{url('candidatos')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome Completo">Nome Completo:</label>
            <input type="text" class="form-control" name="nome_completo">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome Exibicao">Nome Exibicao:</label>
            <input type="text" class="form-control" name="nome_exibicao">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="foto">    
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Partido">Partido ID:</label>
              <input type="text" class="form-control" name="id_partido">
            </div>
          </div>
        <div class="row">
        <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Numero">Numero Candidato:</label>
            <input type="text" class="form-control" name="numero_candidato">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Endereço">Endereço:</label>
              <input type="text" class="form-control" name="endereco">
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