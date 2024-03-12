<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('todos.index', ['tasks' => Task::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:32',
            'description' => 'string|max:255|nullable',
        ]);

        $request->user()->tasks()->create($validated);
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('todos.detail', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('todos.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:32',
            'description' => 'string|max:255|nullable',
            'done' => 'boolean'
        ]);

        $updated_task = [
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description ?? '',
            'done' => isset($request->done)
        ];
        $task->update($updated_task);
        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('tasks');
    }

    public function toggleCompleted(Task $task)
    {

        $task->update([
            'done' => !$task->done
        ]);

        return redirect(route('tasks.index'));
    }
}
