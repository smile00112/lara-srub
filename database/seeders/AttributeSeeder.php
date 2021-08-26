<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $attribute_names = ['Материал', 'Размер', 'Этажность', 'Комнат', 'Санузлов', 'Срок строительства', 'Гарантия', 'Габариты, w', 'Габариты, h'];

    public function run()
    {
        foreach( $this->attribute_names as $attr ){
            DB::table('attributes')->insert([
                'name' => $attr
            ]);
        }
    }
}
