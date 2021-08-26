<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();
        DB::table('settings')->insert(
            [
                [
                    'name' => 'phone_1',
                    'title' => 'Телефон 1',
                    'value' =>'+7 (4832) 34-42-21',
                    'type' => 'main',
                ],
                [
                    'name' => 'phone_2',
                    'title' => 'Телефон 2',
                    'value' =>'+7 920-600-30-40',
                    'type' => 'main',
                ],
                [
                    'name' => 'site_name',
                    'title' => 'Заголовок сайта',
                    'value' =>'Русская изба',
                    'type' => 'main',
                ],
                [
                    'name' => 'site_description',
                    'title' => 'Описание сайта',
                    'value' =>'ПРОЕКТИРОВАНИЕ И СТРОИТЕЛЬСТВО  ДЕРЕВЯННЫХ ДОМОВ «ПОД КЛЮЧ»',
                    'type' => 'main',
                ],
                [
                    'name' => 'address',
                    'title' => 'Адрес',
                    'value' =>'Россия, Брянская область, Брянск, улица Лермонтова д. 9',
                    'type' => 'main',
                ],
                [
                    'name' => 'vk_link',
                    'title' => 'Ссылка VK',
                    'value' =>'#',
                    'type' => 'main',
                ],
                [
                    'name' => 'insta_link',
                    'title' => 'Ссылка Instagram',
                    'value' =>'#',
                    'type' => 'main',
                ],
            ]
        );
    }
}
