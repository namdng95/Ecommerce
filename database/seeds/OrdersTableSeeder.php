<?php

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Order::create([
                'order_id' => 1 + $i,
                'user_id' => $faker->numberBetween($min = 1, $max = 10),
                'order_status' => $faker->numberBetween($min = 0, $max = 1),
                'payment_id' => $faker->numberBetween($min = 1, $max = 10),
                'shipping_id' => $faker->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
