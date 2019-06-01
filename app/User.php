<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Arr;
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

    public static function saveNew($dados){
      $user = new User();
      $user->isAdm = Arr::has($dados,'isAdm');
      $user->type  = $dados->type;
      $user->name  = $dados->name;
      $user->cpf   = $dados->cpf;
      $user->rg    = $dados->rg;
      $user->genre  = $dados->genre;
      $user->birthday  = $dados->birthday;
      $user->email = $dados->email;
      $user->condominium = '1';
      $user->phone  = $dados->phone;
      $user->apartmentNumber  = $dados->apartmentNumber;
      $user->block  = $dados->block;
      $user->password = bcrypt('123');
      $user->adminId = Auth::user()->id;
      $user->save();

      return $user;
    }

    public static function saveUpdate($dados){
      $user = User::FindOrFail($dados->id);
      $user->isAdm = Arr::has($dados,'isAdm');
      $user->type  = $dados->type;
      $user->name  = $dados->name;
      $user->cpf   = $dados->cpf;
      $user->rg    = $dados->rg;
      $user->genre  = $dados->genre;
      $user->birthday  = $dados->birthday;
      $user->email = $dados->email;
      $user->condominium = '1';
      $user->phone  = $dados->phone;
      $user->apartmentNumber  = $dados->apartmentNumber;
      $user->block  = $dados->block;
      $user->password = bcrypt('123');
      $user->adminId = Auth::user()->id;
      $user->save();

      return $user;
    }
}
