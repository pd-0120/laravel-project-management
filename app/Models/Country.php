<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

	protected $fillable = ['name', 'countryCode', 'alpha2Code', 'alpha3Code', 'callingCode', 'numericCode', 'currencyName', 'currencyCode', 'currencySymbol'];

	protected $appends = ['full_name'];

	public function getFullNameAttribute()
	{
		return $this->numericCode ? $this->name . ' (+' . $this->numericCode . ')' : $this->name;
	}
}
