<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class ProductAndCategories extends Seeder
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
                'name' => 'category1',
                'description' => 'category_description1',
            ],
            [
                'name' => 'category2',
                'description' => 'category_description2',
            ],
            [
                'name' => 'category3',
                'description' => 'category_description3',
            ],
        ];

        $products = [
            [
                'name' => 'product1',
                'description' => 'product_description1',
                'price' => mt_rand(1, 1000),
            ],
            [
                'name' => 'product2',
                'description' => 'product_description2',
                'price' => mt_rand(1, 1000),
            ],
            [
                'name' => 'product3',
                'description' => 'product_description3',
                'price' => mt_rand(1, 1000),
            ],
            [
                'name' => 'product4',
                'description' => 'product_description4',
                'price' => mt_rand(1, 1000),
            ],
            [
                'name' => 'product5',
                'description' => 'product_description5',
                'price' => mt_rand(1, 1000),
            ],
            [
                'name' => 'product6',
                'description' => 'product_description6',
                'price' => mt_rand(1, 1000),
            ],
        ];

        foreach($categories as $category) {
            Category::create($category);
        }
        foreach($products as $product) {
            $product = Product::create($product);
            $category = Category::find(mt_rand(1,3));
            $product->categories()->attach($category);
        }
    }
}
