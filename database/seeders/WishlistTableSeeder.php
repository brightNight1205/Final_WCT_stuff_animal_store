<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('wishlists')->insert([
        ['wishlist_id' => 1, 'user_id' => 1, 'product_detail_id' => 2],
        ['wishlist_id' => 2, 'user_id' => 2, 'product_detail_id' => 1],
        ['wishlist_id' => 3, 'user_id' => 3, 'product_detail_id' => 1],
        ['wishlist_id' => 4, 'user_id' => 5, 'product_detail_id' => 7],
        ['wishlist_id' => 5, 'user_id' => 10, 'product_detail_id' => 3],
    ]);
}

}
