<?php

namespace App\Http\Livewire;

use App\Models\Technology;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class TechnologyComponent extends Component
{
	public $technology;

	public $state = [
		'name' => null,
		'description' => null,
	];

	public $rules = [
		'state.name' => 'required',
	];

	public $validationAttributes = [
		'state.name' => 'name',
	];

	public function mount() {
		if ($this->technology) {
			$this->state = $this->technology->toArray();
		}
	}

    public function render()
    {
        return view('livewire.technology-component');
    }

	public function saveData() {
		$this->validate();

		if($this->technology) {
			$technology = $this->technology;
			Session::flash('message.content', 'Technology updated successfully');

		} else {
			$technology = new Technology();
			Session::flash('message.content', 'Technology added successfully');
		}

		$technology->name = $this->state['name'];
		$technology->description = $this->state['description'];
		$technology->save();

		Session::flash('message.level', 'success');

		return redirect()->route('technologies.index');
	}
}
