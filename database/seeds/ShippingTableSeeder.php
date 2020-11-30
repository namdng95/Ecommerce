<?php

use App\Models\Shipping;
use Illuminate\Database\Seeder;

class ShippingTableSeeder extends Seeder
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
            Shipping::create([
                'shipping_id' => 1 + $i,
                'shipping_name' => $faker->email(),
                'shipping_address' => '16 Ly Thuong Kiet, Quan Hai Chau, Tp. Da Nang',
                'shipping_phone' => $faker->e164phoneNumber(),
                'shipping_desc' => 'Please package carefully. Thank you so much!',
                'shipping_status' => $faker->randomElement(['Online Payment', 'Cash', 'Shipping']),
            ]);
        }
    }
}
