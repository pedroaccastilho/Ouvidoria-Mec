<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Department extends Model
{
  public static function saveNew($dados){
    $department = new Department();
    $department->name  = $dados->name;
    $department->description  = $dados->description;
    $department->adminId = Auth::user()->id;
    $department->save();

    return $department;
  }
}
