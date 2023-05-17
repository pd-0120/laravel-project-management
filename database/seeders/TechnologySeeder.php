<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Technology::truncate();

		$technologies = [
			['name' => 'Laravel', 'description' => ''],
			['name' => 'NodeJS', 'description' => ''],
			['name' => 'Asp .Net', 'description' => ''],
			['name' => 'ReactJS', 'description' => ''],
			['name' => 'VueJS', 'description' => ''],
			['name' => 'Livewire', 'description' => ''],
			['name' => 'Ruby On Rails', 'description' => ''],
			['name' => 'AngularJS', 'description' => ''],
		];
        Technology::insert($technologies);
    }
}
