<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            \DB::table('comments')->insertGetId([
                'comment' => $faker->paragraph,
                'post_id' => rand(1, 20),
                'user_id' => rand(1, 7)
            ]);

        }
    }
}
