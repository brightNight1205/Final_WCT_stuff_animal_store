<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Only insert if the table is empty to prevent duplicate primary key errors
        if (DB::table('product_details')->count() == 0) {
            DB::table('product_details')->insert([
                [
                    'product_detail_id' => 1,
                    'name' => 'Cosy Bear',
                    'discount' => 5.00,
                    'cost' => 25.00,
                    'category_animal_id' => 1,
                    'available_status_id' => 2,
                    'image' => 'images/cosy_bear.webp'
                ],
                [
                    'product_detail_id' => 2,
                    'name' => 'Jimmy Bear',
                    'discount' => 3.00,
                    'cost' => 15.00,
                    'category_animal_id' => 1,
                    'available_status_id' => 2,
                    'image' => 'images/jimmy_bear.webp'
                ],
                [
                    'product_detail_id' => 3,
                    'name' => 'Light Teddy Bear',
                    'discount' => 10.00,
                    'cost' => 70.00,
                    'category_animal_id' => 1,
                    'available_status_id' => 2,
                    'image' => 'images/light_teddy_bear.webp'
                ],
                [
                    'product_detail_id' => 4,
                    'name' => 'Cally Pink Kitten',
                    'discount' => 7.00,
                    'cost' => 15.00,
                    'category_animal_id' => 2,
                    'available_status_id' => 3,
                    'image' => 'images/callie_pink_kitty.webp'
                ],
                [
                    'product_detail_id' => 5,
                    'name' => 'Kitty Small',
                    'discount' => 5.00,
                    'cost' => 10.00,
                    'category_animal_id' => 2,
                    'available_status_id' => 5,
                    'image' => 'images/kitty_small.webp'
                ],
                [
                    'product_detail_id' => 6,
                    'name' => 'Lux Cat',
                    'discount' => 7.00,
                    'cost' => 50.00,
                    'category_animal_id' => 2,
                    'available_status_id' => 1,
                    'image' => 'images/lux_cat.webp'
                ],
                [
                    'product_detail_id' => 7,
                    'name' => 'Sheep_Dog',
                    'discount' => 10.00,
                    'cost' => 70.00,
                    'category_animal_id' => 3,
                    'available_status_id' => 2,
                    'image' => 'images/sheep_dog.jpg'
                ],
                [
                    'product_detail_id' => 8,
                    'name' => 'Muffin Puppy',
                    'discount' => 20.00,
                    'cost' => 75.00,
                    'category_animal_id' => 3,
                    'available_status_id' => 3,
                    'image' => 'images/muffin_puppy.webp'
                ],
                [
                    'product_detail_id' => 9,
                    'name' => 'SupperMan Bear',
                    'discount' => 9.00,
                    'cost' => 40.00,
                    'category_animal_id' => 1,
                    'available_status_id' => 2,
                    'image' => 'images/supperman_bear.webp'
                ],
                [
                    'product_detail_id' => 10,
                    'name' => 'Flubby Bunny',
                    'discount' => 7.00,
                    'cost' => 50.00,
                    'category_animal_id' => 4,
                    'available_status_id' => 3,
                    'image' => 'images/flubby_bunny.webp'
                ],
                [
                    'product_detail_id' => 11,
                    'name' => 'Buffy Bunny',
                    'discount' => 8.00,
                    'cost' => 20.00,
                    'category_animal_id' => 4,
                    'available_status_id' => 1,
                    'image' => 'images/buffy_bunny.webpp'
                ],
                [
                    'product_detail_id' => 12,
                    'name' => 'Mat Bunny',
                    'discount' => 7.00,
                    'cost' => 50.00,
                    'category_animal_id' => 4,
                    'available_status_id' => 1,
                    'image' => 'images/mat_bunny.webp'
                ],
                [
                    'product_detail_id' => 13,
                    'name' => 'Chicken',
                    'discount' => 0.00,
                    'cost' => 15.00,
                    'category_animal_id' => 5,
                    'available_status_id' => 2,
                    'image' => 'images/chicken.jpg'
                ],
                [
                    'product_detail_id' => 14,
                    'name' => 'Cockatoo',
                    'discount' => 0.00,
                    'cost' => 16.00,
                    'category_animal_id' => 5,
                    'available_status_id' => 2,
                    'image' => 'images/cockatoo_bird.jpg'
                ],
                [
                    'product_detail_id' => 15,
                    'name' => 'Parrot',
                    'discount' => 0.00,
                    'cost' => 15.00,
                    'category_animal_id' => 5,
                    'available_status_id' => 2,
                    'image' => 'images/parrot.jpg'
                ],
            ]);
        }
    }
}
