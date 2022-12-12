<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
	use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$domains = [
			['name' => 'Job Portal', 'description' => ''],
			['name' => 'Crypto Tax Calculator', 'description' => ''],
			['name' => 'Real Estate CRM', 'description' => ''],
			['name' => 'Lead Tracking  CRM', 'description' => ''],
			['name' => 'E-Commorce', 'description' => ''],
			['name' => 'Webinar Application', 'description' => ''],
		];
		Domain::insert($domains);
    }
}
