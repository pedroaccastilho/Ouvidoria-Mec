<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reclamacao;
use App\Department;

class AdminController extends Controller
{
    public function index(){
      $reclamacoes = Reclamacao::where('isNew',true)->get();
      Reclamacao::where('isNew',true)->update(['isNew'=>false]);
      $users = User::select()->get();
      $departments = Department::select()->get();

      return view('admin.index')->with(compact('reclamacoes',$reclamacoes))->with(compact('users',$users))->with(compact('departments',$departments));
    }
}
