<?php

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
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
            Comment::create([
                'user_id' => $faker->numberBetween($min = 0, $max = 10),
                'product_id' => $faker->numberBetween($min = 0, $max = 10),
                'comment_content' => 'The fit is perfect . Length of course I will need to get it hemmed but all in all amazing jeans',
                'comment_status' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
