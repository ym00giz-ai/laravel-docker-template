<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function index()
    {
        $todos = $this->todo->all();
        // dd($todos);

        return view('todo.index', ['todos' => $todos]);
    }

    public function create()
    {
        
        return view('todo.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();

        $this->todo->fill($inputs);
        $this->todo->save();

        return redirect()->route('todo.index');
    }

    public function show($id)
    {
        // $model = new Todo();
        // $todo = $model->find($id);

        $todo = $this->todo->find($id);

        return view('todo.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
        $todo = $this->todo->find($id);
        // dd($id);
        return view('todo.edit', ['todo' => $todo]);
        
    }
}




