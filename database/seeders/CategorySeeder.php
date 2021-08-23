<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class CategorySeeder extends Seeder
{
    private $category_names = ['Сауна', 'Дом', 'Баня', 'Сауна', 'Сарай', 'Гараж'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i =0; $i < 6; $i++ ){
            $name =  Str::random(1) . '_'. Arr::random($this->category_names);
            $slug = Str::slug($name, '-');
            DB::table('categories')->insert([
                'title' => $name,
                'description' => Str::random(55),
                'seo_title' => Str::random(15) . ' - ' . $name,
                'seo_h1' => $name . '__(h1)',
                'slug' => $slug,
            ]);
        }
    }
}
