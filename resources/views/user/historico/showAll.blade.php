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
                  <td> <a href="{{route('historico.show',$reclamacao->id)}}">{{$reclamacao->description}}</a> </td>
                  @if($reclamacao->adminId!=null)
                    @foreach($authors as $author)
                      @if($author->id == $reclamacao->adminId)
                        <td> <a href="{{route('historico.show',$reclamacao->id)}}">{{$author->name}}</a> </td>
                      @endif
                    @endforeach
                    @else
                      <td> <a href="{{route('historico.show',$reclamacao->id)}}"><b>Não respondido</b></a> </td>
                  @endif
                  @foreach($departments as $department)
                    @if($department->id == $reclamacao->departmentId)
                      <td> <a href="{{route('historico.show',$reclamacao->id)}}">{{$department->name}}</a> </td>
                    @endif
                  @endforeach
                  <td> <a href="{{route('historico.show',$reclamacao->id)}}">{{$reclamacao->created_at->format('d/m/Y H:i')}}</a></td>
                  <td> <a href="{{route('historico.show',$reclamacao->id)}}">{{$reclamacao->updated_at->format('d/m/Y H:i')}}</a></td>
              </tr>
          @endforeach

          </tbody>
      </table>
  </div>
</div>

@endsection
