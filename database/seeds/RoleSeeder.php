<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Vendedor']);
        $role3 = Role::create(['name' => 'Almacenista']);
        $role4 = Role::create(['name' => 'Empleado']);
        $role5 = Role::create(['name' => 'Recursos humanos']);

        $permission = Permission::create(['name' => 'empleados'])->assignRole($role1);
        $permission = Permission::create(['name' => 'productos'])->syncRoles([$role1,$role3]);
        $permission = Permission::create(['name' => 'vacantes'])->syncRoles([$role1,$role5]);
    }
}
