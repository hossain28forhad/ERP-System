<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            'dashboard.view',

            'users.view',
            'users.create',
            'users.edit',
            'users.delete',

            'products.view',
            'products.create',
            'products.edit',
            'products.delete',

            'categories.view',
            'categories.create',
            'categories.edit',
            'categories.delete',

        ];

        foreach ($permissions as $permission) {

            Permission::firstOrCreate([
                'name'=>$permission
            ]);

        }

        $admin = Role::firstOrCreate([
            'name'=>'Admin'
        ]);

        $manager = Role::firstOrCreate([
            'name'=>'Manager'
        ]);

        $sales = Role::firstOrCreate([
            'name'=>'Sales'
        ]);

        $accountant = Role::firstOrCreate([
            'name'=>'Accountant'
        ]);

        $hr = Role::firstOrCreate([
            'name'=>'HR'
        ]);

        $admin->syncPermissions(Permission::all());
    }
}
