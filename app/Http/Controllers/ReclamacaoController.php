<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamacao;
use App\Department;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class ReclamacaoController extends Controller
{
  public function new(){
    $departments = Department::select()->get();
    return view('user.reclamacao')->with(compact('departments',$departments));
  }

  public function saveNew(Request $req){
    $dados = (object)$req->all();
    $user = Reclamacao::saveNew($dados);

    return redirect()->route('user.index');
  }

  public function showAll(){
    $reclamacoes = Reclamacao::orderBy('created_at','DESC')->whereIn('departmentId',DB::table('rel_users_departments')->select('departmentId')->where('adminId', Auth::user()->id))->get();
    $users = User::select()->get();
    $departments = Department::select()->get();
    return view('admin.reclamacoes.showAll', compact('reclamacoes',$reclamacoes))->with(compact('users',$users))->with(compact('departments',$departments));
  }

  public function show($id){
    $reclamacao = (object)Reclamacao::where('id',$id)->get();
    return view('admin.reclamacoes.show')->with(['reclamacao'=>$reclamacao]);
  }
}