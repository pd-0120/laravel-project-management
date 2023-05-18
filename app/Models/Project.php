<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $url
 * @property int|null $user_id As in client ID
 * @property float $charge
 * @property int|null $currency
 * @property string|null $charge_cycle
 * @property int|null $technology_id
 * @property int|null $domain_id
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @method static \Illuminate\Database\Eloquent\Builder|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereChargeCycle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereDomainId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereTechnologyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Project whereUserId($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    use HasFactory, Userstamps;
}
