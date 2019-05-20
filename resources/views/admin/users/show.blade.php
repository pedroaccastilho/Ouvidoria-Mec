@extends('layout.standard')

@section('title','Registro de usuario')

@section('content')
      <div class="modal fade" id="modalUpdateForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <form action={{route('user.saveupdate')}} method="post" id="formAction">
          @csrf
          <input type="hidden" name="id" value="{{$user[0]->id}}">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Atualizar usuario</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body mx-3">
                  <div class="form-group row">
                      <label class="col-sm-4 col-form-label">* Tipo:</label>
                      <div class="col-sm-4">
                          <div class="form-check">
                              @if($user[0]->type == 'Proprietario')
                                <input class="form-check-input" type="radio" name="type" value="Proprietario" checked>
                              @else
                                <input class="form-check-input" type="radio" name="type" value="Proprietario">
                              @endif
                              <label class="form-check-label" for="prop">Proprietário</label>
                          </div>
                          <div class="form-check">
                              @if($user[0]->type == 'Locatario')
                                <input class="form-check-input" type="radio" name="type" value="Locatario" checked>
                              @else
                                <input class="form-check-input" type="radio" name="type" value="Locatario">
                              @endif
                              <label class="form-check-label" for="loc">Locatário</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="Nome" class="col-sm-4 col-form-label">* Nome:</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" maxlength="50" name="name" placeholder="Seu nome" value="{{$user[0]->name}}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="CPF" class="col-sm-4 col-form-label">* CPF:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" maxlength="11" name="cpf" placeholder="000.000.000-00" value="{{$user[0]->cpf}}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="RG" class="col-sm-4 col-form-label">* RG:</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" maxlength="9" name="rg" placeholder="00.000.000-0" value="{{$user[0]->rg}}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-sm-4 col-form-label">* Sexo:</label>
                      <div class="col-sm-4">
                          <div class="form-check">
                            @if($user[0]->genre == 'Masculino')
                              <input class="form-check-input" type="radio" name="genre" value="Masculino" checked>
                            @else
                              <input class="form-check-input" type="radio" name="genre" value="Masculino">
                            @endif
                              <label class="form-check-label" for="masc">Masculino</label>
                          </div>
                          <div class="form-check">
                              @if($user[0]->genre == 'Feminino')
                                <input class="form-check-input" type="radio" name="genre" value="Feminino" checked>
                              @else
                                <input class="form-check-input" type="radio" name="genre" value="Feminino">
                              @endif
                              <label class="form-check-label" for="fem">Feminino</label>
                          </div>
                          <div class="form-check">
                              @if($user[0]->genre == 'Outros')
                                <input class="form-check-input" type="radio" name="genre" value="Outros" checked>
                              @else
                                <input class="form-check-input" type="radio" name="genre" value="Outros">
                              @endif
                              <input class="form-check-input" type="radio" name="genre" value="Outros">
                              <label class="form-check-label" for="outro">Outros</label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="Data" class="col-sm-4 col-form-label">* Data de nascimento:</label>
                      <div class="col-sm-5">
                          <input type="date" class="form-control" name="birthday" value="{{$user[0]->birthday}}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="Email" class="col-sm-4 col-form-label">* E-mail:</label>
                      <div class="col-sm-8">
                          <input type="email" class="form-control" maxlength="50" name="email" placeholder="exemplo@email.com" value="{{$user[0]->email}}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="Fone" class="col-sm-4 col-form-label">* Telefone:</label>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" maxlength="11" name="phone" placeholder="(99)9999-9999" value="{{$user[0]->phone}}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="apartmentNumber" class="col-sm-4 col-form-label">* Nº/Apto:</label>
                      <div class="col-3">
                          <input type="number" name="apartmentNumber" id="apartmentNumber" class="form-control" placeholder="Nº" value="{{$user[0]->apartmentNumber}}" required>
                      </div>
                      <label for="block" class="col-sm-2 col-form-label">Bloco:</label>
                      <div class="col-3">
                          <input type="text" name="block" id="block" class="form-control" placeholder="Bloco" value="{{$user[0]->block}}" required>
                      </div>
                  </div>
                  @if($user[0]->isAdm)
                  <input type="hidden" name="isAdm" value="true">
                  <div class="form-group row" id="department">
                      <label for="Condominio" class="col-sm-4 col-form-label">* Departamento:</label>
                      <div class="col-sm-8">
                          <select class="custom-select" name="department" multiple>
                              @foreach($departments as $department)
                                  <option value="{{$department->id}}">{{$department->name}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                  @endif
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
        <form action={{route('user.destroy',$user[0]->id)}} method="post" id="formAction">
          @csrf
          <input type="hidden" name="id" value="{{$user[0]->id}}">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Deletar usuario?</h4>
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
        <div class="col-md-6">
          <h2>{{$user[0]->name}}</h2>
        </div>
        <div class="col-md-6">
          <div class="text-center">
            <a class="btn btn-red btn-rounded mb-4" data-toggle="modal" data-target="#modalDeleteForm">Deletar</a>
            <a class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalUpdateForm">Editar</a>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row">
        <div class="col-md-4">
          <h3>Dados pessoais</h3><br>
            <p>Nome: {{$user[0]->name}}</p>
            <p>CPF: {{$user[0]->cpf}}</p>
            <p>RG: {{$user[0]->rg}}</p>
            <p>Genero: {{$user[0]->genre}}</p>
            <p>Data de nascimento: {{date("d/m/Y", strtotime($user[0]->birthday))}}</p>
        </div>
        <div class="col-md-4">
          <h3>Dados cadastrais</h3><br>
            <p>Tipo: {{$user[0]->type}}</p>
            <p>Email: {{$user[0]->email}}</p>
            <p>Telefone: {{$user[0]->phone}}</p>
        </div>
        <div class="col-md-4">
          <h3>Dados administrativos</h3><br>
            <p>Numero de apartamento: {{$user[0]->apartmentNumber}}</p>
            <p>Bloco: {{$user[0]->block}}</p>
        </div>
      </div>


@endsection
