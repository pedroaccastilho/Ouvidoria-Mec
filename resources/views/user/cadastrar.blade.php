@extends('layout.standard')

@section('title','Usuario')

@section('content')
  <h3>Cadastrar Usuario</h3>
  <form action={{route('user.salvar')}} method="post">
    @csrf
    <p>Name:<input type="text" name="name"></p>
    <p>Email:<input type="email" name="email"></p>
    <p>Password:<input type="password" name="password"></p>
    <input type="submit" name="submit" value="Enviar">
  </form>
@endsection
