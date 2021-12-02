<?php

namespace Database\Seeders;

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
        $role1=Role::create(['name'=>'Secretaria']);
        $role2=Role::create(['name'=>'Sacerdote']);
        $role3=Role::create(['name'=>'Feligres']);

        permission::create(['name'=>'usuarios.index'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'usuarios.create'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'usuarios.edit'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'usuarios.destroy'])->syncRoles([$role1,$role2,$role3]);

        permission::create(['name'=>'servicios.index'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'servicios.create'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'servicios.edit'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'servicios.destroy'])->syncRoles([$role1,$role2,$role3]);

        permission::create(['name'=>'tiposervicios.index'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'tiposervicios.create'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'tiposervicios.edit'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'tiposervicios.destroy'])->syncRoles([$role1,$role2,$role3]);
    }
}
