<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'user_type' => 'Administrator',
            'name' => 'Admin',
            'email' => 'support@luzdecalcio.net',
            'email_verified_at' => now(),
            'password' => bcrypt('Password1'),
        ]);
    }
}
