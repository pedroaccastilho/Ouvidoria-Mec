@extends('layout.standard')

@section('title','Usuarios')

@section('content')
  <div class="row">
      <div class="col-md-6">
        <h2>Usuarios</h2>
      </div>
      <div class="col-md-6">
          <div class="text-center">
            <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalNewForm">Novo</a>
          </div>
      </div>
  </div>
  <div class="col-md-12">
    <div class="modal fade" id="modalNewForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <form action={{route('user.savenew')}} method="post" id="formAction">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Novo Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">* Tipo:</label>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="P" checked>
                            <label class="form-check-label" for="prop">Proprietário</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="type" value="L">
                            <label class="form-check-label" for="loc">Locatário</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Nome" class="col-sm-4 col-form-label">* Nome:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" maxlength="50" name="name" placeholder="Seu nome" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="CPF" class="col-sm-4 col-form-label">* CPF:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" maxlength="11" name="cpf" placeholder="000.000.000-00" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="RG" class="col-sm-4 col-form-label">* RG:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" maxlength="9" name="rg" placeholder="00.000.000-0" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">* Sexo:</label>
                    <div class="col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Masculino" checked>
                            <label class="form-check-label" for="masc">Masculino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Feminino">
                            <label class="form-check-label" for="fem">Feminino</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" value="Outros">
                            <label class="form-check-label" for="outro">Outro</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Data" class="col-sm-4 col-form-label">* Data de nascimento:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="birthday" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Email" class="col-sm-4 col-form-label">* E-mail:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" maxlength="50" name="email" placeholder="exemplo@email.com" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Fone" class="col-sm-4 col-form-label">* Telefone:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" maxlength="11" name="phone" placeholder="(99)9999-9999" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="apartmentNumber" class="col-sm-4 col-form-label">* Nº Apto/ Bloco:</label>
                    <div class="col-3">
                        <input type="text" name="apartmentNumber" id="apartmentNumber" class="form-control" placeholder="Nº" required>
                    </div>
                    <div class="col-3">
                        <input type="text" name="block" id="block" class="form-control" placeholder="Bloco" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isAdm" class="col-sm-4 col-form-label">Administrador:</label>
                    <div class="col-sm-8">
                      <input type="checkbox" name="isAdm" id="isAdm" onchange="administratorCheckbox()">
                    </div>
                </div>
                <div class="form-group row" id="department" hidden>
                    <label for="Condominio" class="col-sm-4 col-form-label">* Departmento:</label>
                    <div class="col-sm-8">
                        <select class="custom-select" name="department" id="inputDepartment">

                        </select>
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
  </div>

  <div class="panel">
      <table class="table" align="center">
          <thead>
          <tr>
              <th> # </th>
              <th> Nome</th>
              <th> Email</th>
              <th> Telefone</th>
              <th> Numero de apartamento</th>
              <th> Administrador</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
              <tr>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->id}}</a> </td>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->name}}</a> </td>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->email}}</a> </td>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->phone}}</a> </td>
                  <td> <a href="{{route('user.show',$user->id)}}">{{$user->apartmentNumber}}</a> </td>
                  <td>
                    <a href="{{route('user.show',$user->id)}}">
                      @if($user->isAdm)
                        <i class="fas fa-check-circle"></i>
                      @endif
                    </a>
                  </td>
              </tr>
          @endforeach

          </tbody>
      </table>
      {{ $users->links() }}
  </div>
  <script>
    function administratorCheckbox() {
      var departmento = document.getElementById('department');
      var inputDepartamento = document.getElementById('inputDepartment');
      if(document.getElementById('isAdm').checked){
        departmento.hidden = false;
        inputDepartamento.required = true;
      }else{
        departmento.hidden = true;
        inputDepartamento.required = false;
      }
    }
  </script>
@endsection
