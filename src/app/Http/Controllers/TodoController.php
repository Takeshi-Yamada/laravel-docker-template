<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    Public function index()
    {
        $todo = new Todo();
        $todos = $todo->all();

        return view('todo.index', ['todos' => $todos]);
    }

    Public function create()
    {
        return view('todo.create');
    }

    Public function store(Request $request)
    {
        $inputs = $request->all();

        $todo = new Todo();
        $todo->fill($inputs);
        $todo->save();
        return redirect()->route('todo.index');
    }

    Public function show($id)
    {
        $model = new Todo;
        $todo = $model->find($id);

        return view('todo.show', ['todo' => $todo]);
    }
}
