<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = 
        [
            [
                'name' => 'Iphone 10',
                'value' => 4000,
                'category_id' => 3
            ],
            [
                'name' => 'Geladeira Brastemp',
                'value' => 2000,
                'category_id' => 2
            ],
            [
                'name' => 'Moletom PSG',
                'value' => 700,
                'category_id' => 1
            ]
        ]

        foreach ($products as $product)
        {
            Product::create($product)
        }
    }
}
