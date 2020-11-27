<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
            Product::create([
                'product_id' => 1 + $i,
                'cate_id' => $faker->randomElement([2, 3, 5, 6, 8, 9]),
                'product_name' => $faker->name(),
                'product_price' => $faker->numberBetween($min = 10, $max = 1000),
                'product_slug' => 'product'.$i.'-slug',
                'product_desc' => 'the X1 Stretch Denim is designed with our new X fit which is skinny throughout with an extended inseam for stacking, and features a vintage black wash and custom distressing at the knees.',
                'product_quantity' => $faker->numberBetween($min = 50, $max = 100),
                'product_viewed' => $faker->numberBetween($min = 0, $max = 1000),
                'product_status' => $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
    }
}
