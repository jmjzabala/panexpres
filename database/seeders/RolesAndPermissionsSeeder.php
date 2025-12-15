<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Permissions grouped by domain for a marketplace/bakery site
        $permissions = [
            // Products & combos
            'products.view',
            'products.create',
            'products.update',
            'products.delete',
            'combos.view',
            'combos.create',
            'combos.update',
            'combos.delete',

            // Categories & bakeries
            'categories.manage',
            'bakeries.manage',

            // Orders
            'orders.create',
            'orders.view',
            'orders.update',
            'orders.delete',

            // Users & roles
            'users.view',
            'users.manage',
            'roles.manage',

            // Settings & reports
            'settings.manage',
            'reports.view',
        ];

        // Create permissions
        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Create roles
        $roles = [
            'Cliente' => [
                'products.view',
                'combos.view',
                'orders.create',
                'orders.view',
            ],
            'Comercio' => [
                'products.view',
                'products.create',
                'products.update',
                'products.delete',
                'combos.view',
                'combos.create',
                'combos.update',
                'combos.delete',
                'orders.view',
                'bakeries.manage',
                'categories.manage',
            ],
            'Supervisor' => [
                'products.view',
                'products.update',
                'products.delete',
                'bakeries.manage',
                'categories.manage',
                'reports.view',
                'users.view',
            ],
            'Administrador' => [
                // will be granted all permissions later
            ],
        ];

        foreach ($roles as $roleName => $perms) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            if (!empty($perms)) {
                $role->syncPermissions($perms);
            }
        }

        // Give Administrador every permission
        $adminRole = Role::firstOrCreate(['name' => 'Administrador']);
        $allPermissions = Permission::all();
        $adminRole->syncPermissions($allPermissions);

        // Optionally assign role to existing users: assign 'Administrador' to first user if exists
        $firstUser = User::first();
        if ($firstUser) {
            $firstUser->assignRole('Administrador');
        }
    }
}
