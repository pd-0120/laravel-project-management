<?php

namespace App\Http\Livewire;

use App\CustomClass\ChargeCycle;
use App\Models\Country;
use App\Models\Domain;
use App\Models\Project;
use App\Models\Technology;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ProjectComponent extends Component
{
	public $project;

	public Collection $users;
	public Collection $technologies;
	public Collection $domains;
	public Collection $currencies;

	public array $chargeCycles;

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
		$chargeCycle = new ChargeCycle();
		$this->chargeCycles = $chargeCycle->getConstants();

		$this->technologies = Technology::all();
		$this->domains = Domain::all();
		$this->users = User::role('Client')->get();
		$this->currencies = Country::select('id', 'currencyName')->get();

		if ($this->project) {
			$this->state = $this->project->toArray();
		}
	}

    public function render()
    {
        return view('livewire.project-component');
    }

	public function saveData()
	{
		$this->validate();

		if ($this->project) {
			$project = $this->project;
			Session::flash('message.content', 'Project updated successfully');
		} else {
			$project = new Project();
			Session::flash('message.content', 'Project added successfully');
		}

		$project->name = $this->state['name'];
		$project->description = $this->state['description'];
		$project->url = $this->state['url'];
		$project->user_id = $this->state['user_id'];
		$project->charge = $this->state['charge'];
		$project->currency = $this->state['currency'];
		$project->charge_cycle = $this->state['charge_cycle'];
		$project->technology_id = $this->state['technology_id'];
		$project->domain_id = $this->state['domain_id'];
		$project->save();

		Session::flash('message.level', 'success');

		return redirect()->route('projects.index');
	}
}
