@extends('layout.standardUser')

@section('title','MEC - Histórico')

@section('content')
<div style="width:800px;" class="center backgroundDiv">
  <div class="row">
    <div class="col-md-12">
      <h2>Departamento: {{$department[0]->name}}</h2>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-6">
      <h3>Dados reclamação</h3><br>
        <p>Descrição: {{$reclamacao[0]->description}}</p>
        <p>Data de abertura:<br> {{$reclamacao[0]->created_at->format('d/m/Y H:i')}}</p>
        <p>Data de ultima alteração:<br> {{$reclamacao[0]->updated_at->format('d/m/Y H:i')}}</p>
    </div>
    <div class="col-md-6">
      <!-- Aparecer apenas quando for != null -->
        <h3>Soluções</h3><br>

      @foreach($solucoes as $solucao)
      <hr>
        <p>Titulo: {{$solucao->title}}</p>
        <p>Descrição: {{$solucao->description}}</p>
        @foreach($authors as $author)
          @if($author->id == $solucao->adminId)
            <p>Autor: {{$author->name}}</p>
          @endif
        @endforeach
      @endforeach
    </div>
  </div>
</div>
@endsection
