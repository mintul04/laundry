<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
		'name'     => 'petugas',
		'email'    => 'petugas@gmail.com',
		'password' => bcrypt('petugas123'),
		'role'     => 'petugas',
	]);
	
	   User::create([
		'name'     => 'owner',
		'email'    => 'owner@gmail.com',
		'password' => bcrypt('owner123'),
		'role'     => 'owner',
	]);

	   User::create([
		'name'     => 'pelanggan',
		'email'    => 'pelanggan@gmail.com',
		'password' => bcrypt('pelanggan123'),
	]);
        // User::factory(10)->create();
/* 
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */
    }
}
