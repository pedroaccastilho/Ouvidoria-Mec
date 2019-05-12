@extends('layout.standard')

@section('title','Registro de usuario')

@section('content')
      <h2>{{$user[0]->name}}</h2>
      <p>{{$user[0]->email}}</p>
      <p>{{$user[0]->password}}</p>
@endsection
