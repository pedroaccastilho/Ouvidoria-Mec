<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login',['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){
  Route::post('/login/sair',['as'=>'login.sair','uses'=>'LoginController@sair']);
});

Route::group(['middleware'=>'admin'],function(){
  Route::get('/admin',['as'=>'admin.index','uses'=>'AdminController@index']);
});

Route::group(['middleware'=>'user'],function(){
  Route::get('/user',['as'=>'user.index','uses'=>'UserController@index']);
});
