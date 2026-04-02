<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    private $todo;
    #TodoControllerが呼びだされるとコンストラクタが自動で走る。
    #引数はTodoクラスの$todoを作成
    public function __construct(Todo $todo)
    {
        #この関数内で使えるTodoクラスのインスタンスをthis->todoに作成
        $this->todo =$todo;
    }

    public function index()
    {
        $todos = $this->todo->all();
        return view('todo.index', ['todos' => $todos]);
    }

    Public function create()
    {
        return view('todo.create');
    }

    Public function store(Request $request)
    {
        $inputs = $request->all();

        $this->todo->fill($inputs);
        $this->todo->save();
        return redirect()->route('todo.index');
    }

    Public function show($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.show', ['todo' => $todo]);
    }
}
