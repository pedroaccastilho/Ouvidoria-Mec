<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
      return view('user.index');
    }

    public function cadastrar(){
      return view('user.cadastrar');
    }

    public function salvar(Request $req){
      $dados = (object)$req->all();
      User::newUser($dados, false);

      return redirect()->route('login.index');
    }
}
