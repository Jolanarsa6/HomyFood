<?php

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliveries = [
            [
                'admin_id' => '1',
                'name' => 'hand in hand',
            ],
            [
                'admin_id' => '1',
                'name' => 'alkadmous',
            ],
            [
                'admin_id' => '1',
                'name' => 'beeOrder',
            ]
        ];

        foreach ($deliveries as $delivery) {
            Delivery::create($delivery);
        }
    }
}
