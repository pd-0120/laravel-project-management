<?php
namespace App\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectServices {
	public function getProjects() : Collection {
		return Project::get();
	}
}
