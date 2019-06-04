<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Solucao extends Model
{
  public static function saveNew($dados){
    $obj = new Solucao();
    $obj->description  = $dados->description;
    $obj->title  = $dados->title;
    $obj->reclamacaoId = $dados->reclamacaoId;
    $obj->adminId = Auth::user()->id;
    $obj->isNew = true;
    $obj->save();

    DB::table('reclamacaos')->where('id',$dados->reclamacaoId)->update(['adminId'=>Auth::user()->id, 'updated_at'=>date('Y-m-d H:i:s'), 'isNew'=>false]);


    return $obj;
  }
}
