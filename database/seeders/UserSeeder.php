<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'first_name' => "Oyinkansola",
            'last_name' => "Aibade",
            'email' => "detunjinov@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('aaaaaaaa'),
            'remember_token' => Str::random(10),
        ]);
    }
}
