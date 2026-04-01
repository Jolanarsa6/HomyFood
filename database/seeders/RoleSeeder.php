<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name'=>'buyer','guard_name'=>'web']);
        Role::create(['name'=>'seller','guard_name'=>'web']);
    }
}
