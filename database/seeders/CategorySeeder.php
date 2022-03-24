<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = 
        [
            [
                'id' => 1,
                'name' => 'Roupas'
            ],
            [
                'id' => 2,
                'name' => 'Eletrodomesticos'
            ],
            [
                'id' => 3,
                'name' => 'Celulares'
            ]
        ];

        foreach ($categories as $category)
        {
            Category::create($category);
        }
        
    }
}
