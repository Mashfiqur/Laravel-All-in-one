<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postIds = DB::table('posts')->pluck('id')->toArray();
        $faker = Faker::create();
        foreach(range(1,40) as $value){
            $k = array_rand($postIds);
            DB::table('comments')->insert([
                'comment' => $faker->text,
                'post_id' => $postIds[$k]
            ]);
        }
    }
}
