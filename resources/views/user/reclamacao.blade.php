@extends('layout.standardUser')

@section('title','User')

@section('content')
<!--Grid row-->
<div class="row center backgroundDiv">
  <div style="width:800px;">
    <form action={{route('reclamacao.savenew')}} method="post" id="formAction">
      @csrf
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Nova reclamacão</h4>
          </div>
          <div class="modal-body">

              <div class="form-group row">
                  <label for="Nome" class="col-sm-4 col-form-label">* Departamento:</label>
                  <div class="col-sm-8">
                      @foreach($departments as $department)
                        <input type="radio" name="department" value="{{$department->id}}"> {{$department->name}}<br>
                      @endforeach
                  </div>
              </div>

              <div class="form-group row">
                  <label for="description" class="col-sm-4 col-form-label">* Descrição:</label>
                  <div class="col-sm-5">
                      <textarea class="form-control" name="description" rows="8" cols="80" required></textarea>
                  </div>
              </div>
              <!--Image>
              <div class="form-group row">
                  <label for="image" class="col-sm-4 col-form-label">Imagem:</label>
                  <div class="col-sm-5">
                      <input type="file" class="form-control" name="image">
                  </div>
              </div>
              <!-->
            </div>
          <div class="modal-footer d-flex justify-content-center">
            <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
          </div>
    </form>
  </div>
</div>
<!--Grid row-->
@endsection
