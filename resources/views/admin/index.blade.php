@extends('layout.standard')

@section('title','Admin')

@section('content')
@if(!$reclamacoes->isEmpty())
<div class="row">
    <div class="col-md-6">
      <h4>Novas Reclamações</h4>
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
        </tr>
        </thead>
        <tbody>
        @foreach($reclamacoes as $reclamacao)
            <tr>
                <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$reclamacao->id}}</a> </td>
                <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$reclamacao->description}}</a> </td>
                @foreach($users as $user)
                  @if($user->id == $reclamacao->userId)
                    <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$user->name}}</a> </td>
                  @endif
                @endforeach
                @foreach($departments as $department)
                  @if($department->id == $reclamacao->departmentId)
                    <td> <a href="{{route('reclamacao.show',$reclamacao->id)}}">{{$department->name}}</a> </td>
                  @endif
                @endforeach
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endif
@endsection
