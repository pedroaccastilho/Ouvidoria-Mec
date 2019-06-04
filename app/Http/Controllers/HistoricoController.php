<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Reclamacao;
use App\Department;
use App\Solucao;
use App\User;
use Auth;

class HistoricoController extends Controller
{
  public function showAll(){
    $reclamacoes = Reclamacao::orderBy('updated_at','DESC')->where('userId',Auth::user()->id)->get();
    $authors = User::select()->get();
    $departments = Department::select()->get();
    $solucoes = Solucao::whereIn('reclamacaoId',DB::table('reclamacaos')->select('id')->where('userId',Auth::user()->id))->get();
    return view('user.historico.showAll')->with(compact('reclamacoes',$reclamacoes))->with(compact('departments',$departments))->with(compact('solucoes',$solucoes))->with(compact('authors',$authors));
  }

  public function show($id){
    $reclamacao = (object)Reclamacao::where('id',$id)->get();
    $user = User::where('id',$reclamacao[0]->userId)->get();
    $authors = User::select()->get();
    $department = Department::where('id',$reclamacao[0]->departmentId)->get();
    $solucoes = Solucao::where('reclamacaoId',$reclamacao[0]->id)->get();
    return view('user.historico.show')->with(compact('reclamacao',$reclamacao))->with(compact('user',$user))->with(compact('department',$department))->with(compact('solucoes',$solucoes))->with(compact('authors',$authors));
  }
}
