<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

/**
 * App\Models\Country
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $alpha2Code
 * @property string|null $alpha3Code
 * @property string|null $callingCode
 * @property string|null $currencyCode
 * @property string|null $numericCode
 * @property string|null $currencyName
 * @property string|null $currencySymbol
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $creator
 * @property-read \App\Models\User|null $destroyer
 * @property-read \App\Models\User|null $editor
 * @property-read mixed $full_name
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereAlpha2Code($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereAlpha3Code($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCallingCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCurrencySymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNumericCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory, Userstamps;

	protected $fillable = ['name', 'countryCode', 'alpha2Code', 'alpha3Code', 'callingCode', 'numericCode', 'currencyName', 'currencyCode', 'currencySymbol'];

	protected $appends = ['full_name'];

	public function getFullNameAttribute()
	{
		return $this->numericCode ? $this->name . ' (+' . $this->numericCode . ')' : $this->name;
	}
}
