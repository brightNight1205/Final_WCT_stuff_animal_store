<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('orders')->insert([
    ['order_id' => 1, 'user_id' => 1, 'payment_method' => 'Credit Card', 'billing_detail_id' => null],
    ['order_id' => 2, 'user_id' => 3, 'payment_method' => 'PayPal', 'billing_detail_id' => null],
    ['order_id' => 3, 'user_id' => 4, 'payment_method' => 'Directly', 'billing_detail_id' => null],
]);


}

}
