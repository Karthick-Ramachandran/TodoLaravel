<?php

namespace App\Http\Controllers;
use Session;
use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

          $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request){

      $todo = new Todo;


      $todo->todo = $request->todo;
      $todo->save();
Session::flash('success', 'New Todo added');

      return redirect()->back();
        
     


    }

    public function remove($id){
      $todo = Todo::find($id);

      $todo->delete();
      
      Session::flash('success', 'Todo Deleted');

      return redirect()->back();
    }

public function update($id){
    $todo = Todo::find($id);

  return view('update')->with('todo', $todo);


//     $todo->update();
// return redirect()->back();
}
public function save(Request $request, $id){

    $todo = Todo::find($id);

$todo->todo = $request->todo;
$todo->save();
Session::flash('success', 'Todo Updated');
return redirect('/todos');

}
public function completed($id){
  $todo = Todo::find($id);

  $todo->completed = 1;
$todo->save();
Session::flash('success', 'Congrats your Todo is Completed');
return redirect('/todos');
}

}
