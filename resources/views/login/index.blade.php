@extends('layout.standard')

@section('title','Login')

@section('content')
<h3>Login</h3>
  <form method="post" action={{route('login.entrar')}}>
    @csrf
    <p>Email:<input type="email" name="email"></p>
    <p>Password:<input type="password" name="password"></p>
    <p><input type="submit" name="submit"></p>
  </form>
@endsection
