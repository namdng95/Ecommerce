<?php

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
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
            Payment::create([
                'payment_id' => 1 + $i,
                'payment_code' => $faker->name(substr(md5(microtime()), rand(0, 25), 10)),
                'payment_method' => $faker->randomElement(['Online Payment', 'Cash', 'Shipping']),
                'payer_email' => $faker->email(),
                'amount' => $faker->numberBetween($min = 10, $max = 100),
                'amount' => $faker->randomElement(['USD', 'VND']),
                'payment_status' => $faker->randomElement(['succeeded', 'failed']),
            ]);
        }
    }
}
