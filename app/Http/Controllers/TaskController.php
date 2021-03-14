<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()
            ->tasks()
            ->orderBy('is_complete')
            ->orderByDesc('created_at')
            ->paginate(5);

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title'=>'required|string|max:255',
        ]);

        Auth::user()->tasks()->create([
            'title' => $data['title'],
            'is_complete' => false,
        ]);

        session()->flash('status', 'Task created !');

        return redirect('/tasks');
    }

    public function update(Tasks $task)
    {
        $this->authorize('complete', $task);

        $task->is_complete = true;
        $task->save();

        session()->flash('status', 'Task completed !');

        return redirect('/tasks');
    }
}
