<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;


class ToDoController extends Controller
{
    public function index() {
        //use all method on Task MODEL to retrieve all tasks,
        //so they are available on the view
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }
    //Request $request get info from form inputs
    public function store(Request $request) {

        if($request->input('task')) {
            $task = new Task;
            $task->content = $request->input('task');
            Auth::user()->tasks()->save($task);
        }

        return redirect()->back();
    }

    public function edit($id) {

        $task = Task::find($id);
        return view('edit', compact('task'));
    }

    public function update($id, Request $request) {

        if($request->input('task')){
            $task = Task::find($id);
            $task->content = $request->input('task');
            $task->save();

        }
        return redirect('/');
    }

    public function delete($id) {

        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }
}
