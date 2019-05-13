<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  public static function saveNew($dados){
    $department = new Department();
    $department->name  = $dados->name;
    $department->description  = $dados->description;
    $department->save();

    return $department;
  }
}
