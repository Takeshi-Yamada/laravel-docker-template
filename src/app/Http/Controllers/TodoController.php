<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    Public function index()
    {
        return view('todo.index');
    }
}
