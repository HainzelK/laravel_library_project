<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Faker\Factory as Faker;

class NewspaperSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
    
        for ($i = 1; $i <= 10; $i++) {
            DB::table('newspapers')->insert([
                'Title' => $faker->sentence(),
                'Author'=> $faker->name(),
                'Year_Published'=> $faker -> year(),
                'Pages'=> $faker->randomnumber(),
                'Price'=> $faker->randomnumber()

            ]);
        }
    }
}