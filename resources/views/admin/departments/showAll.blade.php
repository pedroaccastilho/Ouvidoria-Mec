@extends('layout.standard')

@section('title','Departamentos')

@section('content')
  <div class="row">
      <div class="col-md-6">
        <h2>Departamentos</h2>
      </div>
      <div class="col-md-6">
        <div class="modal fade" id="modalNewForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <form action={{route('department.savenew')}} method="post">
            @csrf
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Novo Departamento</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <i class="fas fa-address-card prefix grey-text"></i>
                    <input type="text" name="name" id="defaultForm-name" class="form-control validate" required>
                    <label data-error="" data-success="" for="defaultForm-email">Nome</label>
                  </div>
                  <div class="md-form mb-5">
                    <i class="fas fa-address-card prefix grey-text"></i>
                    <input type="text" name="description" id="defaultForm-description" class="form-control validate" required>
                    <label data-error="" data-success="" for="defaultForm-description">Descrição</label>
                  </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
                </div>
              </div>
            </div>
          </form>
        </div>

          <div class="text-center">
            <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalNewForm">Novo</a>
          </div>
      </div>
  </div>
  <div class="panel">
      <table class="table" align="center">
          <thead>
          <tr>
              <th> # </th>
              <th> Nome</th>
              <th> Descrição</th>
          </tr>
          </thead>
          <tbody>
          @foreach($departments as $department)
              <tr>
                  <td> <a href="{{route('department.show',$department->id)}}">{{$department->id}}</a> </td>
                  <td> <a href="{{route('department.show',$department->id)}}">{{$department->name}}</a> </td>
                  <td> <a href="{{route('department.show',$department->id)}}">{{$department->description}}</a> </td>
              </tr>
          @endforeach

          </tbody>
      </table>
  </div>
@endsection
