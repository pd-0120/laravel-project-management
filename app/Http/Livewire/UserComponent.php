<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class UserComponent extends Component
{
	public $photoDocument;
	public $identityDocument;
	public $countries;
	public $user;

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
		'is_active' => 1,
	];

	public $rules = [
		'state.name' => 'required',
		'state.email' => 'required',
		'state.password' => 'required',
		'state.country' => 'required',
		'state.mobile' => 'required',
		'state.address' => 'required',
		'state.photo' => 'required',
		'state.identity' => 'required',
		'state.dob' => 'required',
	];

    public function render()
    {
        return view('livewire.user-component');
    }

	public function mount() {
		$this->countries = Country::all();

		if($this->user) {
			$this->state = $this->user->toArray();
		}
	}

	public function saveData(){
		$this->validate();
	}
}
