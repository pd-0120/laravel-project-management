<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserComponent extends Component
{
	public $photoDocument;
	public $identityDocument;
	public $countries;
	public $user;
	public $roles;

	public $state = [
		'name' => null,
		'email' => null,
		'password' => null,
		'country' => null,
		'mobile' => null,
		'address' => null,
		'photo' => null,
		'identity' => null,
		'dob' => null,
		'notes' => null,
		'is_active' => 1,
		'role' => ""
	];

	public $rules = [
		'state.name' => 'required',
		'state.email' => 'required|email|unique:users,email',
		'state.country' => 'required',
		'state.mobile' => 'required|numeric',
		'state.address' => 'required',
		'state.dob' => 'required|date',
		'state.notes' => 'nullable|min:0|max:150',
		'state.role' => "required"
	];

	public $validationAttributes = [
		'state.name' => 'name',
		'state.email' => 'email',
		'state.password' => 'password',
		'state.country' => 'country',
		'state.mobile' => 'mobile',
		'state.address' => 'address',
		'state.photo' => 'photo',
		'state.identity' => 'identity',
		'state.dob' => 'date of birth',
		'state.notes' => 'notes',
		'state.role' => 'role'
	];

    public function render()
    {
        return view('livewire.user-component');
    }

	public function mount() {
		$this->countries = Country::all();
		$this->roles = Role::all();

		if($this->user) {
			$this->state = $this->user->toArray();
			$this->state['role'] =  $this->user->getRoleNames()[0];
			$userID = $this->user->id;
			$rules = $this->rules;
			$rules['state.email'] = "required|email|unique:users,email,$userID";
			$this->rules = $rules;
		}
	}

	public function saveData(){
		$this->validate();

		if(!$this->user) {
			$password = Str::random(8);
			$user = new User();
			$user->password = Hash::make($password);

			Session::flash('message.content', 'User added successfully');

		} else {
			$user = $this->user;
			Session::flash('message.level', 'User updated successfully');
		}
		$user->name = $this->state['name'];
		$user->email = $this->state['email'];
		$user->country = $this->state['country'];
		$user->mobile = $this->state['mobile'];
		$user->address = $this->state['address'];
		$user->dob = $this->state['dob'];
		$user->notes = $this->state['notes'];
		$user->save();

		$user->assignRole($this->state['role']);

		Session::flash('message.level', 'success');

		return redirect()->route('users.index');
	}
}
