<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Technology extends Model
{
    use HasFactory, Userstamps;

	public $fillable = ['name', 'description'];
}
