<?php

namespace App\Http\Livewire;

use App\Models\Project;
use App\Services\NotesService;
use App\Services\ProjectServices;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class NoteComponent extends Component
{
	public $note;
	public Collection $projects;
	public $state = [
		'project_id' => null,
		'title' => null,
		'description' => null,
	];

	public $rules = [
		'state.description' => 'required',
		'state.title' => 'required',
	];

	public $validationAttributes = [
		'state.description' => 'Note Description',
		'state.title' => 'Note Title',
	];

	public function mount()
	{
		$this->projects = (new ProjectServices)->getProjects();

		if ($this->note) {
			$this->state = $this->note->toArray();
		}
	}

    public function render()
    {
        return view('livewire.note-component');
    }

	public function saveData()
	{
		$this->validate();

		if ($this->note) {
			// Update existing data
			(new NotesService)->update($this->note, $this->state);
			Session::flash('message.content', 'Domain updated successfully');
		} else {
			// Create new record
			(new NotesService)->create($this->state);
			Session::flash('message.content', 'Domain added successfully');
		}

		Session::flash('message.level', 'success');

		return redirect()->route('notes.index');
	}
}
