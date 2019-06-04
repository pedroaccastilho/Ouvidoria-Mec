<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Reclamacao extends Model
{
  public static function saveNew($dados){
    $obj = new Reclamacao();
    $obj->description  = $dados->description;
    $obj->userId = Auth::user()->id;
    $obj->departmentId = $dados->department;
    $obj->isNew = true;
    $obj->save();

    return $obj;
  }
}
