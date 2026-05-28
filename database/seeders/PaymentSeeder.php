<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             $payments = [
            [
                'admin_id' => '1',
                'name' => 'Syriatel Kash',
            ],
            [
                'admin_id' => '1',
                'name' => 'Sham Kash',
            ],
            [
                'admin_id' => '1',
                'name' => 'Cash On Delivery',
            ]
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}
