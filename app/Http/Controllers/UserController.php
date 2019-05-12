<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
      return view('user.index');
    }

    public function showAll(){
      $users = User::orderBy('created_at','DESC')->get();
      return view('admin/users/showAll', compact('users',$users));
    }

    public function show($id){
      $user = (object)User::where('id',$id)->get();
      return view('admin.users.show')->with(['user'=>$user]);
    }

    public function save(Request $req){
      $dados = (object)$req->all();
      $user = User::newUser($dados);

      return redirect()->route('user.show',$user->id);
    }
}
