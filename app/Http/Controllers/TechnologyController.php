<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class TechnologyController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *@param Request $request
	 * @return \Illuminate\Http\Response
	 */
    public function index(Request $request)
    {
		if ($request->ajax()) {
			$technologies = Technology::query();
			return DataTables::eloquent($technologies)
				->editColumn('action', function ($data) {
					$formData = \Form::model($data, ['route' => ['technologies.destroy', $data], 'method' => 'DELETE', 'id' => "delete-$data->id"]);

					return "$formData<a type='button' href='".route('technologies.edit', $data)."' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 edit-role'><i class='la la-edit'></i></a><button type='button' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 delete-technology' data-id='$data->id'><i class='la fa-trash'></i></button>";
				})
				->make(true);
		}
		return view('technology.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('technology.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
		return view('technology.edit', compact('technology'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
		$technology->delete();

		Session::flash('message.level', 'success');
		Session::flash('message.content', 'Technology delete successfully.');

		return redirect()->route('technologies.index');
    }
}
