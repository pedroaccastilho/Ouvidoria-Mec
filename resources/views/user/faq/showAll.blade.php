@extends('layout.standardUser')

@section('title','MEC - FAQ')

@section('content')
<div style="width:600px;" class="center backgroundDiv">
  <div class="row">
      <div class="col-md-12">
        <h2>Perguntas frequentes</h2>
      </div>
  </div>
  <form class="form-inline md-form form-sm" action="{{route('faq.showAllToCustomer')}}" method="get">
    @csrf
    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Descrição" name="description" aria-label="Pesquisar">
    <button class="btn btn-dark btn-rounded btn-sm my-0" type="submit">Pesquisar</button>
  </form>
  @if(!$faqs->isEmpty())
  <div class="panel">
      <table class="table" align="center">
          <thead>
          <tr>
              <th> Titulo</th>
              <th> Descrição</th>
          </tr>
          </thead>
          <tbody>
            @foreach($faqs as $faq)
                <tr>
                    <td> <a href="{{route('faq.showToCustomer',$faq->id)}}">{{$faq->title}}</a> </td>
                    <td> <a href="{{route('faq.showToCustomer',$faq->id)}}">{{$faq->description}}</a> </td>
                </tr>
            @endforeach

          </tbody>
      </table>
  </div>
  @else
  <br>
  <h5>Ops, parece que ainda não há Perguntas frequentes cadastradas!</h5>
  <h6>Cadastre uma nova reclamação com sua dúvida!</h6>
  @endif
</div>

@endsection
