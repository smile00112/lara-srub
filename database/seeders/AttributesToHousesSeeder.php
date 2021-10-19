<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\house;
use App\Models\attribute;
use Faker\Factory as Faker;

class AttributesToHousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = attribute::all();
        $h = house::all();
        $faker = Faker::create();

        foreach($h as $house){
            foreach($a as $attr){
                DB::table('attribute_house')->insert([
                    'attribute_id' => $attr->id,
                    'house_id' => $house->id,
                    'value' => $faker->name().' '.rand(1, 6),
                ]);
                //$fakeHouseAttr = new ();
                //$h->attributes()->attach();
            }
        }
    }
}
