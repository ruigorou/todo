<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index ()
    {
        $todos = Todo::all();
        $categories = Category::all();
        return view('index', compact('todos', 'categories'));
    }

    public function store (TodoRequest $request)
    {
        $todo = $request->only(['content', 'category_id']);
        Todo::create($todo);
        return redirect('/')->with('message', 'Todoを作成しました');
    }

    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->all();
        unset($todo['_token']);
        Todo::find($request->id)->update($todo);
        return redirect('/');
    }

}
