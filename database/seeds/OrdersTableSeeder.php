<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($count = 0; $count<5; $count++){
            $order = new Order();
            $order->name = 'name_'.$count;
            $order->save();
        }
    }
}
