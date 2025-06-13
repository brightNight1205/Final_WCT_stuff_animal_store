<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryAnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('category_animals')->insert([
        ['category_animal_id' => 1, 'name' => 'Bears'],
        ['category_animal_id' => 2, 'name' => 'Cat & Kittens'],
        ['category_animal_id' => 3, 'name' => 'Dogs'],
        ['category_animal_id' => 4, 'name' => 'Bunnies'],
        ['category_animal_id' => 5, 'name' => 'Bird'],

    ]);
}

}
