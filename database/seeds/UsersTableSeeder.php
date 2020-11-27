<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            User::create([
                'user_id' => 1 + $i,
                'username' => $faker->userName(),
                'email' => $faker->randomElement(['admin', 'user']) . $i . '@gmail.com',
                'password' => Hash::make('12345678'),
                'fullname' => $faker->name(),
                'birthday' => $faker->dateTime($max = 'now', $timezone = null),
                'phone' => $faker->e164PhoneNumber(),
                'gender' => $faker->randomElement(['male', 'female', 'other']),
                'status' => $faker->numberBetween($min = 0, $max = 1),
                'role' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
