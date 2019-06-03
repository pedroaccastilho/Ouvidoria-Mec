@extends('layout.standardUser')

@section('title','MEC - Histórico')

@section('content')
<div class="center backgroundDiv">
  <div class="row">
      <div class="col-md-12">
        <h2>Histórico de Reclamações</h2>
      </div>
  </div>
  <div class="panel">
      <table class="table" align="center">
          <thead>
          <tr>
              <th> Descrição</th>
              <th> Autor Solução</th>
              <th> Departamento</th>
              <th> Data de Abertura</th>
              <th> Data de ultima alteração</th>
          </tr>
          </thead>
          <tbody>
          @foreach($reclamacoes as $reclamacao)
              <tr>
                  <td> {{$reclamacao->description}} </td>
                  @if($reclamacao->adminId!=null)
                    @foreach($authors as $author)
                      @if($author->id == $reclamacao->adminId)
                        <td> {{$author->name}} </td>
                      @endif
                    @endforeach
                    @else
                      <td> <b>Não respondido</b> </td>
                  @endif
                  @foreach($departments as $department)
                    @if($department->id == $reclamacao->departmentId)
                      <td> {{$department->name}} </td>
                    @endif
                  @endforeach
                  <td> {{$reclamacao->created_at->format('d/m/Y H:i:s')}}</td>
                  <td> {{$reclamacao->updated_at->format('d/m/Y H:i:s')}}</td>
              </tr>
          @endforeach

          </tbody>
      </table>
  </div>
</div>

@endsection
