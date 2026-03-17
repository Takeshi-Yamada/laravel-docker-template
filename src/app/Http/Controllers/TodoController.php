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
        $content = $request->input('content');
        $todo = new Todo();
        $todo->content = $content;
        $todo->save();
        return redirect()->route('todo.index');
    }
}
