<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Super Administrador']);
        $role2 = Role::create(['name' => 'Administrador']);
        $role3 = Role::create(['name' => 'Perito']);

        Permission::create(['name' => 'dictamenes'])->assignRole($role1);
        Permission::create(['name' => 'tipohechos'])->assignRole($role1);
        Permission::create(['name' => 'Catefotos'])->assignRole($role1);
        Permission::create(['name' => 'Cuerpos'])->syncRoles($role1, $role2, $role3 );
        //
    }
}
