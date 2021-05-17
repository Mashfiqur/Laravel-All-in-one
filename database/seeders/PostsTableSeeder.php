<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = DB::table('users')->pluck('id')->toArray();
        $faker = Faker::create();
        foreach(range(1,30) as $value){
            $k = array_rand($userIds);
            DB::table('posts')->insert([
                'title' => $faker->title,
                'description' => $faker->text(300),
                'author_id' => $userIds[$k]
            ]);
        }
    }
}
