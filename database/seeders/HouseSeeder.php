<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for( $i =0; $i < 13; $i++ ){
            $name =  'House__'. $faker->unique()->name();
            $slug = Str::slug($name, '-');
            DB::table('houses')->insert([
                'title' => $name,
                'category_id' => rand(1, 6),
                'description' => $faker->paragraph(),
                'seo_description' => $faker->paragraph(),
                'seo_title' => $name . ' - ' . $faker->sentence(),
                'seo_h1' => $name . '__(h1)',
                'slug' => $slug,
                'price' => $faker->randomNumber(6, true),
                'area' => $faker->randomNumber(3, true),
            ]);
        }
    }
}
