<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CustomizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
DB::table('customizes')->insert([
    ['id' => 1, 'customize_product' => 'Shirt'],
    ['id' => 2, 'customize_product' => 'Hat'],
    ['id' => 3, 'customize_product' => 'Skirt'],
    ['id' => 4, 'customize_product' => 'Box_Gift'],
]);

}

}
