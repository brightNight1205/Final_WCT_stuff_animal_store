<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvailableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('availables')->insert([
    ['available_id' => 1, 'status_name' => 'Best Seller'],
    ['available_id' => 2, 'status_name' => 'In Stock'],
    ['available_id' => 3, 'status_name' => 'OutStock'],
    ['available_id' => 4, 'status_name' => 'None'],
    ['available_id' => 5, 'status_name' => 'New Arrived'],
]);

}

}
