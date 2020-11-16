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
                'user_id' => $faker->numberBetween($min = 0, $max = 10),
                'order_status' => $faker->numberBetween($min = 0, $max = 1),    
            ]);
        }
    }
}
