@extends('layout.standard')

@section('title','Admin')

@section('content')
  <h3>Admin {{Auth::user()->name}}</h3>

@endsection
