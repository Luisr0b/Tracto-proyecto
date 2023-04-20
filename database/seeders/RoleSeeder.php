<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Tecnico']);

        Permission::create(['name' => 'empleados.indexempleado'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'empleados.indexempleado.create'])->syncRoles([$role1]);

        Permission::create(['name' => 'tecnicos.indexempleado'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'tecnicos.indexempleado.create'])->syncRoles([$role1, $role2]);
    }
}
