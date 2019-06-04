<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;

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

    public function enter(Request $req){
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

    public function logout(){
      Auth::logout();
      return redirect()->route('login.index');
    }

    public function changePassword(){
      return view('login.changePassword');
    }

    public function savePassword(Request $req){
      $info = (object)$req->all();
      $user = User::FindOrFail(Auth::user()->id);

      $user->password = bcrypt($info->password);
      $user->email_verified_at = date('Y-m-d H:i:s');
      $user->save();
      return redirect()->route('login.index');
    }

}
