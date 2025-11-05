<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
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

    public function store(TodoRequest $request)
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
        // dd($this->todo->find($id));
        return view('todo.show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
        $todo = $this->todo->find($id);

        return view('todo.edit', ['todo' => $todo]);
        
    }

    public function update(TodoRequest $request, $id) // 第1引数: リクエスト情報の取得　第2引数: ルートパラメータの取得
    {
    // TODO: リクエストされた値を取得
        
        $todo = $this->todo->find($id);
        $inputs = $request->all();
        // var_dump ($todo->find($id));
        // exit;
        $todo->fill($inputs);
        // var_dump ($todo->toArray());
        // exit;
        $todo->save();

        return redirect()->route('todo.show', $todo->id);

    }

    public function delete($id)
    {
        $todo = $this->todo->find($id);
        $todo->delete();

        // dd('削除のルート実行！');
        return redirect()->route('todo.index');

    }

}




