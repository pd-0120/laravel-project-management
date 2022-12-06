<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                "name" => "admin",
                "email" => "admin@example.com",
                "password" => Hash::make("admin@123"),
            ]
        ];

        foreach($users as $user) {
            $user = User::create($user);
            $user->assignRole("Super Admin");
        }
    }
}
