@extends('layout.standard')

@section('title','Registro de departamento')

@section('content')
<div class="modal fade" id="modalUpdateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action={{route('department.saveupdate')}} method="post" id="formAction">
    @csrf
    <input type="hidden" name="id" value="{{$department[0]->id}}">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Atualizar Departamento</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
            <div class="form-group row">
                <label for="Nome" class="col-sm-4 col-form-label">* Nome:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" maxlength="255" name="name" placeholder="Seu nome" value="{{$department[0]->name}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Nome" class="col-sm-4 col-form-label">* Descrição:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" maxlength="255" name="description" placeholder="Seu nome" value="{{$department[0]->description}}" required>
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
<div class="modal fade" id="modalDeleteForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action={{route('department.destroy',$department[0]->id)}} method="post" id="formAction">
    @csrf
    <input type="hidden" name="id" value="{{$department[0]->id}}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Deletar departamento?</h4>
        </div>
        <div class="modal-body mx-3">
            <div class="form-group row">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-primary btn-rounded" name="submit" value="Sim">
              </div>
              <div class="col-md-3">
                <button type="button" data-dismiss="modal" class="btn btn-red btn-rounded" name="button">Não</button>
              </div>
              <div class="col-md-3"></div>
            </div>
        </div>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-3">
    <h2>Nome: {{$department[0]->name}}</h2>
    <h4>Descrição: {{$department[0]->description}}</h4>
  </div>
  <div class="col-md-6">
    <div class="text-center">
      <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalUpdateForm">Editar</a>
      <a class="btn btn-red btn-rounded mb-4" data-toggle="modal" data-target="#modalDeleteForm">Deletar</a>
    </div>
  </div>
</div>
@endsection
