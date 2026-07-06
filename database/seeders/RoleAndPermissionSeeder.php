<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Reset cached roles and permissions to prevent conflicts
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // 2. Define your granular permissions
        $permissions = [
            'view warehouses',
            'create warehouses',
            'edit warehouses',
            'delete warehouses',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // 3. Create roles and sync permissions
        $writerRole = Role::firstOrCreate(['name' => 'Storekeeper']);
        $writerRole->syncPermissions(['view warehouses', 'edit warehouses']);

        $adminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        // Admins automatically get all permissions via syncPermissions
        $adminRole->syncPermissions(Permission::all()); 
    }
}
