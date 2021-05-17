<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => "Md.Mashfiqur Rahman",
            'email' => "mashfiqurrr@gmail.com",
            'password'=> Hash::make("I am mashfiq")
        ],[
            'name' => "Md.Arham Rahman",
            'email' => "arham@gmail.com",
            'password'=> Hash::make("I am arham")
        ],[
            'name' => "Ariba Akhter",
            'email' => "ariba@gmail.com",
            'password'=> Hash::make("I am ariba")
        ],[
            'name' => "Samiha Shara",
            'email' => "sara@gmail.com",
            'password'=> Hash::make("I am sara")
        ],[
            'name' => "Sara Raidh",
            'email' => "saraRaidh@gmail.com",
            'password'=> Hash::make("I am raidh")
        ],[
            'name' => "Jahin SUfia",
            'email' => "jahin@gmail.com",
            'password'=> Hash::make("I am jahin")
        ]]);
    }
}
