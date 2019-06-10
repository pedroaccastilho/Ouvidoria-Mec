<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\FAQ;

class FAQController extends Controller
{
  public function showAll(){
    $faqs = FAQ::orderBy('created_at','DESC')->get();
    return view('admin.faq.showAll', compact('faqs',$faqs));
  }

  public function show($id){
    $faq = (object)FAQ::where('id',$id)->get();
    return view('admin.faq.show')->with(compact('faq',$faq));
  }

  public function saveNew(Request $req){
    $dados = (object)$req->all();
    $faq = FAQ::saveNew($dados);

    return redirect()->route('faq.show',$faq->id);
  }

  public function saveUpdate(Request $req){
    $dados = (object)$req->all();
    $faq = FAQ::saveUpdate($dados);

    return redirect()->route('faq.show',$faq->id);
  }

  public function destroy($id){
    $faq = FAQ::FindOrFail($id);
    $faq->delete();

    return redirect()->route('faq.showAll');
  }

  public function showAllToCustomer(Request $req){
      $dados = (object)$req->all();
      if(Arr::has($dados,'description')){
        $faqs = FAQ::where('description','like','%'.$dados->description.'%')->orderBy('created_at','DESC')->get();
      }else{
        $faqs = FAQ::orderBy('created_at','DESC')->get();
      }
      return view('user.faq.showAll', compact('faqs',$faqs));
  }

  public function showToCustomer($id){
    $faq = (object)FAQ::where('id',$id)->get();
    return view('user.faq.show')->with(compact('faq',$faq));
  }
}
