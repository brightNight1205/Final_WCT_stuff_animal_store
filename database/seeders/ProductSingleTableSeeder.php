<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSingleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing records to avoid duplicate IDs
        DB::table('product_singles')->truncate();

        DB::table('product_singles')->insert([
            [
                'product_detail_id' => 1,
                'description' => 'A cool shirt for bear',
                'size' => 'M',
                'quantity' => 10,
                'color' => 'Blue',
                'customize_id' => 1
            ],
            [
                'product_detail_id' => 2,
                'description' => 'A stylish hat for bear.',
                'size' => 'S',
                'quantity' => 5,
                'color' => 'Red',
                'customize_id' => 2
            ],
        ]);
    }
}
