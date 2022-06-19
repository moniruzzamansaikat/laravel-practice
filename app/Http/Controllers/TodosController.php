<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('created_at','desc') -> get();
        return view('todos.index', compact('todos'));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        $this -> validate($request, [
            'text' => 'required|min:3',
            'done' => 'required'
        ]);

        $todo = new Todo();
        $todo -> text = $request -> text;
        $todo -> user_id = auth() -> id();
        
        if($request -> done == 'on'){
            $todo -> done = true;
        } else {
            $todo -> done = false;
        }

        $todo -> save();
        return redirect('/todos')->with('success', 'Todo created successfully');
    }
}
