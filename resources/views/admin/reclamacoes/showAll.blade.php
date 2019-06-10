@extends('layout.standard')

@section('title','Reclamações')

@section('content')
  <div class="row">
      <div class="col-md-6">
        <h2>Reclamações</h2>
      </div>
  </div>
  <div class="panel">
      <table class="table" align="center">
          <thead>
          <tr>
              <th> # </th>
              <th> Nome</th>
              <th> Nome Usuario</th>
              <th> Departamento</th>
              <th> Respondido?</th>
          </tr>
          </thead>
          <tbody>
          @foreach($reclamacoes as $reclamacao)
              <tr>
                  <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$reclamacao->id}}</a> </td>
                  <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$reclamacao->description}}</a> </td>
                  @foreach($users as $user)
                    @if($user->id == $reclamacao->userId)
                      @if($reclamacao->isAnonymous)
                        <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">Denuncia Anonima</a> </td>
                      @else
                        <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$user->name}}</a> </td>
                      @endif
                    @endif
                  @endforeach
                  @foreach($departments as $department)
                    @if($department->id == $reclamacao->departmentId)
                      <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$department->name}}</a> </td>
                    @endif
                  @endforeach
                  @if($reclamacao->adminId != null)
                    <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}"><i class="fas fa-check-circle"></i></a></td>
                  @endIf
              </tr>
          @endforeach

          </tbody>
      </table>
  </div>
@endsection
