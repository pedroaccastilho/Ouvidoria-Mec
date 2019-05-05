<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function menu(Request $req){
      $dados = (object)$req->all();
      if(isset($dados->home)){
        return redirect()->route('login.index');
      }else if(isset($dados->logout)){
        Auth::logout();
      }else if(isset($dados->cadastrarUsuario)){
        return redirect()->route('user.cadastrar');
      } if(isset($dados->cadastrarAdmin)){
        return redirect()->route('admin.cadastrar');
      }

      return redirect()->route('login.index');
    }
}
