<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 15; $i++) {
            $id = \DB::table('posts')->insertGetId([
                'title' => Str::random(20),
                'intro' => $faker->paragraph,
                'content' => $faker->text,
                'image' => 'post'.$i.'.jpg'
            ]);
        }
    }
}
