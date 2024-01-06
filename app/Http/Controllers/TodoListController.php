<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoListRequest;
use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function todoList(TodoList $tl)
    {
        $data = $tl->orderBy('id', 'DESC')->get();

        return view('todo-list', compact('data'));
    }

    public function storeActivity(TodoListRequest $request, TodoList $tl)
    {
        $tl->store($request);

        return back();
    }

    public function updateActivity(Request $request, TodoList $tl)
    {
        $tl->updateStatus($request);

        return back();
    }
}