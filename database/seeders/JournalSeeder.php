<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Faker\Factory as Faker;

class JournalSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
    
        for ($i = 1; $i <= 10; $i++) {
            DB::table('journals')->insert([
                'Title' => $faker->sentence(),
                'Author'=> $faker->name(),
                'Publisher'=>$faker->name(),
                'Year_Published'=> $faker -> year(),
                'Pages'=> $faker->randomnumber(),
                'Abstract'=>$faker->sentence(),
                'Price'=> $faker->randomnumber()

            ]);
        }
    }
}
