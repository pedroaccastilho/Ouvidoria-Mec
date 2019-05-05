<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','isAdm'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function newUser($dados, $isAdm){
      $user = (object)User::where('email',$dados->email)->get();
      if($user->isEmpty()){
        $user = new User();
      }else{
        $user = $user[0];
      }
      $user->isAdm = $isAdm;
      $user->name  = $dados->name;
      $user->email = $dados->email;
      $user->password = bcrypt($dados->password);
      $user->adminId = Auth::user()->id;
      $user->save();
    }
}
