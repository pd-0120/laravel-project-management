<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		if ($request->ajax()) {
			$projects = Project::query();
			return DataTables::eloquent($projects)
				->editColumn('action', function ($data) {
					$formData = \Form::model($data, ['route' => ['projects.destroy', $data], 'method' => 'DELETE', 'id' => "delete-$data->id"]);

					return "$formData<a type='button' href='" . route('projects.edit', $data) . "' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 edit-role'><i class='la la-edit'></i></a><button type='button' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 delete-project' data-id='$data->id'><i class='la fa-trash'></i></button>";
				})
				->make(true);
		}

		return view('project.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('project.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project)
	{
		return view('project.edit', compact('project'));
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Project  $project
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project)
	{
		$project->delete();
		Session::flash('message.level', 'success');
		Session::flash('message.content', 'Technology delete successfully.');

		return redirect()->route('projects.index');
	}
}
