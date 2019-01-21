<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Invitation;


class ToDoController extends Controller
{
    public function index() {
        //use where method on Task MODEL to retrieve all tasks from current user,
        //so they are available on the view
        $tasks = Task::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(4);
        $coworkers = User::where('is_admin', 1)->get();
        return view('index', compact('tasks', 'coworkers'));
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

    public function updateStatus($id) {

        $task = Task::find($id);
        $task->status = !$task->status;
        $task->save();
        return redirect()->back();
    }

    public function sendInvitation(Request $request) {

        if((int) $request->input('admin') > 0 && !Invitation::where('worker_id', Auth::user()->id)->where('admin_id', $request->input('admin'))->exists()) {
            $invitation = new Invitation;
            $invitation->worker_id = Auth::user()->id;
            $invitation->admin_id = (int)$request->input('admin');
            $invitation->save();
        }

        return redirect()->back();
    }
}
