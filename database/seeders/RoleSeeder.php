<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);

        Role::create(['name' => 'super admin'])->givePermissionTo(['create', 'read', 'update', 'delete' ]);
        Role::create(['name' => 'admin'])->givePermissionTo(['create', 'read', 'update', 'delete' ]);
    }
}
