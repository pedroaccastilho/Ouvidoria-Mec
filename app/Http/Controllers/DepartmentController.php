<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
  public function showAll(){
    $departments = Department::orderBy('created_at','DESC')->get();
    return view('admin/departments/showAll', compact('departments',$departments));
  }

  public function show($id){
    $department = (object)Department::where('id',$id)->get();
    return view('admin.departments.show')->with(['department'=>$department]);
  }

  public function save(Request $req){
    $dados = (object)$req->all();
    $user = Department::saveNew($dados);

    return redirect()->route('department.show',$user->id);
  }
}
