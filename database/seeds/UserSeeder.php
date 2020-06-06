<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('password123'),
            'is_admin' => false,
        ]);
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('password123'),
            'is_admin' => true,
        ]);
    }
}
