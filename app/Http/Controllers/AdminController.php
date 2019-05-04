<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(){
      return view('admin.index');
    }

    public function cadastrar(){
      return view('admin.cadastrar');
    }

    public function salvar(Request $req){
      $dados = (object)$req->all();
      User::newUser($dados, true);

      return redirect()->route('login.index');
    }
}
