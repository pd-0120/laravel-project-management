<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Illuminate\Support\Facades\File;

class CoutryListSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Country::truncate();

		$country = Country::where('name','United Nations')->first();

		if(empty($country))
		{
			Country::create(['name' =>'United Nations']);
		}

		if(File::exists(public_path('countries.json')))
		{
			$countries = json_decode(file_get_contents(public_path('countries.json')));
			$countryData = [];
			foreach($countries as $country)
			{
				$countryData[] = [
					'name' => $country->name,
					'alpha2Code' => $country->alpha2Code,
					'alpha3Code' => $country->alpha3Code,
					'callingCode' => $country->callingCode,
					'currencyCode' => $country->currencyCode,
					'numericCode' => $country->numericCode,
					'currencyName' => $country->currencyName,
					'currencySymbol' => $country->currencySymbol
				];
			}
			Country::insert($countryData);
		}
	}
}
