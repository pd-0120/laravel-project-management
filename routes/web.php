<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::get('profile', [HomeController::class, 'profile'])->name('profile');

    Route::get('roles', [HomeController::class, 'roles'])->name('roles');
    Route::post('store-role', [HomeController::class, 'storeRole'])->name('storeRole');
    Route::delete('roles-delete/{id}', [HomeController::class, 'roleDelete'])->name('roleDelete');

    Route::get('permissions', [HomeController::class, 'permissions'])->name('permissions');

	Route::resources([
		'users' => UserController::class,
		'tasks' => TaskController::class,
		'notes' => NotesController::class,
		'projects' => ProjectController::class,
		'technologies' => TechnologyController::class,
		'domains' => DomainController::class,
	]);
});
