<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'publish']);
        Permission::create(['name' => 'unpublish']);
        Permission::create(['name' => 'dashboard']);

        $role1 = Role::create(['name' => 'client']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'organization']);
        $role1->givePermissionTo('edit');
        $role1->givePermissionTo('delete');
        $role1->givePermissionTo('publish');
        $role1->givePermissionTo('unpublish');

        $role2 = Role::create(['name' => 'developer']);

        $role3 = Role::create(['name' => 'super_admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

    }

}
