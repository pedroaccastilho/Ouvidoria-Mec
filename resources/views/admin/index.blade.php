@extends('layout.standard')

@section('title','Admin')

@section('content')
  <h3>Admin</h3>
  <form method="post" action={{route('login.sair')}}>
    @csrf
    <input type="submit" name="submit">
  </form>
@endsection
