<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =[ 
            [
                'admin_id' => '1',
                'name' => 'Jam',
            ],
            [
                'admin_id' => '1',
                'name' => 'Makdous',
            ],
            [
                'admin_id' => '1',
                'name' => 'Zaatar',
            ],
            [
                'admin_id' => '2',
                'name' => 'Ghee',
            ],
            [
                'admin_id' => '2',
                'name' => 'Dairy',
            ],
            [
                'admin_id' => '2',
                'name' => 'Pickles',
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
