<?php

namespace Database\Seeders;

use App\Models\Packaging;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $packagings = [
            [
                'admin_id' => '1',
                'name' => 'Glass Jar',
            ],
            [
                'admin_id' => '1',
                'name' => 'Food Bag',
            ],
            [
                'admin_id' => '1',
                'name' => 'Plastic Container',
            ]
        ];

        foreach ($packagings as $packaging) {
            Packaging::create($packaging);
        }
    }
}
