<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'role_id' => 1,
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => "master",
            'email' => "master@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'),
            'role_id' => 2,
            'remember_token' => Str::random(10)
        ]);
    }
}
