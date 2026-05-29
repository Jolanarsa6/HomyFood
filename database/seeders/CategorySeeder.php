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
                'name' => 'Honey',
            ],
            [
                'admin_id' => '1',
                'name' => 'Nannies',
            ],
            [
                'admin_id' => '1',
                'name' => 'Thyme',
            ],
            [
                'admin_id' => '2',
                'name' => 'Oils',
            ],
            [
                'admin_id' => '2',
                'name' => 'Mortar',
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
