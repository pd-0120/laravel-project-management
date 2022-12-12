<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		return view('home');
	}

	public function roles(Request $request)
	{

		if ($request->ajax()) {
			$roles = Role::query();
			return DataTables::eloquent($roles)
				->editColumn('action', function ($data) {
					$formData = \Form::model($data, ['route' => ['roleDelete', $data], 'method' => 'DELETE', 'id' => "delete-$data->id"]);

					return "$formData<a type='button' href='javascript:void(0)' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 edit-role' data-id='$data->id' data-name='$data->name'><i class='la la-edit'></i></a><button type='button' class='btn btn-sm btn-clean btn-icon mr-2 mt-2 delete-role' data-id='$data->id'><i class='la fa-trash'></i></button>";
				})
				->make(true);
		}

		return view('rolePermission.role');
	}

	public function storeRole(Request $request)
	{
		if ($request->id) {
			Role::where('id', $request->id)->update(['name' => $request->name]);
		} else {
			Role::updateOrCreate(['name' => $request->name, 'guard_name' => 'web']);
		}

		Session::flash('message.level', 'success');
		Session::flash('message.content', 'Role saved successfully.');

		return redirect()->back();
	}

	public function permissions(Request $request)
	{
		if ($request->ajax()) {
			$permissions = Permission::query();
			return DataTables::eloquent($permissions)
				->make(true);
		}
		return view('rolePermission.permission');
	}

	public function storePermissions(Request $request)
	{
	}

	public function roleDelete($role)
	{
		$role = Role::findOrFail($role);
		$role->delete();

		Session::flash('message.level', 'success');
		Session::flash('message.content', 'Role deleted successfully.');

		return redirect()->route('roles');
	}

	public function profile()
	{
		return view('profile');
	}
}
