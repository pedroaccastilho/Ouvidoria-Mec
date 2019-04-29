<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
      if(Auth::check()){
        if(Auth::user()['isAdm']){
          return redirect()->route('admin.index');
        }
        return redirect()->route('user.index');
      }
      return view('login.index');
    }

    public function entrar(Request $req){
      $info = (object)$req->all();
      if(Auth::attempt(['email'=>$info->email,'password'=>$info->password])){
        if(Auth::user()->isAdm){
          return redirect()->route('admin.index');
        }else{
          return redirect()->route('user.index');
        }
      }
      return redirect()->route('login.index');
    }

    public function sair(Request $req){
      Auth::logout();
      return redirect()->route('login.index');
    }
}
