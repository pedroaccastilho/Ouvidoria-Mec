<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Solucao extends Model
{
  public static function saveNew($dados){
    $obj = new Solucao();
    $obj->description  = $dados->description;
    $obj->title  = $dados->title;
    $obj->protocoloId = $dados->protocoloId;
    $obj->adminId = Auth::user()->id;
    $obj->save();

    return $obj;
  }
}
