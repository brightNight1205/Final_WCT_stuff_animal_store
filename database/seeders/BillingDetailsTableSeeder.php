<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BillingDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
   DB::table('billing_details')->insert([
    ['billing_detail_id' => 1, 'first_name' => 'Alice', 'last_name' => 'Chan', 'country' => 'Cambodia', 'city' => 'Phnom Penh', 'phone' => '012345678', 'email' => 'alice.chan@example.com'],
    ['billing_detail_id' => 2, 'first_name' => 'Chenda', 'last_name' => 'Meas', 'country' => 'Cambodia', 'city' => 'Siem Reap', 'phone' => '098765432', 'email' => 'chenda.meas@example.com'],
]);

}

}
