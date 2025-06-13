<?php



namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersBillingDetailUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('orders')->where('order_id', 1)->update(['billing_detail_id' => 1]);
        DB::table('orders')->where('order_id', 2)->update(['billing_detail_id' => 2]);
        DB::table('orders')->where('order_id', 3)->update(['billing_detail_id' => 1]);
    }
}
