<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /** 
     * 
     * @return void 
    */

    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleInvitado = Role::create(['name' => 'invitado']);

        Permission::create(['name' => 'ver:role']);
        Permission::create(['name' => 'crear:role']);
        Permission::create(['name' => 'editar:role']);
        Permission::create(['name' => 'eliminar:role']);

        Permission::create(['name' => 'ver:permiso']);

        Permission::create(['name' => 'ver:usuario']);
        Permission::create(['name' => 'crear:usuario']);
        Permission::create(['name' => 'editar:usuario']);
        Permission::create(['name' => 'eliminar:usuario']);

        $user = new User;
        $user->name= 'Admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleAdmin);

        $user = new User;
        $user->name= 'Invitado';
        $user->email = 'invitado@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleInvitado);
    }
}