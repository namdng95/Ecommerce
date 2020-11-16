<?php

use App\Models\Request;
use Illuminate\Database\Seeder;

class RequestsTableSeeder extends Seeder
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
            Request::create([
                'user_id' => $faker->numberBetween($min = 0, $max = 10),
                'request_content' => 'Request cancellation of order #' . $faker->numberBetween($min = 0, $max = 10),
                'request_status' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
