<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'full_name' => 'buyer',
            'phone' => '0983612714',
            'email' => 'buyer@gmail.com',
            'password' => bcrypt('12345678'),
            'terms' => '2026-05-06 20:50:25',
            'status' => 'approved'
        ]);
        $user->assignRole('buyer');
        $user2 = User::create([
            'full_name' => 'seller',
            'phone' => '0955649362',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('12345678'),
            'terms' => '2026-05-06 20:50:25',
            'status' => 'approved'
        ]);
        $user2->assignRole('seller');
    }
}
