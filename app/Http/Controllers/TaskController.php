<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		if ($request->ajax()) {
			$tasks = Task::query();
			return DataTables::eloquent($tasks)
				->editColumn('action', function ($data) {
					$formData = \Form::model($data, ['route' => ['tasks.destroy', $data], 'method' => 'DELETE', 'id' => "delete-$data->id"]);

					return "$formData<a type='button' href='" . route('tasks.edit', $data) . "' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 edit-role'><i class='la la-edit'></i></a><button type='button' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 delete-task' data-id='$data->id'><i class='la fa-trash'></i></button>";
				})
				->make(true);
		}

		return view('task.index');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
		return view('task.edit', compact('task'));
    }

    public function destroy(Task $task)
    {
		$task->delete();

		Session::flash('message.level', 'success');
		Session::flash('message.content', 'Task delete successfully.');

		return redirect()->route('tasks.index');
    }
}
