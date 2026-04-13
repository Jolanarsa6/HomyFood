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
            'name' => 'buyer',
            'email' => 'buyer@gmail.com',
            'password' => bcrypt('12345678'),
            'status' => 'approved'
        ]);
        $user->assignRole('buyer');
        $user2 = User::create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('12345678'),
            'status' => 'approved'
        ]);
        $user2->assignRole('seller');
    }
}
