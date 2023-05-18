<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

/**
 * App\Models\Task
 *
 * @property int $id
 * @property string $description
 * @property int $project_id
 * @property int $user_id
 * @property string $date
 * @property float $time
 * @property int $is_billable
 * @property int $is_paid
 * @property int $is_invoice_listed
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @method static \Illuminate\Database\Eloquent\Builder|Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereIsBillable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereIsInvoiceListed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereIsPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Task whereUserId($value)
 * @mixin \Eloquent
 */
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
