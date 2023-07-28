<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data for the users table
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'haran@mailinator.com',
                'password' => '12345678',
                'country_id' => 1, // Replace 1 with the ID of the country for John Doe
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'hari@mailinator.com',
                'password' => '12345678',
                'country_id' => 2, // Replace 2 with the ID of the country for Jane Smith
            ],
            // Add more users as needed
        ]);
    }
}
