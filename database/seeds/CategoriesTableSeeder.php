<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'cate_name' => 'SPORTS WEAR',
                'cate_slug' => 'sports-wear',
                'parent_id' => null,
                'cate_status' => 1,
            ], [
                'cate_name' => 'Nike',
                'cate_slug' => 'nike-clothing',
                'parent_id' => 1,
                'cate_status' => 1,
            ], [
                'cate_name' => 'Adidas',
                'cate_slug' => 'adidas-clothing',
                'parent_id' => 1,
                'cate_status' => 1,
            ], [
                'cate_name' => 'STREET WEAR',
                'cate_slug' => 'street-wear',
                'parent_id' => null,
                'cate_status' => 1,
            ], [
                'cate_name' => 'MNML',
                'cate_slug' => 'mnml-clothing',
                'parent_id' => 4,
                'cate_status' => 1,
            ], [
                'cate_name' => 'Stussy',
                'cate_slug' => 'stussy-clothing',
                'parent_id' => 4,
                'cate_status' => 1,
            ], [
                'cate_name' => 'LUXURY CLOTHING',
                'cate_slug' => 'luxury-clothing',
                'parent_id' => null,
                'cate_status' => 1,
            ], [
                'cate_name' => 'Gucci',
                'cate_slug' => 'gucci-gang',
                'parent_id' => 7,
                'cate_status' => 1,
            ], [
                'cate_name' => 'Dior',
                'cate_slug' => 'dior-clothing', 
                'parent_id' => 7,
                'cate_status' => 1,
            ],
        ];
        foreach($categories as $cate) {
            Category::create($cate);
        }
    }
}
