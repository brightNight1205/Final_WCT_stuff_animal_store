<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'first_name' => 'Alice',
                'last_name' => 'Chan',
                'email' => 'alice.chan@example.com',
                'password' => 'password123',
                
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'Sok',
                'email' => 'bob.sok@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Chenda',
                'last_name' => 'Meas',
                'email' => 'chenda.meas@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Dara',
                'last_name' => 'Srean',
                'email' => 'dara.srean@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Eang',
                'last_name' => 'Pisey',
                'email' => 'eang.pisey@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Fara',
                'last_name' => 'Lim',
                'email' => 'fara.lim@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Gavin',
                'last_name' => 'Chea',
                'email' => 'gavin.chea@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Heng',
                'last_name' => 'Phirun',
                'email' => 'heng.phirun@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'Iv',
                'last_name' => 'Sokunthea',
                'email' => 'iv.sokunthea@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => 'password123',
            ],
            [
                'first_name' => 'test',
                'last_name' => 'test',
                'email' => 'test123@example.com',
                'password' => 'password123',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'password' => Hash::make($user['password']),
                    'remember_token' => Str::random(10),
                ]
            );
        }
    }
}
