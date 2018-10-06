<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {

    public function create(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task  = Task::find($id);
        $task->duration = $request->input('duration');
        $task->save();

        return response()->json($task);
    }

    public function delete($id)
    {
        $task  = Task::find($id);
        $task->delete();

        return response()->json('Task Removed successfully.');
    }

    public function index()
    {
        $tasks  = Task::all();
        return response()->json($tasks);
    }

    public function getTask($id)
    {
        $task  = Task::find($id);
        return response()->json($task);
    }
}
?>