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
        if (DB::table('users')->where('email', 'ismoil_007u@gmail.com')->doesntExist()) {
            DB::table('users')->insert([
                'name' => 'ismoil',
                'email' => 'ismoil_007u@gmail.com',
                'role' => 0,
                'password' => Hash::make('ismoil'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        };
        if (DB::table('users')->where('email', 'admin@gmail.com')->doesntExist()) {
            DB::table('users')->insert([
                'name' => 'SuperAdmin',
                'email' => 'admin@gmail.com',
                'role' => 0,
                'password' => Hash::make('admin@gmail.com'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
