<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Department extends Model
{
  public static function saveNew($dados){
    $obj = new Department();
    $obj->name  = $dados->name;
    $obj->description  = $dados->description;
    $obj->adminId = Auth::user()->id;
    $obj->save();

    return $obj;
  }

  public static function saveUpdate($dados){
    $obj = Department::FindOrFail($dados->id);
    $obj->name  = $dados->name;
    $obj->description  = $dados->description;
    $obj->adminId = Auth::user()->id;
    $obj->save();

    return $obj;
  }
}
