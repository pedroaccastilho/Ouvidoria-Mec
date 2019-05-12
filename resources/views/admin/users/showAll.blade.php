@extends('layout.standard')

@section('title','User')

@section('content')
  <div class="row">
      <div class="col-md-6">
        <h2>Usuarios</h2>
      </div>
      <div class="col-md-6">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <form action={{route('user.save')}} method="post">
            @csrf
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Novo Usuario</h4>
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
                    <i class="fas fa-envelope prefix grey-text"></i>
                    <input type="email" name="email" id="defaultForm-email" class="form-control validate">
                    <label data-error="" data-success="" for="defaultForm-email">Email</label>
                  </div>
                  <div class="md-form mb-4">
                    <i class="fas fa-lock prefix grey-text"></i>
                    <input type="password" name="password" id="defaultForm-pass" class="form-control validate">
                    <label data-error="" data-success="" for="defaultForm-pass">Senha</label>
                  </div>
                  <div class="md-form mb-4 custom-control custom-checkbox">
                    <input type="checkbox" name="isAdm" class="custom-control-input" id="tableDefaultCheck1">
                    <label class="custom-control-label" for="tableDefaultCheck1">Administrador</label>
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
            <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Novo</a>
          </div>
      </div>
  </div>
  <div class="panel">
      <table class="table" align="center">
          <thead>
          <tr>
              <th> # </th>
              <th> Nome</th>
              <th> Email</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
              <tr>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->id}}</a> </td>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->name}}</a> </td>
                  <td> {{$user->email}}</td>
              </tr>
          @endforeach

          </tbody>
      </table>
  </div>
@endsection
