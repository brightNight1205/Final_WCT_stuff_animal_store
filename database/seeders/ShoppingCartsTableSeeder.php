<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoppingCartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
   DB::table('shopping_carts')->insert([
    [
        'cart_id' => 1,
        'user_id' => 1,            // must exist in users table
        'product_detail_id' => 1,  // must exist in product_details table
        'quantity' => 2,
        'size' => 'M',
    ],
    [
        'cart_id' => 2,
        'user_id' => 2,            // must exist in users table
        'product_detail_id' => 2,  // must exist in product_details table
        'quantity' => 1,
        'size' => 'S',
    ],
    // other records
]);

}

}
