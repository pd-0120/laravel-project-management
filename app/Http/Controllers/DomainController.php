<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class DomainController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *@param Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		if ($request->ajax()) {
			$domains = Domain::query();
			return DataTables::eloquent($domains)
				->editColumn('action', function ($data) {
					$formData = \Form::model($data, ['route' => ['domains.destroy', $data], 'method' => 'DELETE', 'id' => "delete-$data->id"]);

					return "$formData<a type='button' href='" . route('domains.edit', $data) . "' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 edit-role'><i class='la la-edit'></i></a><button type='button' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 delete-domain' data-id='$data->id'><i class='la fa-trash'></i></button>";
				})
				->make(true);
		}
		return view('domain.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('domain.create');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Domain  $domain
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Domain $domain)
	{
		return view('domain.edit', compact('domain'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Domain  $domain
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Domain $domain)
	{
		$domain->delete();

		Session::flash('message.level', 'success');
		Session::flash('message.content', 'Domain delete successfully.');

		return redirect()->route('domains.index');
	}
}
