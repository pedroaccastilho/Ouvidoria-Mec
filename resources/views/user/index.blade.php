@extends('layout.standard')

@section('title','User')

@section('content')
  <h3>User {{Auth::user()->name}}</h3>
@endsection
