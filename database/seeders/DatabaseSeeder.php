<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed roles and permissions first
        $this->call(RoleAndPermissionSeeder::class);

        // Create a default admin user with owner role
        $admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@growpath.com',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('owner');

        // Create a test user with member role
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $testUser->assignRole('member');
    }
}
