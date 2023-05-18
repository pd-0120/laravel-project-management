<?php
namespace App\Services;

use App\Models\Note;
use Illuminate\Database\Eloquent\Collection;

class NotesService {
	public function getNotes() : Collection {
		return Note::get();
	}

	public function getById($id): Collection
	{
		return Note::findOrFail($id);
	}

	public function create($data)
	{
		return Note::create($data);
	}

	public function update(Note $note, $data)
	{
		return $note->update($data);
	}

	public function delete(Note $note)
	{
		return $note->delete();
	}
}
