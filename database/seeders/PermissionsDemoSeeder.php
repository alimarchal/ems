<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'Create Employee']);
        Permission::create(['name' => 'Update Employee']);
        Permission::create(['name' => 'View Employee']);
        Permission::create(['name' => 'Create Legal Case']);
        Permission::create(['name' => 'Update Legal Case']);
        Permission::create(['name' => 'View Legal Case']);
        Permission::create(['name' => 'Delete Legal Case']);
        Permission::create(['name' => 'Create Leave']);
        Permission::create(['name' => 'Update Leave']);
        Permission::create(['name' => 'View Leave']);
        Permission::create(['name' => 'Delete Leave']);
        Permission::create(['name' => 'Approve Leave']);
        Permission::create(['name' => 'Create Sub Department']);
        Permission::create(['name' => 'Update Sub Department']);
        Permission::create(['name' => 'View Sub Department']);
        Permission::create(['name' => 'Delete Sub Department']);
        Permission::create(['name' => 'Create Designation']);
        Permission::create(['name' => 'Update Designation']);
        Permission::create(['name' => 'Delete Designation']);
        Permission::create(['name' => 'View Designation']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Employee']);
        $role2 = Role::create(['name' => 'Administrator']);
        $role3 = Role::create(['name' => 'Manager']);


        $role1->givePermissionTo('Create Leave');
        $role1->givePermissionTo('View Leave');


        $role2->givePermissionTo('Create Employee');
        $role2->givePermissionTo('Update Employee');
        $role2->givePermissionTo('View Employee');
        $role2->givePermissionTo('Create Legal Case');
        $role2->givePermissionTo('Update Legal Case');
        $role2->givePermissionTo('View Legal Case');
        $role2->givePermissionTo('Delete Legal Case');
        $role2->givePermissionTo('Create Leave');
        $role2->givePermissionTo('Update Leave');
        $role2->givePermissionTo('View Leave');
        $role2->givePermissionTo('Delete Leave');
        $role2->givePermissionTo('Approve Leave');
        $role2->givePermissionTo('Create Sub Department');
        $role2->givePermissionTo('Update Sub Department');
        $role2->givePermissionTo('View Sub Department');
        $role2->givePermissionTo('Delete Sub Department');
        $role2->givePermissionTo('Create Designation');
        $role2->givePermissionTo('Update Designation');
        $role2->givePermissionTo('Delete Designation');
        $role2->givePermissionTo('View Designation');


        $role3->givePermissionTo('View Employee');
        $role3->givePermissionTo('View Legal Case');
        $role3->givePermissionTo('View Leave');
        $role3->givePermissionTo('Approve Leave');
        $role3->givePermissionTo('View Sub Department');
        $role3->givePermissionTo('View Designation');


        // gets all permissions via Gate::before rule; see AuthServiceProvider
        // detail documentation https://spatie.be/docs/laravel-permission/v5/basic-usage/new-app
        //php artisan migrate:fresh --seed --seeder=PermissionsDemoSeeder

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Employee User',
            'email' => 'employee@example.com',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole($role1);

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Administrator User',
            'email' => 'administrator@example.com',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole($role3);


    }
}
