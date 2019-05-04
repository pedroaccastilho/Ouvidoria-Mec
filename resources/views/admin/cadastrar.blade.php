@extends('layout.standard')

@section('title','Admin')

@section('content')
  <h3>Cadastrar Admin</h3>
  <form action={{route('admin.salvar')}} method="post">
    @csrf
    <p>Name:<input type="text" name="name"></p>
    <p>Email:<input type="email" name="email"></p>
    <p>Password:<input type="password" name="password"></p>
    <input type="submit" name="submit" value="Enviar">
  </form>
@endsection
