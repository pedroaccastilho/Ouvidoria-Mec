@extends('layout.standard')

@section('title','Registro de departamento')

@section('content')
<div class="modal fade" id="modalNewSolucao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action={{route('solucao.savenew')}} method="post" id="formAction">
    @csrf
    <input type="hidden" name="reclamacaoId" value="{{$reclamacao[0]->id}}">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Cadastrar solução</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">

          <div class="form-group row">
              <label for="Nome" class="col-sm-4 col-form-label">* Título:</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" name="title" value="" required>
              </div>
          </div>

            <div class="form-group row">
                <label for="Nome" class="col-sm-4 col-form-label">* Descrição:</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="description" rows="8" cols="80" required></textarea>
                </div>
            </div>

          </div>
        <div class="modal-footer d-flex justify-content-center">
          <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
        </div>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <div class="col-md-6">
    <h2>Departamento: {{$department[0]->name}}</h2>
  </div>
  <div class="col-md-6">
    <div class="text-center">
      <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalNewSolucao">Adicionar solução</a>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-4">
    <h3>Dados reclamação</h3><br>
      <p>Descrição: {{$reclamacao[0]->description}}</p>
      <p>Usuario: {{$user[0]->name}}</p>
  </div>
  <div class="col-md-4">
    <!-- Aparecer apenas quando for != null -->
      <h3>Soluções</h3><br>

    @foreach($solucoes as $solucao)
    <hr>
      <p>Titulo: {{$solucao->title}}</p>
      <p>Descrição: {{$solucao->description}}</p>
      @foreach($authors as $author)
        @if($author->id == $solucao->adminId)
          <p>Autor: {{$author->name}}</p>
        @endif
      @endforeach
    @endforeach
  </div>
</div>
@endsection
