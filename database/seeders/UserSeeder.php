<?php

namespace Database\Seeders;

use App\Models\Profile;
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
            'full_name' => 'Marah',
            'phone' => '0983612714',
            'email' => 'buyer@gmail.com',
            'password' => bcrypt('12345678'),
            'terms' => '2026-05-06 20:50:25',
            'status' => 'approved'
        ]);
        $user->assignRole('buyer');
        $user2 = User::create([
            'full_name' => 'Jolanar',
            'phone' => '0955649362',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('12345678'),
            'terms' => '2026-05-06 20:50:25',
            'status' => 'approved'
        ]);
        $user2->assignRole('seller');

    $profile = Profile::create([
        'user_id' => $user2->id,
        'birthdate' => '2026-05-06',
        'country'=> 'Syria',
        'city'=> 'Tartous',
        'town'=> 'Safitaa',
        'address'=> 'Tartous-Safitaa',
        'product_type'=> 'Jams',
        'capability'=> '5',
        'bank_name'=> 'Al-Sahel',
        'IBAN'=> '1234',
        'id_number'=> '12345678',
        'username'=> 'Al-Sahel',
        'id_image_front'=> 'Syria',
        'id_image_back'=> 'Syria',
        'terms_data'=> 'on',
        'agree'=> 'on',
        'terms_accepted_at'=> now(),
        'terms_version'=> '1.1',
        'ip_address'=> 'Syria',
    ]);

       $path = public_path('images/a.jpg');

        if (file_exists($path)) {
            $profile->addMedia($path)
                    ->preservingOriginal() 
                    ->toMediaCollection('images');
        }

    }
}
