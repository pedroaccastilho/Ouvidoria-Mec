@extends('layout.standard')

@section('title','Registro de departamento')

@section('content')
      <h2>{{$department[0]->name}}</h2>
      <p>{{$department[0]->description}}</p>
@endsection
