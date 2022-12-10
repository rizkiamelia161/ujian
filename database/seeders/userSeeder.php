<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB as data;
use Faker\Factory as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // $PassGen = array();

        $password = rand(1,100000);

        $faker = faker::create('id_ID');

        data::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $password,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
