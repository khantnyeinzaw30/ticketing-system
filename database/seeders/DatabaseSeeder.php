<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'admin',
            'last_name' => 'Hello World',
            'username' => 'ADMIN_HELLO_WORLD',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin123'),
        ]);

        \App\Models\User::factory()->create([
            'first_name' => 'agent',
            'last_name' => 'kingsman',
            'username' => 'Agent User',
            'email' => 'agent@agent.com',
            'password' => Hash::make('Agent123'),
        ]);

        $this->call([
            CategorySeeder::class,
            LabelSeeder::class,
            RolesSeeder::class
        ]);
    }
}
