@extends('layout.standard')

@section('title','User')

@section('content')
  <h3>User</h3>
  <form method="post" action={{route('login.sair')}}>
    @csrf
    <input type="submit" name="submit">
  </form>
@endsection
