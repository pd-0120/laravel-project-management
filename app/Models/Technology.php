<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

/**
 * App\Models\Technology
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @method static \Database\Factories\TechnologyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Technology newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Technology newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Technology query()
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Technology whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Technology extends Model
{
    use HasFactory, Userstamps;

	public $fillable = ['name', 'description'];
}
