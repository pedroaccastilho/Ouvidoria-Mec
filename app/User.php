<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
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
      $obj = new User();
      $obj->isAdm = Arr::has($dados,'isAdm');
      $obj->type  = $dados->type;
      $obj->name  = $dados->name;
      $obj->cpf   = $dados->cpf;
      $obj->rg    = $dados->rg;
      $obj->genre  = $dados->genre;
      $obj->birthday  = $dados->birthday;
      $obj->email = $dados->email;
      $obj->condominium = '1';
      $obj->phone  = $dados->phone;
      $obj->apartmentNumber  = $dados->apartmentNumber;
      $obj->block  = $dados->block;
      $obj->password = bcrypt('123');
      $obj->adminId = Auth::user()->id;
      $obj->save();

      //insert relacao em departments e users
      if(Arr::has($dados,'isAdm')){
        DB::table('rel_users_departments')->insert(['departmentId'=>$dados->department,'adminId'=>$obj->id,'created_at'=> date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')]);
      }

      return $obj;
    }

    public static function saveUpdate($dados){
      $obj = User::FindOrFail($dados->id);
      $obj->isAdm = Arr::has($dados,'isAdm');
      $obj->type  = $dados->type;
      $obj->name  = $dados->name;
      $obj->cpf   = $dados->cpf;
      $obj->rg    = $dados->rg;
      $obj->genre  = $dados->genre;
      $obj->birthday  = $dados->birthday;
      $obj->email = $dados->email;
      $obj->condominium = '1';
      $obj->phone  = $dados->phone;
      $obj->apartmentNumber  = $dados->apartmentNumber;
      $obj->block  = $dados->block;
      $obj->password = bcrypt('123');
      $obj->adminId = Auth::user()->id;
      $obj->save();

      return $obj;
    }
}
