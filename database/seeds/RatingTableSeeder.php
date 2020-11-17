<?php

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
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
            Rating::create([
                'user_id' => $faker->numberBetween($min = 0, $max = 10),
                'product_id' => $faker->numberBetween($min = 0, $max = 10),
                'rate_value' => $faker->numberBetween($min = 0, $max = 5),
                'rate_status' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
