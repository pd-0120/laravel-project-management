<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DomainComponent extends Component
{
	public $domain;

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

	public function mount()
	{
		if ($this->domain) {
			$this->state = $this->domain->toArray();
		}
	}

    public function render()
    {
        return view('livewire.domain-component');
    }

	public function saveData()
	{
		$this->validate();

		if ($this->domain) {
			$domain = $this->domain;
			Session::flash('message.content', 'Domain updated successfully');
		} else {
			$domain = new Domain();
			Session::flash('message.content', 'Domain added successfully');
		}

		$domain->name = $this->state['name'];
		$domain->description = $this->state['description'];
		$domain->save();

		Session::flash('message.level', 'success');

		return redirect()->route('domains.index');
	}
}
