<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super User', // Set the name for the user
            'email' => 'superuser@pas.com', // Set the email for the user
            'password' => Hash::make('superuser@123'), // Set a hashed password
        ]);
    }
}
