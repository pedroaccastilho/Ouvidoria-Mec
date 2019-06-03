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
Route::post('/login/enter',['as'=>'login.enter','uses'=>'LoginController@enter']);

Route::group(['middleware'=>'auth'],function(){
  Route::get('/login/logout',['as'=>'login.logout','uses'=>'LoginController@logout']);
  Route::get('/changePassword',['as'=>'login.changePassword','uses'=>'LoginController@changePassword']);
  Route::post('/changePassword/save',['as'=>'login.saveNewPassword','uses'=>'LoginController@savePassword']);
});

//Rotas de parte administrativa
Route::group(['middleware'=>'admin'],function(){
  Route::get('/admin',['as'=>'admin.index','uses'=>'AdminController@index']);

  //objeto users
  Route::post('/user/savenew',['as'=>'user.savenew','uses'=>'UserController@saveNew']);
  Route::post('/user/saveupdate',['as'=>'user.saveupdate','uses'=>'UserController@saveUpdate']);
  Route::post('/user/delete/{id}',['as'=>'user.destroy','uses'=>'UserController@destroy']);
  Route::get('/user/showAll',['as'=>'user.showAll','uses'=>'UserController@showAll']);
  Route::get('/user/show/{id}',['as'=>'user.show','uses'=>'UserController@show']);

  //objeto departments
  Route::post('/department/savenew',['as'=>'department.savenew','uses'=>'DepartmentController@saveNew']);
  Route::get('/department/showAll',['as'=>'department.showAll','uses'=>'DepartmentController@showAll']);
  Route::get('/department/show/{id}',['as'=>'department.show','uses'=>'DepartmentController@show']);

  //objeto reclamacoes
  Route::get('/reclamacao/showAll',['as'=>'reclamacao.showAll','uses'=>'ReclamacaoController@showAll']);
  Route::get('/reclamacao/show/{id}',['as'=>'reclamacao.show','uses'=>'ReclamacaoController@show']);
});

//Rotas de parte funcional
Route::group(['middleware'=>'user'],function(){
  Route::get('/user',['as'=>'user.index','uses'=>'UserController@index']);
  Route::get('/user/reclamacao',['as'=>'reclamacao.new','uses' => 'ReclamacaoController@new']);
  Route::post('/user/reclamacao/savenew',['as' => 'reclamacao.savenew','uses'=>'ReclamacaoController@saveNew']);
});
