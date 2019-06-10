<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class FAQ extends Model
{
  public static function saveNew($dados){
    $obj = new FAQ();
    $obj->title  = $dados->title;
    $obj->description  = $dados->description;
    $obj->response  = $dados->response;
    $obj->adminId = Auth::user()->id;
    $obj->save();

    return $obj;
  }

  public static function saveUpdate($dados){
    $obj = FAQ::FindOrFail($dados->id);
    $obj->title  = $dados->title;
    $obj->description  = $dados->description;
    $obj->response  = $dados->response;
    $obj->adminId = Auth::user()->id;
    $obj->save();

    return $obj;
  }
}
