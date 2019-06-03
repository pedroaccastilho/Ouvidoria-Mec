@extends('layout.standard')

@section('title','Registro de departamento')

@section('content')
      <h2>{{$reclamacao[0]->description}}</h2>
      <p>{{$reclamacao[0]->userId}}</p>
@endsection
