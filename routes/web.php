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

Route::get('/',['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login/entrar',['as'=>'login.entrar','uses'=>'LoginController@entrar']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('/login/sair',['as'=>'login.sair','uses'=>'LoginController@sair']);
});

Route::group(['middleware'=>'admin'],function(){
  Route::get('/admin',['as'=>'admin.index','uses'=>'AdminController@index']);
  Route::get('/admin/cadastrar',['as'=>'admin.cadastrar','uses'=>'AdminController@cadastrar']);
  Route::post('/admin/salvar',['as'=>'admin.salvar','uses'=>'AdminController@salvar']);

  Route::get('/user/cadastrar',['as'=>'user.cadastrar','uses'=>'UserController@cadastrar']);
  Route::post('/user/salvar',['as'=>'user.salvar','uses'=>'UserController@salvar']);
  Route::get('/user/listar',['as'=>'user.listar','uses'=>'UserController@listar']);
});

Route::group(['middleware'=>'user'],function(){
  Route::get('/user',['as'=>'user.index','uses'=>'UserController@index']);
});
