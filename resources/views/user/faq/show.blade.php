@extends('layout.standardUser')

@section('title','MEC - FAQ')

@section('content')
<div style="width:800px; height:300px;" class="center backgroundDiv">
  <div class="row">
    <div class="col-md-12">
      <br>
      <h2>Titulo: {{$faq[0]->title}}</h2>
    </div>
  </div>
  <br>
  <div class="row">
    <br>
    <div class="col-md-6">
      <h5>Descrição: {{$faq[0]->description}}</h5>
    </div>
    <div class="col-md-6">
      <h5>Resposta: {{$faq[0]->response}}</h5>
    </div>
  </div>
</div>
@endsection
