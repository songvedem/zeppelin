<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        // Default credentials
        \App\Models\User::insert([
            [
                'name' => 'Left4code',
                'email' => 'midone@left4code.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'gender' => 'male',
                'active' => 1,
                'remember_token' => Str::random(10)
            ]
        ]);

        \App\Models\User::insert([
            [
                'name' => 'Hoàng Phúc',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make("123456"),
                'gender' => 'male',
                'active' => 1,
                'remember_token' => Str::random(10)
            ]
        ]);

        // Fake users
        User::factory()->times(9)->create();
    }
}
