<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class todosController extends Controller
{
    //

public function index(){
        $todos = Todo::all();
        return view('todos.index',compact('todos'));
    }


public function show(Todo $todo){
        return view('todos.show')->with('todo',$todo);
    }


public function create(){
    return view('todos.create');
}
public function store(Request $request){

        $request->validate([

            'todoTitle'       =>'required|min:6',
            'todoDescription' =>'required'
        ]);

        $todo = new Todo();
        $todo->title       = $request->todoTitle;
        $todo->description = $request->todoDescription;
        $todo->completed   = false;
        $todo->save();

        $request->session()->flash('success','Todo created successfuly');
        return redirect('/todos');

    }

    public function edit( Todo $todo){
        return view('todos.edit')->with('todo',$todo);

    }

    public function update(Request $request, Todo $todo){

        $request->validate([

            'todoTitle'       =>'required|min:6',
            'todoDescription' =>'required'
        ]);
        $todo->title            = $request->get('todoTitle');
        $todo->description  = $request->get('todoDescription');
        $todo->save();
   
        return redirect('/todos');
   
    }
    public function destroy(Todo $todo){

        $todo->delete();
        session()->flash('success','Todo delete successfuly');
        return redirect('/todos');

    }   

    public function complete(Todo $todo){

        $todo->completed = true;
        $todo->save();
        session()->flash('success','Todo completed successfuly');
        return redirect('/todos');


    }

}