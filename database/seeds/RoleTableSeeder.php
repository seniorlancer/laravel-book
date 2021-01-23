<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_viewer = new Role();
        $role_viewer->name = 'viewer';
        $role_viewer->description = 'Only viewing';
        $role_viewer->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An admin';
        $role_admin->save();

        $role_superadmin = new Role();
        $role_superadmin->name = 'superadmin';
        $role_superadmin->description = 'Super Admin with all permissions';
        $role_superadmin->save();
    }
}
