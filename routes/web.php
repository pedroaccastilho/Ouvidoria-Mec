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
  Route::post('/department/saveupdate',['as'=>'department.saveupdate','uses'=>'DepartmentController@saveUpdate']);
  Route::get('/department/showAll',['as'=>'department.showAll','uses'=>'DepartmentController@showAll']);
  Route::get('/department/show/{id}',['as'=>'department.show','uses'=>'DepartmentController@show']);
  Route::post('/department/delete/{id}',['as'=>'department.destroy','uses'=>'DepartmentController@destroy']);

  //objeto faq
  Route::post('/faq/savenew',['as'=>'faq.savenew','uses'=>'FAQController@saveNew']);
  Route::post('/faq/saveupdate',['as'=>'faq.saveupdate','uses'=>'FAQController@saveUpdate']);
  Route::get('/faq/showAll',['as'=>'faq.showAll','uses'=>'FAQController@showAll']);
  Route::get('/faq/show/{id}',['as'=>'faq.show','uses'=>'FAQController@show']);
  Route::post('/faq/delete/{id}',['as'=>'faq.destroy','uses'=>'FAQController@destroy']);

  //objeto reclamacoes
  Route::get('/reclamacao/showAll',['as'=>'reclamacao.showAll','uses'=>'ReclamacaoController@showAll']);
  Route::get('/reclamacao/show/{id}',['as'=>'reclamacao.show','uses'=>'ReclamacaoController@show']);

  //objeto solucoes
  Route::post('/solucao/savenew',['as'=>'solucao.savenew','uses'=>'SolucaoController@savenew']);
});

//Rotas de parte funcional
Route::group(['middleware'=>'user'],function(){
  Route::get('/home',['as'=>'user.index','uses'=>'UserController@index']);

  //reclamacao
  Route::get('/reclamacao',['as'=>'reclamacao.new','uses' => 'ReclamacaoController@new']);
  Route::post('/reclamacao/savenew',['as' => 'reclamacao.savenew','uses'=>'ReclamacaoController@saveNew']);

  //historico de reclamacoes
  Route::get('/historico',['as'=>'historico.showAll','uses'=>'HistoricoController@showAll']);
  Route::get('/historico/{id}',['as'=>'historico.show','uses'=>'HistoricoController@show']);

  //faqs
  Route::get('/faq',['as'=>'faq.showAllToCustomer','uses'=>'FAQController@showAllToCustomer']);
  Route::get('/faq/{id}',['as'=>'faq.showToCustomer','uses'=>'FAQController@showToCustomer']);
});
