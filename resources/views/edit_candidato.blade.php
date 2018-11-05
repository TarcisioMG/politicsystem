<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar Candidato </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Editar Candidato</h2><br  />
        <form method="post" action="{{action('CandidatoController@update', $id)}}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome Completo">Nome Completo:</label>
            <input type="text" class="form-control" name="nome_completo" value="{{$candidato->nome_completo}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Nome Exibicao">Nome Exibição:</label>
              <input type="text" class="form-control" name="nome_exibicao" value="{{$candidato->nome_exibicao}}">
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
              <label for="Partido ID">Partido ID:</label>
              <input type="text" class="form-control" name="id_partido" value="{{$candidato->id_partido}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Numero Candidato">Numero Candidato:</label>
            <input type="text" class="form-control" name="numero_candidato" value="{{$candidato->numero_candidato}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Endereço">Endereço:</label>
            <input type="text" class="form-control" name="endereco" value="{{$candidato->endereco}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>