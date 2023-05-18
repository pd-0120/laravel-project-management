<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Task extends Model
{
    use HasFactory, Userstamps;

	public $fillable = [
		'description',
		'project_id',
		'user_id',
		'date',
		'time',
		'is_billable',
		'is_paid',
		'is_invoice_listed',
	];
}
