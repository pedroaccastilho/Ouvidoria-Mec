@extends('layout.standard')

@section('title','User')

@section('content')
<div class="col-md-12">


  <div class="row">
      <div class="col-md-12">
          <div class="page-header">
              <h2>Todos Usuarios</h2>
          </div>
      </div>
  </div>
  <div class="panel">
      <table class="table" align=center>
          <thead>
          <tr>
              <th> # </th>
              <th> Nome</th>
              <th> Email</th>
              <th> Ver</th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $user)
              <tr>
                  <td> {{$user->id}}</td>
                  <td> {{$user->name}}</td>
                  <td> {{$user->email}}</td>
                  <td>
                      <a class="btn btn-primary" href="#">
                          <span class="glyphicon glyphicon-search"></span>
                      </a>
                  </td>
              </tr>
          @endforeach

          </tbody>
      </table>
  </div>
</div>
@endsection
