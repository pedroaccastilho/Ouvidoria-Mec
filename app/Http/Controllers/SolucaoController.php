<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamacao;
use App\Solucao;

class SolucaoController extends Controller
{
  public function saveNew(Request $req){
    $dados = (object)$req->all();
    $solucao = Solucao::saveNew($dados);

    return redirect()->route('reclamacao.show',$solucao->reclamacaoId);
  }
}
