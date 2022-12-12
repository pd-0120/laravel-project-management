<?php

namespace App\Http\Livewire;

use App\Models\Domain;
use App\Models\Technology;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ProjectComponent extends Component
{
	public $project;

	public Collection $users;
	public Collection $technologies;
	public Collection $domains;

	public $state = [
		'name' => null,
		'description' => null,
		'url' => null,
		'user_id' => null,
		'charge' => null,
		'currency' => null,
		'charge_cycle' => null,
		'technology_id' => null,
		'domain_id' => null,
	];

	public $rules = [
		'state.name' => 'required',
		'state.description' => 'required',
		'state.url' => 'required|url',
		'state.user_id' => 'required',
		'state.charge' => 'required',
		'state.currency' => 'required',
		'state.charge_cycle' => 'required',
		'state.technology_id' => 'required',
		'state.domain_id' => 'required',
	];

	public $validationAttributes = [
		'state.name' => "name",
		'state.description' => "description",
		'state.url' => "url",
		'state.user_id' => "client",
		'state.charge' => "charge",
		'state.currency' => "currency",
		'state.charge_cycle' => "charge cycle",
		'state.technology_id' => "technology",
		'state.domain_id' => "domain",
	];

	public function mount()
	{
		$this->technologies = Technology::all();
		$this->domains = Domain::all();
		$this->users = User::all();

		if ($this->project) {
			$this->state = $this->project->toArray();
		}
	}

    public function render()
    {
        return view('livewire.project-component');
    }
}
