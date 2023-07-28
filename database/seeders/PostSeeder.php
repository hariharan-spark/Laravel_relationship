<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'First Post',
                'content' => 'This is the content of the first post.',
                'user_id' => 1,
            ],
            [
                'title' => 'Second Post',
                'content' => 'This is the content of the second post.',
                'user_id' => 2,
            ],
            // Add more posts as needed
        ]);
    }
}
