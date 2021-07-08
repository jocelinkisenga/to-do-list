<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Todolist;
class TodoController extends Controller
{
    //


    public function index() {

        $todo=Todolist::all();

        return view('app',['tache'=>$todo]);
    }

   public function delete ($id) {

    Todolist::destroy(array('id',$id));

    return redirect('/');
   }
   public function ajout () {
    return view('ajout');
   }
   public function creer (Request $request) {

    $creer= new Todolist();
    $creer->name=$request->input('tache');
    $creer->save();
    return redirect('/');
   }

   public function editer ($id) {

    return view('edit')->with('editer',Todolist::findorfail($id));
   }

   public function edition (Request $request,$id) {
    $todo=Todolist::findorfail($id);
    $todo->name=$request->input('tache');
    $todo->save();
    return redirect('/');
   }

}
