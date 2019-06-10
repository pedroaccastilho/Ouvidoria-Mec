<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Reclamacao;
use App\Department;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function index(){
      $reclamacoes = Reclamacao::where('isNew',true)->orderBy('created_at','DESC')->whereIn('departmentId',DB::table('rel_users_departments')->select('departmentId')->where('adminId', Auth::user()->id))->get();
      if(!$reclamacoes->isEmpty()){
        Reclamacao::where('isNew',true)->whereIn('departmentId',DB::table('rel_users_departments')->select('departmentId')->where('adminId', Auth::user()->id))->update(['isNew'=>false]);
      }
      $users = User::select()->get();
      $departments = Department::select()->get();

      return view('admin.index')->with(compact('reclamacoes',$reclamacoes))->with(compact('users',$users))->with(compact('departments',$departments));
    }
}
