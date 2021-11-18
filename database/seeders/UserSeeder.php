<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin1 =  User::create([
            'name' => 'SUPER ADMIN',
            'username' => 'Admin1',
            'email' => 'admin1@gmail.test',
            'address' => 'Jl. Basuki rahmad No.888, Palembang',
            'phone_number' => '089912129872',
            'experience' => 'OK',
            'last_login' => '2021-10-21 08:36:18',
            'password' => Hash::make('admin1'),
        ]);

        $admin2 =  User::create([
            'name' => 'ADMIN',
            'username' => 'admin2',
            'email' => 'admin2@gmail.test',
            'address' => 'Jl. Merdeka No.999, Palembang',
            'phone_number' => '082112129873',
            'experience' => 'OK',
            'last_login' => '2021-10-21 08:36:18',
            'password' => Hash::make('admin2'),
        ]);
        
        $admin1->assignRole('super admin');
        $admin2->assignRole('admin');
    }
}
