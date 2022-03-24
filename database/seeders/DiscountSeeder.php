<?php

namespace Database\Seeders;

use App\Models\Discount;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discounts =
        [
            [
                'percentual' => 10,
                'category_id' => 1
            ],
            [
                'percentual' => 5,
                'category_id' => 2
            ],
            [
                'percentual' => 12,
                'category_id' => 3
            ],

        ];

        foreach($discounts as $discount)
        {
            Discount::create($discount);
        }
    }
}
