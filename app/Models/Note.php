<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Note extends Model
{
    use HasFactory, Userstamps;

	public $fillable = [
		'project_id',
		'title',
		'description',
	];
}
