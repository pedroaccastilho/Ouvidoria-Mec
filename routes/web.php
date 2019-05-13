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
});

//Rotas de parte administrativa
Route::group(['middleware'=>'admin'],function(){
  Route::get('/admin',['as'=>'admin.index','uses'=>'AdminController@index']);

  //objeto users
  Route::post('/user/save',['as'=>'user.save','uses'=>'UserController@save']);
  Route::get('/user/showAll',['as'=>'user.showAll','uses'=>'UserController@showAll']);
  Route::get('/user/show/{id}',['as'=>'user.show','uses'=>'UserController@show']);

  //objeto departments
  Route::post('/department/save',['as'=>'department.save','uses'=>'DepartmentController@save']);
  Route::get('/department/showAll',['as'=>'department.showAll','uses'=>'DepartmentController@showAll']);
  Route::get('/department/show/{id}',['as'=>'department.show','uses'=>'DepartmentController@show']);
});

//Rotas de parte funcional
Route::group(['middleware'=>'user'],function(){
  Route::get('/user',['as'=>'user.index','uses'=>'UserController@index']);
});
