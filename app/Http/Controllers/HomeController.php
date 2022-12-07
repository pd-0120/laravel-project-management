<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

    public function roles (Request $request) {
        return view('rolePermission.role');
    }

    public function storeRoles (Request $request) {

    }

    public function permissions (Request $request) {
        return view('rolePermission.permission');
    }

    public function storePermissions (Request $request) {

    }
}
