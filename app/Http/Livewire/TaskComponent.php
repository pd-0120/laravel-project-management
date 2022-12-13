<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class TaskComponent extends Component
{
	public Collection $projects;
	public $task;
	public array $timeIntervals;

	public $state = [
		'description' => null,
		'project_id' => null,
		'user_id' => 0,
		'date' => null,
		'time' => 00.00,
		'is_billable' => 1,
		'is_paid' => 0,
		'is_invoice_listed' => 0,
	];

	public $rules = [
		'state.description' => 'required',
		'state.project_id' => 'required',
		'state.user_id' => 'required',
		'state.date' => 'required|date',
		'state.time' => 'required',
	];

	public $validationAttributes =
	[
		'state.description' => 'description',
		'state.project_id' => 'project',
		'state.user_id' => 'user',
		'state.date' => 'date',
		'state.time' => 'time spent',
	];
	public function mount() {

		if($this->task) {
			$this->state = $this->task->toArray();
		}
		$currentDate = Carbon::now()->format('Y-m-d');
		$nextDayDate = Carbon::now()->addDay()->format('Y-m-d');

		$this->projects = Project::get();
		$this->state['user_id' ] = Auth::user()->id;
		$this->state['date'] = $currentDate;

		$periods = new CarbonPeriod($currentDate, '10 minutes', $nextDayDate);
		foreach($periods as $period) {
			$timeIntervals[] = ($period->format('H.i'));
		}
		$this->timeIntervals = $timeIntervals;
	}

    public function render()
    {
        return view('livewire.task-component');
    }

	public function saveData() {
		$this->validate();

		if($this->task) {
			Session::flash('message.content', 'Task updated successfully');
			$task = $this->task;
		} else {
			$task = new Task();
			Session::flash('message.content', 'Task added successfully');
		}

		$task->description = $this->state['description'];
		$task->project_id = $this->state['project_id'];
		$task->user_id = $this->state['user_id'];
		$task->date = $this->state['date'];
		$task->time = $this->state['time'];
		$task->is_billable = $this->state['is_billable'];
		$task->is_paid = $this->state['is_paid'];
		$task->is_invoice_listed = $this->state['is_invoice_listed'];
		$task->save();

		Session::flash('message.level', 'success');

		return redirect()->route('tasks.index');
	}
}
