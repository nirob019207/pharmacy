<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


use App\Models\User;


class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);   //
    }
}
