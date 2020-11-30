<?php

use App\Models\Order_Detail;
use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
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
            Order_Detail::create([
                'order_details_id' => 1 + $i,
                'order_id' => $faker->numberBetween($min = 1, $max = 10),
                'product_id' => $faker->numberBetween($min = 1, $max = 10),
                'order_status' => $faker->numberBetween($min = 0, $max = 1),
                'product_name' => $faker->name(),
                'product_price' => $faker->numberBetween($min = 10, $max = 10000),
                'product_quantity' => $faker->numberBetween($min = 1, $max = 50),
                'total' => $faker->numberBetween($min = 10, $max = 100000),
            ]);
        }
    }
}
