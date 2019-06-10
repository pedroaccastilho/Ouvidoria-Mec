@extends('layout.standardUser')

@section('title','MEC - FAQ')

@section('content')
<div style="width:800px; height:300px;" class="center backgroundDiv">
  <div class="row">
    <div class="col-md-12">
      <br>
      <h2>{{$faq[0]->title}}</h2>
    </div>
  </div>
  <br>
  <div class="row">
    <br>
    <div class="col-md-6">
      <h5>{{$faq[0]->description}}</h5>
    </div>
    <div class="col-md-6">
      <h5>R: {{$faq[0]->response}}</h5>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <h6>Respondeu sua dúvida? Se não, abra uma reclamação, que iremos te responder o mais rapido possivel!</h6>
    </div>
  </div>
</div>
@endsection
