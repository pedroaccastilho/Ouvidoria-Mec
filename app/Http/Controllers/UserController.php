<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Department;


class UserController extends Controller
{
    public function index(){
      return view('user.index');
    }

    public function showAll(){
      $users = User::orderBy('created_at','DESC')->Paginate(10);
      return view('admin/users/showAll', compact('users',$users));
    }

    public function show($id){
      $user = (object)User::where('id',$id)->get();
      $departments = (object)Department::select()->get();
      return view('admin.users.show',['user'=>$user])->with(compact('departments',$departments));
    }

    public function saveNew(Request $req){
      $dados = (object)$req->all();
      $user = User::saveNew($dados);

      return redirect()->route('user.show',$user->id);
    }

    public function saveUpdate(Request $req){
      $dados = (object)$req->all();
      $user = User::saveUpdate($dados);

      return redirect()->route('user.show',$user->id);
    }

    public function destroy($id){
      $dados = User::FindOrFail($id);
      $dados->delete();

      return redirect()->route('user.showAll');
    }
}
