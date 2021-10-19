<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for( $i =0; $i < 15; $i++ ){
            $name =  'Service__'. $faker->unique()->name();
            $slug = Str::slug($name, '-');
            DB::table('services')->insert([
                'title' => $name,
                'description' => $faker->paragraph(),
                'seo_description' => $faker->paragraph(),
                'seo_title' => $name . ' - ' . $faker->sentence(),
                'seo_h1' => $name . '__(h1)',
                'type' => $faker->name(),
                'slug' => $slug,
            ]);
        }
    }
}
