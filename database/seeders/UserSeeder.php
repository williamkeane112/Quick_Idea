<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'email' => 'johndoe@example.com',
                'name' => 'John Doe',
                'userName' => 'JohnDoe',
                'no_hp' => 878000000, // Integer, no quotes needed
                'email_verified_at' => null, // Can be null
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'johnsmit@example.com',
                'name' => 'John Smit',
                'userName' => 'JohnSmit',
                'no_hp' => 878111111, // Integer, no quotes needed
                'email_verified_at' => null, // Can be null
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'johnking@example.com',
                'name' => 'John King',
                'userName' => 'JohnKing',
                'no_hp' => 878222222, // Integer, no quotes needed
                'email_verified_at' => null, // Can be null
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
