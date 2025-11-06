<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // Prospect permissions
            'view-prospects',
            'create-prospects',
            'edit-prospects',
            'delete-prospects',
            'view-all-prospects',
            'edit-all-prospects',
            'delete-all-prospects',

            // Client permissions
            'view-clients',
            'create-clients',
            'edit-clients',
            'delete-clients',
            'view-all-clients',

            // Follow-up permissions
            'view-follow-ups',
            'create-follow-ups',
            'edit-follow-ups',
            'delete-follow-ups',

            // Pipeline permissions
            'view-pipeline',
            'manage-pipeline',

            // Reporting permissions
            'view-reports',
            'view-team-reports',
            'export-data',

            // Team management permissions
            'manage-team',
            'assign-prospects',

            // Settings permissions
            'manage-settings',
            'manage-billing',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions

        // Owner Role - Full access
        $owner = Role::create(['name' => 'owner']);
        $owner->givePermissionTo(Permission::all());

        // Admin Role - All except billing
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'view-prospects',
            'create-prospects',
            'edit-prospects',
            'delete-prospects',
            'view-all-prospects',
            'edit-all-prospects',
            'delete-all-prospects',
            'view-clients',
            'create-clients',
            'edit-clients',
            'delete-clients',
            'view-all-clients',
            'view-follow-ups',
            'create-follow-ups',
            'edit-follow-ups',
            'delete-follow-ups',
            'view-pipeline',
            'manage-pipeline',
            'view-reports',
            'view-team-reports',
            'export-data',
            'manage-team',
            'assign-prospects',
            'manage-settings',
        ]);

        // Manager Role - Team view and assignment
        $manager = Role::create(['name' => 'manager']);
        $manager->givePermissionTo([
            'view-prospects',
            'create-prospects',
            'edit-prospects',
            'view-all-prospects',
            'view-clients',
            'create-clients',
            'edit-clients',
            'view-all-clients',
            'view-follow-ups',
            'create-follow-ups',
            'edit-follow-ups',
            'view-pipeline',
            'view-reports',
            'view-team-reports',
            'assign-prospects',
        ]);

        // Member Role - Own data only
        $member = Role::create(['name' => 'member']);
        $member->givePermissionTo([
            'view-prospects',
            'create-prospects',
            'edit-prospects',
            'view-clients',
            'view-follow-ups',
            'create-follow-ups',
            'edit-follow-ups',
            'view-pipeline',
            'view-reports',
        ]);
    }
}
