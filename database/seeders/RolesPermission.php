<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolesPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);


        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();



        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo('edit articles');


        $role = Role::create(['name' => 'moderator-site'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);
        $role = Role::create(['name' => 'moderator-event'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
