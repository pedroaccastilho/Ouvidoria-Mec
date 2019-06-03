<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Reclamacao extends Model
{
  public static function saveNew($dados){
    $reclamacao = new Reclamacao();
    $reclamacao->description  = $dados->description;
    $reclamacao->userId = Auth::user()->id;
    $reclamacao->departmentId = $dados->department;
    $reclamacao->save();

    return $reclamacao;
  }
}
